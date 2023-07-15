<br></br>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap");

        /* CSS styles for the form and footer */
        body {
            background-image: url("background.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Roboto', sans-serif;
        }
        
        nav {
            position: fixed;
            padding: 25px 60px;
            z-index: 1;
        }

        nav a img {
            width: 167px;
        }

        .container {
            width: 310px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: lavender;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #4CAF50;
            color: black;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .form-group .checkbox label {
            font-weight: normal;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: white;
        }

        h2 {
            font-weight: bold;
            color: saddlebrown;
            font-size: 22px;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            color: blue;
            font-size: 14px;
        }

        .register-link {
            display: block;
            margin-top: 10px;
            color: blue;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hi Welcome back!</h2>
        <h2>Fill in your details to Log in</h2>
        <form action="authenticate.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="" required class="form-control" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <div class="password-wrapper">
                    <input type="password" id='password' name='password' value='' required class="form-control" placeholder="Enter your password">
                    <span class="toggle-password" onclick="togglePasswordVisibility()"><i class="ri-eye-off-line"></i></span>
                </div>
            </div>
            <div class="form-group checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <div class="form-group">
                <input type="submit" value="Sign in" class="btn btn-primary">
            </div>
            <div class="form-group">
                <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
            </div>
            <div class="form-group">
                <a href="registration.php" class="register-link">Not yet registered? Register</a>
            </div>
        </form>
    </div>
    <div class="footer">
        <a href="tos.php">Terms of Service</a> | <a href="ppolicy.php">Privacy Policy</a>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>




