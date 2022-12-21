<<<<<<< HEAD
<?php 
    session_start();
    include "include/header.php";
    echo "<h3> Welcome, " . $_SESSION['email'] . "</h3>";
?>
    <a href="logout.php" class="btn btn-danger">LOGOUT</a>


<?php    if(isset($_SESSION['email'])) { ?>
        <div class="container d-flex justify-content-center">
                <table class="table">   
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
    </div>
<?php } 
        else { 
            header('Location: /loginsys/');
            exit;
        }
=======
<?php
session_start();
include "include/header.php";
?>

<div class="container d-flex justify-content-between mb-3 mt-3">
    <h4>Welcome, <strong><?php echo $_SESSION['email'] ?></strong></h4>
    <a href="logout.php" class="btn btn-danger ml-auto">Logout</a>
</div>

<?php if (isset($_SESSION['email'])) { ?>

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
>>>>>>> 4d56aaf ('User_Side')
?>

<?php include "include/footer.php" ?>