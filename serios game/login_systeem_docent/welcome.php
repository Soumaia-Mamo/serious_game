<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welkom</title>
    <link rel="stylesheet" href="../login_systeem_docent/crud/css/bootstrap.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<h1 class="my-5">Hoi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.Welkom op Docent dashboard.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Stel je wachtwoord opnieuw in</a>
        <a href="logout.php" class="btn btn-danger ml-3">Uitloggen</a>
    </p>
</body>
</html>

<?php 

include("../login_systeem_docent/crud/read.php");

?>