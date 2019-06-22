<?php
include("includes/config.php");
//  if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
//      include("includes/config.php");
//      include("includes/classes/User.php");
//      include("includes/classes/Artist.php");
//      include("includes/classes/Album.php");
//      include("includes/classes/Song.php");
//      include("includes/classes/Playlist.php");

     if (isset($_SESSION['userLoggedIn'])) {
        //  $userLoggedIn = new User($con,$_GET['userLoggedIn']);
         $userLoggedIn = $_SESSION['userLoggedIn'];

     }
     else{
         header("Location:register.php");
     }
//  }
//  else {
//      include("includes/header.php");
//      include("includes/footer.php");
//      $url = $_SERVER['REQUEST_URI'];
//      echo "<script>openPage('$url')</script>";
//      exit();
//  }
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
    <h2>Hello</h2>
</body>
</html>