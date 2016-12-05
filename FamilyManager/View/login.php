<html>
    <head>
        <title>Log In</title>
        
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
            function testInput($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        
            $username = $password = "";
            $username_fail = $password_fail = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
                if (empty($_POST['username'])) {
                    $username_fail = "Username is required";
                }
                else {
                    $username = testInput($_POST['username']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
                        $username_fail = "Only letters and spaces allowed";
                    }
                }
        
                if (empty($_POST['password'])) {
                    $password_fail = "Password is required";
                }
                else {
                    $password = testInput($_POST['password']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$password)) {
                        $password_fail = "Only letters and spaces allowed";
                    }
                }
            }
            ?>  
        
            <h1 class="signin">Login</h1>
            
            <form class="loginpage" action="account.php"method="post">
                <div id="form-group">
                    Username: <input type="text" name="username" value="<?php echo $username;?>">
                    <p id="error"><?php echo $username_fail;?></p>
                    Password: <input type="password" name="password" value="<?php echo $password;?>">
                    <p id="error"><?php echo $password_fail;?></p>
                    <input type="submit" value="Log In">
                </div>
            </form>
        </div>
    </body>
</html>

