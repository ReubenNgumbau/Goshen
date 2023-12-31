<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
<div class="container">
    <main>
        <form action="submit.php" method="post">
            <h1>Sign Up</h1>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="firstname">Firstname:</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div>
                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div>
                <label for="gender">Gender:</label>
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="password2">Password Again:</label>
                <input type="password" name="password2" id="password2">
            </div>
            <div>
                <label for="agree">
                    <input type="checkbox" name="agree" id="agree" value="yes"/> I agree with the
                    <a href="tos.php" title="term of services">term of services</a>
                </label>
            </div>
            <button type="submit">Register</button>
            <footer>Already a member? <a href="index.php">Login here</a></footer>
        </form>
    </main>
</div>
</body>
</html>


