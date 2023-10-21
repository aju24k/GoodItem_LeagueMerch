
<html>
<head>
    <meta charset="UTF-8">
    <title>League Merch</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>LEAGUE MERCH</h1>
            </div>
            <div class="col-md-3">
                <form action="login.php" method="post">

                    <div class="mb-3">
                        <label for="uname">Username</label>
                        <input type="text" class="form-control" id="uname" name="uname">
                    </div>
                    <div class="mb-3">
                        <label for="pass1">Password</label>
                        <input type="password" class="form-control" id="pass1" name="pass1">
                    </div>
                    
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="LogIn">
                        
                </form>
                <a href="register.php" class="btn btn-success">Create Account</a>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>
