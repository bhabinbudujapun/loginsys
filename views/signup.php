<?php include "include/header.php" ?>

<div class="container">
    <div class="col-md-6">
        <h3 style="text-align:center;">Registration Form</h3>
        <form action="" method="POST">
            <div class="form-group">
                <div class="mb-3">
                    <label for="Email" class="form-label">First Name</label>
                    <input type="email" name="email" class="form-control" id="Email" required>
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Last Name</label>
                    <input type="email" name="email" class="form-control" id="Email" required>
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="Email" required>
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label">Phone No.</label>
                    <input type="email" name="email" class="form-control" id="Email" required>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="Password" required>
                </div>
                <div class="mb-3">
                    <label for="Password" class="form-label">Confirm Password</label>
                    <input type="password" name="password" class="form-control" id="Password" required>
                </div>
                <button type="submit" name="signin" class="btn btn-primary">REGISTRATION</button><br><br>
                <p>Login from here. If you have already an account</p>
            </div>
        </form>
        <form action="/views/signup.php/">
            <button type="submit" name="login" class="btn btn-primary">LOGIN</button><br><br>
        </form>
    </div>
</div>

<?php include "include/footer.php" ?>