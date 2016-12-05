<?php
require_once '../Control/controler.php';
require_once '../Model/dictionary.php';
$_SESSION['action'] = "";
?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Register</title>

        <meta name="viewport" content="width=device-width">
        <script src="modernizr.custom.40753.js"></script>
        <link rel="stylesheet" href="../Namespace/styles.css">
        <link rel="icon" sizes="192x192" href="../Namespace/familymngr.png">
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
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

            <?php
            
            ?>  

            <h1 class="signin">Register</h1>

            <form class="test" method="post" action="<?php echo process\checkdata($first_name, $second_name, $last_name, $email, $password) ?>">
                <div id="form-group">
                    First Name: <input type="text" name="fName" >
                    <p id="error"><?php echo $fName_fail; ?></p>
                    Middle Name: <input type="text" name="sName">
                    <p id="error"><?php echo $sName_fail; ?></p>
                    Last Name: <input type="text" name="lName">
                    <p id="error"><?php echo $lName_fail; ?></p>
                    Email: <input type="text" name="email">
                    <p id="error"><?php echo $email_fail; ?></p>
                    Password: <input type="password" name="password">
                    <p id="error"><?php echo $password_fail; ?></p>
                    <input type="submit" value="Register">
                </div>
            </form>

        </div>
        <script src="../Control/script.js"></script>
    </body>
</html>
