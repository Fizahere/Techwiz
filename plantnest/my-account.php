<?php
include("./components/sessionHeader.php");
if (!isset($_SESSION['USER'])) {
    redirectWindow('login.php');
}
// if(isset($_POST['cancelOrder'])){
//     $
// }
?>
<style>
    .profile img {
        width: 18rem;
        height: 16rem;
        border-radius: 50%;
        margin-left: 3rem;
    }

    .profile {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .name {
        margin-left: 3rem !important;
    }

    #logoutButton {
        width: 20rem !important;
        height: 4rem;
    }

    #delete_btn {
        width: 20rem !important;
        height: 4rem;
        background-color: rgb(208, 60, 78) !important;
        border: none;
    }

    #logoutButton {
        cursor: pointer;
    }
</style>

</div>

<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">My Account</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="index.php">Home</a></li>
                    <li><span>My Account</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- My Account Start -->
    <div class="my-account-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- My Account Tabs Start -->
            <div class="my-account-tab">
                <!-- My Account Tabs Menu Start -->
                <div class="my-account-tab__menu">
                    <ul class="nav justify-content-center">
                        <li>
                            <button class="account-btn active" data-bs-toggle="tab" data-bs-target="#dashboard"
                                type="button">
                                Profile
                            </button>
                        </li>
                        <li>
                            <button class="account-btn" data-bs-toggle="tab" data-bs-target="#orders" type="button">
                                Orders
                            </button>
                        </li>
                        <li>
                            <button class="account-btn" data-bs-toggle="tab" data-bs-target="#delete-account"
                                type="button">
                                Delete Your Account
                            </button>
                        </li>
                        <li>
                            <button class="account-btn" data-bs-toggle="tab" data-bs-target="#logout" type="button">
                                Logout
                            </button>
                        </li>
                    </ul>
                </div>
                <!-- My Account Tabs Menu End -->

                <div class="tab-content">

                    <!-- account update section start -->
                    <div class="tab-pane fade show active" id="dashboard">
                        <!-- My Account Dashboard Start -->
                        <?php
                        $user = $_SESSION['USER'];
                        // print_r($user);
                        foreach ($user as $item) {
                            $userID = $item['userID'];
                            // echo '<script>alert("'.$userID.'")</script>';
                        }
                        $query = $pdo->prepare('select * from users where userID = :id');
                        $query->bindParam('id', $userID);
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result as $value) {

                            $userName = $value['firstName'];
                            $lastName = $value['lastName'];
                            $emailAddress = $value['userEmail'];
                        }
                        ?>
                        <div class="my-account-dashboard">
                            <form action="#" method='post'>
                                <div class="container mt-3">
                                    <div class="row">
                                        <div class="col-md-3"></div>

                                        <div class="col-md-6">
                                            <input type="hidden" name="userID" value="<?php echo $userID ?>">
                                            <div class="single-form">
                                                <label class="single-form__label">First Nname *</label>
                                                <input class="single-form__input" type="text" name="username"
                                                    value="<?php echo $userName ?>" />

                                                <!-- Single Form Start -->
                                            </div>
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">Last Name *</label>
                                                <input class="single-form__input" type="text" name="fullname"
                                                    value="<?php echo $lastName ?>" />
                                            </div>

                                            <div class="single-form">
                                                <label class="single-form__label">Email Address *</label>
                                                <input class="single-form__input" type="text" name="email"
                                                    value="<?php echo $emailAddress ?>" />

                                                <!-- Single Form Start -->
                                            </div>
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <button class="single-form__btn btn" name="edit">
                                                    Save Change
                                                </button>
                                            </div>

                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--  update account section end -->
                    <!-- orders section start -->
                    <div class="tab-pane fade" id="orders">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h4 class="h4 mb-3">Orders Details</h4>
                                    <?php
                                    $query = $pdo->query("SELECT orders.*,final_order.*
                                   FROM orders 
                                   INNER JOIN final_order ON final_order.user_id = orders.userID where orderStatus = 'pending' OR orderStatus = 'approved' GROUP BY orders.date = final_order.date_of_order;");
                                    $getOrders = $query->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($getOrders as $singleOrder) {
                                        ?>
                                        <div class="single-form">
                                            <div class="col-md-12 mt-4">
                                                <h4 class="contact-info-item__title">
                                                    Order #
                                                    <?php echo $singleOrder['order_id'] ?> :
                                                </h4>
                                                <p class="contact-info-item__title">Items</p>
                                                <ul>
                                                    <?php
                                                    $queryToGetItems = $pdo->query("SELECT * FROM orders INNER JOIN users ON orders.userID = users.userID INNER JOIN  products ON orders.productID =products.productID");
                                                    $orderItems = $queryToGetItems->fetchAll(PDO::FETCH_ASSOC);
                                                    foreach ($orderItems as $singleItem) {
                                                        echo "<script>alert('".$singleItem['productName']."')</script>";
                                                        ?>
                                                        <li>
                                                            <?php echo $row['productName'] ?>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>
                                                </ul>
                                                <form action="" method='post'>
                                                    <button class="wishlist-table__btn btn" name='cancelOrder'>Cancel
                                                        Order</button>
                                                </form>
                                                <?php
                                                // }
                                                ?>

                                                <div class="contact-info-item__service mt-4">
                                                </div>
                                                <?php
                                                // }
                                                // }
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
                <!-- orders section end -->

                <!-- account delete section start -->
                <div class="tab-pane fade my-4" id="delete-account">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <h5 class="h5 mb-3">Are you sure you want to Delete Your Account ?</h5>

                                <div class="single-form">
                                    <form action="" method="post">
                                        <?php
                                        $users = $_SESSION['USER'];
                                        foreach ($users as $user) {
                                            $userID = $user['userID'];
                                        }
                                        // echo '<script>alert("'.$userID.'")</script>';
                                        ?>
                                        <input type="hidden" name="deleteID" value="<?php echo $userID ?>" id="">

                                        <button class="single-form__btn btn" type="submit" name="delete-account"
                                            id='delete_btn'>
                                            <h4 class='h6'>Delete Account ?</h4>
                                        </button>

                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
                <!-- account delete section end -->

                <!-- logout section start -->

                <div class="tab-pane fade" id="logout">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <h5 class="h5 mb-3">Are you sure you want to sign out?</h5>

                                <div class="single-form">
                                    <a href="logout.php">
                                        <button class="single-form__btn btn" id='logoutButton'>
                                            <h4 class='h6'>Sign Out ?</h4>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
                <!-- logout section end  -->

            </div>
        </div>
    </div>
    <!-- My Account Tabs End -->
    </div>
    </div>
    <!-- My Account End -->


</main>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get a reference to the logout button
        const logoutButton = document.getElementById('logoutButton');

        // Attach a click event listener to the logout button
        logoutButton.addEventListener('click', function () {
            // Display a confirmation dialog
            const confirmed = window.confirm('Are you sure you want to Sign out?');

            // If the user confirms, log them out
            if (confirmed) {
                // Perform the logout action here, for example, redirect to 'logout.php'
                window.location.href = 'logout.php';
            }
        });
    });

</script>
<?php
include_once('components/footer.php')
    ?>
</body>

</html>