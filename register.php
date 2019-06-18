<?php
    include('includes/config.php');

    include('includes/classes/Account.php');
    include("includes/classes/Constants.php");


    $account = new Account();
    
    include('includes/handlers/register-handler.php');
    include('includes/handlers/login-handler.php');

    function getInputValue($name){
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }

?>

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


        <form id="registerForm" action="register.php" method="POST">
                    <h2>Register Here</h2>
                    <p>
                        <?php echo $account->getError(Constants::$invalidUsername); ?>

                        <label for="registerUsername">User Name</label>
                        <input id="registerUsername" name="registerUsername" placeholder="e.g Sean Chan" type="text" required
                        value="<?php getInputValue('registerUsername'); ?>"
                        >
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$invalidFirstName); ?>

                        <label for="firstName">First Name</label>
                        <input id="firstName" name="firstName" placeholder="e.g sean" type="text" value="<?php getInputValue('firstName'); ?>"  required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$invalidLastName); ?>

                        <label for="lastName">Last Name</label>
                        <input id="lastName" name="lastName" type="text" placeholder="e.g chan" value="<?php getInputValue('lastName'); ?>"  required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$invalidEmail); ?>

                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="simonchan@gmail.com" value="<?php getInputValue('email'); ?>"  required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                        <?php echo $account->getError(Constants::$invalidLengthPassword); ?>
                        <label for="registerPassword">Password</label>
                        <input id="registerPassword" name="registerPassword" placeholder="Enter your password here" type="password" value="<?php getInputValue('registerPassword'); ?>" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$passwordDoNotMatch); ?>

                        <label for="confirmPassword">Confirm Password</label>
                        <input id="confirmPassword" name="confirmPassword" placeholder="Please enter the password again" type="password" value="<?php getInputValue('confirmPassword'); ?>" required>

                    </p>
                    <button type="submit" name="registerButton">Register Now</button>
                    <div class="hasAccountText">
                        <span id="hideRegister"> Already have an account? Login here!</span>
                    </div>
                </form>
    </div>

</body>
</html>