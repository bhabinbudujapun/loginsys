<?php
include "include/header.php";
?>
<?php if (isset($_SESSION['username'])) { ?>

    <div class="container d-flex justify-content-between mb-3 mt-3">
        <h4>Welcome, <strong><?php echo $_SESSION['username'] ?></strong></h4>
        <a href="user/logout" class="btn btn-danger ml-auto">Logout</a>
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
                for ($i = 0; $i < count($users); $i++) {
                ?>
                    <tr>
                        <?php
                        for ($j = 0; $j < 7; $j++) {
                            if ($j == 3)
                                continue;
                        ?>
                            <td> <?php echo $users[$i][$j] ?> </td>

                        <?php } ?>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="user/edit" class="btn btn-primary float-right">Edit</a>
                                        <a href="#" class="btn btn-danger float-right">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<?php } else {
    include
        header('Location: /loginsys/');
    exit;
}
?>

<?php include "include/footer.php" ?>