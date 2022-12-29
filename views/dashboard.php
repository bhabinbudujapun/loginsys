<?php
include "include/header.php";
?>
<?php if (isset($_SESSION['username'])) { ?>

    <div class="container d-flex justify-content-between mb-3 mt-3">
        <h4>Welcome, <strong><?php echo $_SESSION['username'] ?></strong></h4>
        <a href=<?= ABSPATH . "/user/logout/" ?> class="btn btn-warning text-white ml-auto">Logout</a>
    </div>

    <div class="container d-flex justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $users = $_SESSION['userdata'];
                foreach ($users as $key) {
                ?>
                    <tr>
                        <td id="id"> <?php echo $key['id'] ?> </td>
                        <td id="email"> <?php echo $key['email'] ?> </td>
                        <td id="username"> <?php echo $key['username'] ?> </td>
                        <td> <?php echo $key['created_at'] ?> </td>
                        <td> <?php echo $key['updated_at'] ?> </td>
                        <td id="address"> <?php echo $key['address'] ?> </td>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Link to open the modal -->
                                        <a data-toggle="modal" data-target="#editModal" data-id="<?php echo $key['id'] ?>" data-email="<?php echo $key['email'] ?>" data-username="<?php echo $key['username'] ?>" data-address="<?php echo $key['address'] ?>" class="btn btn-primary float-right edit">Edit</a>
                                        <a class="btn btn-danger float-right" onclick="return confirm('Are you sure you want to continue?');">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
            <tfoot>
                <tfoot>
                    <tr>
                        <td colspan="1">
                            <a href="#" data-target="#form-modal" data-toggle="modal" class="btn btn-success">Add</a>
                        </td>
                    </tr>
                </tfoot>
            </tfoot>
        </table>
    </div>
    <?php require_once 'modal.php' ?>

    <script>
        $(document).ready(function() {
            // When the 'edit' button is clicked
            $(document).on('click', '.edit', function() {
                // Retrieve the data from the anchor tag
                var id = $(this).data('id');
                var email = $(this).data('email');
                var username = $(this).data('username');
                var address = $(this).data('address');

                // Show the modal form
                $('#editModal').modal('show');

                // Set the values of the form fields to the data from the anchor tag
                $('#eid').val(id);
                $('#eemail').val(email);
                $('#eusername').val(username);
                $('#eaddress').val(address);
            });
        });
    </script>

<?php } ?>

<?php include "include/footer.php" ?>