<?php
session_start();
include_once('models/config.php');
include_once("models/auth.php");
?>

<?php
//php code start
$authModel = new Auth();
?>

<?php
// signup
if (isset($_POST['signup'])) {
    if (empty($_POST['name'])) {
        redirectWindow('signup.php?error=name is required');
    }
    if (empty($_POST['email'])) {
        redirectWindow('signup.php?error=email is required');
    }
    if (empty($_POST['password'])) {
        redirectWindow('signup.php?error=password is required');
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //checking if user already exists
    $user = $authModel->findUserWithEmail($email, $pdo);
    if ($user) {
        redirectWindow("signup.php?error=Email already exists");
    }

    $authModel->signup($name, $email, $password, $pdo);
    $user = $authModel->findUserWithEmail($email, $pdo);

    if ($user) {
        $_SESSION['USER'] = $user;
        redirectWindow('index.php');
    } else {
        redirectWindow("signup.php?error=Something went wrong");
    }
}
?>

<!-- //signin -->
<?php
if (isset($_POST['signin'])) {
    if (empty($_POST['email'])) {
        redirectWindow('signin.php?error=email is required');
    }
    if (empty($_POST['password'])) {
        redirectWindow('signin.php?error=password is required');
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    // if ($_POST['role'] == 'user') {
    $user = $authModel->findUserWithEmail($email, $pdo);
    if (password_verify($password, $user[0]['Password'])) {
        $_SESSION['user'] = $user;
        redirectWindow('index.php');
    } else {
        redirectWindow('signin.php?error=invalid credentials');
    }
    // };
}
;

//insert
if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $authModel->update($name, $email, $password, $id, $pdo);
    redirectWindow('index.php');
}



?>