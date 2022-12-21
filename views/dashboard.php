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
?>

<?php include "include/footer.php" ?>