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

            <h1 class="signin">Confirm Account</h1>
            
            <form class="test" method="post" action="<?php echo $registerNav ?>">
                <div id="form-group">
                    <h2>Is everything correct?</h2>
                    First Name: <?php echo $first_name ?> 
                    <br>
                    Middle Name: <?php echo $second_name ?>
                    <br>
                    Last Name: <?php echo $last_name ?>
                    <br>
                    Email: <?php echo $email ?>
                    <br>
                    Password: <?php echo $password ?>
                    <br>
                    <a href="../View/account.php">Confirm</a>
                    <br>
                    <a href="../View/register.php">Change</a>
                </div>
            </form>

        </div>
        <script src="../Control/script.js"></script>
    </body>
</html>

