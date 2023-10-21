<html>
<link rel="stylesheet" href="css/bootstrap.css">
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>REGISTRATION FORM</h1>
            </div>
            <div class="col-md-3">
                <form action="registration.php" method="post">
                    <div class="mb-3">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname">
                    </div>
                    <div class="mb-3">
                        <label for="fullname">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="uname">Username</label>
                        <input type="text" class="form-control" id="uname" name="uname">
                    </div>
                    <div class="mb-3">
                        <label for="pass1">Password</label>
                        <input type="password" class="form-control" id="pass1" name="pass1">
                    </div>
                    <div class="mb-3">
                        <label for="pass2">Confirm Password</label>
                        <input type="password" class="form-control" id="pass2" name="pass2">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) 
?>