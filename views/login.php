<?php include "include/header.php" ?>

<div class="container d-flex justify-content-center">
    <div class="col-md-6">
        <h3 style="text-align:center;">Login Form</h3>
        <form action="admin/dashboard" method="POST">
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
    <a href="/loginsys/views/signup.php" class="btn btn-primary text-right">SIGNUP</a>
    </div>
</div>

<?php include "include/footer.php" ?>