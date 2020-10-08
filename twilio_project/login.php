<html>
<head>
    <title> Login and Registration </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
    <body> 
        <div class="container">
        <div class="login-box">
            <div class="row">
            <div class="col-md-6 login-left">
                <h2 class="headLogin">Login Here</h2>
                <form action="validation.php" method="post">
                    <div class="loginForm">
                    <div class="form-group">
                        <label>ID Number</label>
                        <input type="text" name="idNum" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <p><a href="#">Forgot Password?</a></p>
                    <button type="submit" class="btn btn-primary"> Login </button>
                    </div>
                </form>
            </div>

            <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>ID Number</label>
                        <input type="text" name="idNum" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phoneNum" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Program</label>
                        <input type="text" name="program" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Register </button>
                </form>
            </div>
            </div>

            </div>
        </div>


    </body>
</html>