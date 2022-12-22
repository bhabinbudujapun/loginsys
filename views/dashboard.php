<?php
include "include/header.php";
?>

<div class="container d-flex justify-content-between mb-3 mt-3">
    <h4>Welcome, <strong><?php echo $_SESSION['username'] ?></strong></h4>
    <a href="../user/logout" class="btn btn-danger ml-auto">Logout</a>
</div>

<?php if (isset($_SESSION['username'])) { ?>

    <div class="container d-flex justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>John</td>
                    <td>John</td>
                    <td>23</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

<?php } else {
    header('Location: /loginsys/');
    exit;
}
?>

<?php include "include/footer.php" ?>