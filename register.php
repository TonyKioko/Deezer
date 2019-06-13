<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login Here</h2>
            <p>
                <label for="username">User Name</label>
                <input id="username" name="username" type="text" placeholder="e.g Simonchan1997" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter your password here" required>
            </p>
            <button type="submit" name="loginButton">Log In</button>
            <div class="hasAccountText">
                <span id="showRegister"> Don't have a account yet? Click here to have one!</span>
            </div>
        </form>
    </div>

</body>
</html>