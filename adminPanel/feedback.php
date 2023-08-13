<?php
include('header_admin.php')
?>
<div class="container pt-4">
    <div class="bg-light rounded p-4">
        <div class="row">
            <div class="col-12">
                <div class="bg-white rounded h-100 ">
                    <div class="d-flex bg-light justify-content-between">

                        <h4>Reviews</h4>




                    </div>
                    <div class="table-responsive bg- ">
                        <table class="table">
                        <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Feedback</th>
                                    <th scope="col">user</th>
                                   
                                    <th scope="col"> </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                        $query = $pdo->query("SELECT * FROM feedback INNER JOIN users on feedback.feedbackUserID = users.userID;");
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
               
                        foreach($result as $row){
                        ?>
                                <tr class="tr-row">
                                <th scope="row">
                                            <?php echo $row['feedbackID'] ?>
                                        </th>
                                    <td>
                                    <?php echo $row['feedback'] ?>
                                       

                                    </td>
                                    <td>
                                    <?php echo $row['firstName'] ?>
                                       

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
<?php
include('footer.php')
?>