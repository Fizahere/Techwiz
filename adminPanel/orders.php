<?php
include_once('header_admin.php');

?>
<div class="container pt-4">
    <div class="bg-light rounded p-4">
        <div class="row">
            <div class="col-12">
                <div class="bg-white rounded h-100 ">
                    <div class="d-flex bg-light justify-content-between">

                        <h4>Orders</h4>

                        <form method="post">
                            <button class="btn bg-white text-black mb-2" name="sort-by-vaccination-date">Sort by
                                vaccination date</button>
                        </form>
                    </div>
                    <div class="table-responsive bg- ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    <td>User Name</td>
                                    <td>Product Name</td>
                                    <td>Quantity</td>
                                    <td>Amount</td>
                                    <td>Date</td>
                                    <td>Status </td>
                                    <td> </td>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                     function getSortedData($pdo)
{
    $query = $pdo->query("SELECT * FROM children_details 
                          INNER JOIN parent_login ON children_details.parentID = parent_login.parentID 
                          INNER JOIN vaccine_details ON children_details.vaccineID = vaccine_details.vaccineID 
                          INNER JOIN hospital_login ON children_details.hospitalID = hospital_login.hospitalID 
                          ORDER BY vaccinationDate ASC");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// Check if the "Sort by vaccination date" button is clicked
if (isset($_POST['sort-by-vaccination-date'])) {
    $result = getSortedData($pdo);
} else {
    // By default, get data without sorting
    $query = $pdo->query("SELECT * FROM orders INNER JOIN users ON orders.userID = users.userID INNER JOIN  products ON orders.productID =products.productID ;");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
}
                        foreach($result as $row){
                        ?>
                                <tr class="tr-row">
                                    <th scope="row">
                                        <?php echo $row['orderID'] ?>
                                    </th>

                                    <td>
                                        <?php echo ucfirst($row['firstName']) ?>
                                    </td>
                                    <td>
                                        <?php echo $row['productName'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['productQuantity'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['totalAmount'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['orderDate'] ?>
                                    </td>
                                 

                                  
                                    

                                     <td class="d-flex">
      <?php echo $row['orderStatus'] ?>
      <div class="mx-auto">
        <i class="fa fa-ellipsis-v" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <form action="" method="post">
            <input type="hidden" name="orderIDStatus" value="<?php echo $row['orderID'] ?>">
            <button class="dropdown-item" name="OrderApprove">Approve</button>
            <button class="dropdown-item" name="OrdertReject" >Reject</button>
          </form>
        </div>
      </div>
    </td>

                                </tr>


                                <?php
                        };

                                       ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="js/script.js"></script>

<?php
include('footer.php');
?>