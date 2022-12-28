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
                        <td> <?php echo $key['id'] ?> </td>
                        <td><span id='email'><?php echo $key['email'] ?> </span> </td>
                        <td><span id='username'><?php echo $key['username'] ?> </span> </td>
                        <td> <?php echo $key['created_at'] ?> </td>
                        <td> <?php echo $key['updated_at'] ?> </td>
                        <td><span id='address'><?php echo $key['address'] ?> </span> </td>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Link to open the modal -->
                                        <a href="#" data-toggle="modal" data-target="#editModal" class="btn btn-primary float-right edit">Edit</a>
                                        <a href="#" class="btn btn-danger float-right" onclick="return confirm('Are you sure you want to continue?');">Delete</a>
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
                            <!-- Link to show popup form -->
                            <!-- Anchor tag to trigger modal-->
                            <!-- <a href="#" data-target="#editModal" data-toggle="modal" class="edit">Edit</a> -->
                            <a href=<?= ABSPATH . "/user/add" ?> data-target="#form-modal" data-toggle="modal" class="btn btn-success">Add</a>
                        </td>
                    </tr>
                </tfoot>
            </tfoot>
        </table>
    </div>
    <?php require_once 'modal.php' ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.edit', function() {
                var email = $('#email').text(); // get email
                var username = $('#username').text(); // get username
                var address = $('#address').text(); //get address
                $('#editModal').modal('show'); //load modal
                $('#email').val(email);
                $('#username').val(username);
                $('#address').val(address);
            });
        });
    </script>

<?php }
// else {
//     require_once ABSPATH;
//     exit;
// }
?>

<?php include "include/footer.php" ?>