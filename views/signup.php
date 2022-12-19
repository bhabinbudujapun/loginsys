<?php include "include/header.php" ?>

<div class="container d-flex justify-content-center">
    <div class="col-md-6">
        <h3 style="text-align:center;">Registration Form</h3>
        <form action="" method="POST">
            <div class="form-group">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="email" name="fname" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="email" name="lname" class="form-control" id="lname" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="phno" class="form-label">Phone No.</label>
                    <input type="email" name="phno" class="form-control" id="phno" required>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="Password" required>
                </div>
                <div class="mb-3">
                    <label for="CPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="CPassword" required>
                </div>
                <button type="submit" name="signin" class="btn btn-primary">REGISTRATION</button><br><br>
                <p>Login from here. If you have already an account</p>
            </div>
        </form>
        <a href="/loginsys/" class="btn btn-primary text-right">LOGIN</a>
    </div>
</div>

<?php include "include/footer.php" ?>