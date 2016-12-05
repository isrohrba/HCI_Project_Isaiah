<?php
require_once '../Control/controler.php';
?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Family Manager</title>

        <meta name="viewport" content="width=device-width">
        <script src="modernizr.custom.40753.js"></script>
        <link rel="stylesheet" href="../Namespace/styles.css">
        <link rel="icon" sizes="192x192" href="../Namespace/familymngr.png">
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
        <!slider bar scripts!>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <nav class="sitenavigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="login"><a href="login.php">Log In</a></li>
                <li class="login"><a href="register.php">Register</a></li>
            </ul>
        </nav>

        <h1 class="signin">Add Person</h1>

        <form class="test" method="post" action="account.php">
            <div id="form-group">
                First Name: <input type="text" name="fName" >
                <br>
                Middle Name: <input type="text" name="sName">
                <br>
                Last Name: <input type="text" name="lName">
                <br>
                Cell Number: <input type="tel" name="phone">
                <br>
                Relationship: <input type="text" name="relationship">
                <br>
                <input type="submit" name="savePerson" value="Save">
            </div>
        </form>

    </div>
    <script src="../Control/script.js"></script>
    <script src="../Control/jquery-1.12.4.min.js"></script>
</body>
</html>

