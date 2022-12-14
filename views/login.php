<?php include "include/header.php" ?>

<div class="container">
    <div class="col-md-6">
        <h3 style="text-align:center;">Login Form</h3>
        <form action="" method="POST">
            <div class="form-group">
                <div class="mb-3">
                    <label for="Email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="Email" required>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="Password" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary">LOGIN</button><br><br>
                <p>Create your accout. For free!</p>
            </div>
        </form>
        <form action="" method="POST">
            <button type="submit" name="signin" class="btn btn-primary">SIGNUP</button><br><br>
        </form>
    </div>
</div>

<?php include "include/footer.php" ?>