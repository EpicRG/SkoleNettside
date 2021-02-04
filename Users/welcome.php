<<<<<<< HEAD
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brukerside</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../CSS/Theme.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Bruker.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hei, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h1>
    </div>
    <p>
        <a href="../index_logedin.php" class="back_button">Back</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
=======
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brukerside</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../CSS/Theme.css">
    <link rel="stylesheet" type="text/css" href="../CSS/Bruker.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hei, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h1>
    </div>
    <p>
        <a href="../index_logedin.php" class="back_button">Back</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
>>>>>>> fefdcb4... Login stuff
</html>