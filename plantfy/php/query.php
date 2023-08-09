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
    if (empty($_POST['username'])) {
        redirectWindow('signup.php');
    }
    if (empty($_POST['fullname'])) {
        redirectWindow('signup.php');
    }
    if (empty($_POST['email'])) {
        redirectWindow('signup.php');
    }
    if (empty($_POST['password'])) {
        redirectWindow('signup.php');
    }
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //checking if user already exists
    $user = $authModel->findUserWithEmail($email, $pdo);
    if ($user) {
        redirectWindow("signup.php?error=Email already exists");
    }

    $authModel->signup($username, $fullname, $email, $password, $pdo);
    $user = $authModel->findUserWithEmail($email, $pdo);

    if ($user) {
        $_SESSION['USERMain'] = $user;
        redirectWindow('login.php');
    } else {
        redirectWindow("signup.php?error=Something went wrong");
    }
}
?>

<!-- //signin -->
<?php
if (isset($_POST['login'])) {
    if (empty($_POST['email'])) {
        redirectWindow('login.php?error=email is required');
    }
    if (empty($_POST['password'])) {
        redirectWindow('login.php?error=password is required');
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    // if ($_POST['role'] == 'user') {
    $user = $authModel->findUserWithEmail($email, $pdo);
    if (password_verify($password, $user[0]['userPassword'])) {
        $_SESSION['USER'] = $user;
        redirectWindow('index.php');
    } else {
        redirectWindow('login.php?error=invalid credentials');
    }

}
;

if (isset($_POST['edit'])) {
    $userID = $_POST['userID'];
    $userName = $_POST['username'];
    $fullName = $_POST['fullname'];
    $emailAddress = $_POST['email'];

    $authModel->update($userName, $fullName, $emailAddress, $userID, $pdo);
    redirectWindow('my-account.php');
    // $query = $pdo->prepare('update users set ')
};

?>