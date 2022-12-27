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
                        <td> <?php echo $key['email'] ?> </td>
                        <td> <?php echo $key['username'] ?> </td>
                        <td> <?php echo $key['created_at'] ?> </td>
                        <td> <?php echo $key['updated_at'] ?> </td>
                        <td> <?php echo $key['address'] ?> </td>

                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href=<?= ABSPATH . "/user/edit" ?> class="btn btn-primary float-right">Edit</a>
                                        <a href="#" class="btn btn-danger float-right">Delete</a>
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
                            <a href="user/add" class="btn btn-success">Add</a>
                        </td>
                    </tr>
                </tfoot>
            </tfoot>
        </table>
    </div>

<?php } else {
    include
        header('Location: /loginsys/');
    exit;
}
?>

<?php include "include/footer.php" ?>