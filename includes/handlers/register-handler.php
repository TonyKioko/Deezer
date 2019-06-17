<?php

    function sanitizeFormString($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        return $inputText;
    }

    function sanitizeFormUsername($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ","",$inputText);
        $inputText = ucfirst(strtolower($inputText));
        return $inputText;
    }

    function sanitizeFormPassword($inputText) {
        $inputText = strip_tags($inputText);
        return $inputText;
    }

 

    if(isset($_POST['loginButton'])){
        // echo "Login Button Clicked";
        $username= $_POST['username'];
        echo $username;
    }

    if(isset($_POST['registerButton'])){
        // echo "Register Button Clicked";
        $un = sanitizeFormString($_POST['registerUsername']);
        $fn = sanitizeFormUsername($_POST['firstName']);
        $ln = sanitizeFormUsername($_POST['lastName']);
        $em = sanitizeFormString($_POST['email']);
        $pw = sanitizeFormPassword($_POST['registerPassword']);
        $pw2 = sanitizeFormPassword($_POST['confirmPassword']);

        $wasSuccessfull=$account->register($un,$fn,$ln,$em,$pw,$pw2);

        if($wasSuccessfull){
            header("Location:index.php");
        }
       
    }

?>