<?php
include_once('header_admin.php');

?>
<div class="container pt-4">
    <div class="bg-light rounded p-4">
        <div class="row">
            <div class="col-12">
                <div class="bg-white rounded h-100 ">
                    <div class="d-flex bg-light justify-content-between">

                        <h4>Category</h4>

                        <button type="button" class="btn text-dark  bg-white mb-2 insert" data-bs-toggle="modal"
                            data-bs-target="#insert-category-modal" name="insertCategory">Add category
                        </button>


                    </div>
                    <div class="table-responsive bg- ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col"> </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                        $query = $pdo->query("SELECT * FROM categories");
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
               
                        foreach($result as $row){
                        ?>
                                <tr class="tr-row">
                                    <th scope="row">
                                        <?php echo $row['categoryID'] ?>
                                    </th>

                                    <td>
                                        <?php echo $row['categoryName'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['categoryImage'] ?>
                                    </td>


                                    <td class="">
                                        <button class="btn btn-white edit-btn " data-bs-toggle="modal"
                                            data-bs-target="#update-hospital-modal<?php echo $row['categoryID']  ?>">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <button class="btn btn-white" data-bs-toggle="modal"
                                            data-bs-target="#delete-hospital-modal<?php echo $row['categoryID']  ?>">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                    </td>
                                </tr>
                                <!-------------------------------------------------
                                        |                                                 |
                                        | modal for update hospital information           | 
                                        | [start]                                         |
                                        |                                                 |      
                                        -------------------------------------------------->
                                <div class="modal" id="update-hospital-modal<?php echo $row['categoryID'] ?>">
                                    <div class="modal-dialog modal-xl bg-light ">
                                        <div class="modal-content bg-light">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Information</h4>
                                                <button type="button" class="btn-close  bg-white"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post" action="" enctype="multipart/form-data">


                                                    <div class="mb-3 row">
                                                        <label for="inputPassword"
                                                            class="col-sm-2 col-form-label">ID</label>
                                                        <div class="col-sm-10">
                                                            <input value="<?php echo $row['hospitalID'] ?>" readonly
                                                                class="form-control bg-white" name="model-id">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input value="<?php echo $row['hospitalName'] ?>"
                                                                id="modal-category-name" name="model-name"
                                                                class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input value="<?php echo $row['hospitalEmail'] ?>"
                                                                id="modal-category-name" name="model-email"
                                                                class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Adress</label>
                                                        <div class="col-sm-10">
                                                            <input value="<?php echo $row['hospitalLocation'] ?>"
                                                                id="modal-category-name" name="model-location"
                                                                class="form-control" type="text">
                                                        </div>
                                                    </div>





                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-dark text-white"
                                                            name="update_hospital_info">
                                                            Update</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-------------------------------------------------
                                        |                                                 |
                                        | modal for update hospital information           | 
                                        | [end]                                           |
                                        |                                                 |      
                                        -------------------------------------------------->
                                <!-------------------------------------------------
                                        |                                                 |
                                        | modal for delete hospital information           | 
                                        | [start]                                         |
                                        |                                                 |      
                                        -------------------------------------------------->
                                <div class="modal " id="delete-hospital-modal<?php echo $row['categoryID'] ?>">
                                    <div class="modal-dialog modal-xl bg-light w-50">
                                        <div class="modal-content bg-light">
                                            <!-- <div class="modal-header">
                <h4 class="modal-title">Edit Information</h4>
                <button type="button" class="btn-close  bg-white"
                    data-bs-dismiss="modal"></button>
            </div> -->
                                            <!-- Modal body -->
                                            <div class="modal-body ">
                                                <form method="post">
                                                    <div class="d-flex justify-centre">
                                                        <div>
                                                            <input type="hidden" name="hospital_id_delete"
                                                                value="<?php echo $row['hospitalID']; ?>">
                                                            <span class="text-bold">'
                                                                <?php echo $row['hospitalName'] ?>'
                                                            </span>
                                                            <span> will also delete from database. <span>
                                                                    <p>Are you sure you want to permanently delete this
                                                                        file?</p>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-dark text-white"
                                                            name="delete_hospital_info">
                                                            Yes</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">No</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-------------------------------------------------
                                        |                                                 |
                                        | modal for delete hospital information           | 
                                        | [end]                                           |
                                        |                                                 |      
                                        -------------------------------------------------->
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

<!-------------------------------------------------
                                        |                                                 |
                                        | modal for insert hospital information           | 
                                        | [start]                                         |
                                        |                                                 |      
                                        -------------------------------------------------->
<div class="modal" id="insert-category-modal">
    <div class="modal-dialog modal-xl bg-white">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="" enctype="multipart/form-data">

                    <div class="mb-3 row form-group">
                        <label for="" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10"> <input placeholder="Enter hospital name.." class="form-control bg-white"
                                name="insert-hospital-name"></div>
                    </div>

                    <div class="mb-3 row form-group">
                        <label for="" class="col-sm-2 col-form-label"> Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="categoryImage" class="form-control bg-white">
                        </div>
                    </div>



                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" name="insert-hospital-btn" class="btn btn-dark text-white">Add</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-------------------------------------------------
                                        |                                                 |
                                        | modal for insert hospital information           | 
                                        | [end]                                           |
                                        |                                                 |      
                                        -------------------------------------------------->

<script src="js/script.js"></script>
<script>
    function togglePasswordVisibility() {
        const passwordInput = document.querySelector('.password-input');
        const eyeIcon = document.querySelector('.toggle-password i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.add('visible');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('visible');
        }
        // alert('hello');
    }
</script>
<?php
include('footer.php');
?>