<?php
require_once '../Control/controler.php';
$finalString = array();
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

        <h1 class="signin">Families</h1>

        <article id="accountView">

        </article>      
        <table align="center">
            <tr>
                <td id="top">First Name</td>
                <td id="top">Second Name</td>
                <td id="top">Last Name</td>
                <td id="top">Phone</td>
                <td id="top">Relationship</td>
            </tr>
            <?php for ($i = 0; $i < count($people); $i++): ?>

                <?php
                $currentPerson;
                ?>
                <tr id="current">
                    <?php for ($j = 0; $j < 5; $j++): ?>
                        <td>
                            <?php
                            $current = explode(",", $people[$i]);
                            $person = new Person($current[0], $current[1], $current[2], $current[3], $current[4], $current[5]);
                            $currentPerson = $person;
                            echo $current[$j + 1];
                            ?>
                        </td>
                    <?php endfor; ?>
                    <td>
                        <form method="post">
                            <input type="checkbox" name="select" value="<?php echo $i ?>">
                        </form>
                    </td>
                </tr>
                <tr id="edit">
                    <?php
                    foreach ($person as $currentPerson) {
                        $array = array(
                            0 => $person->familyId,
                            1 => $person->firstName,
                            2 => $person->middleName,
                            3 => $person->lastName,
                            4 => $person->cellPhone,
                            5 => $person->relationship
                        );
                    }
                    ?>
                    <?php for ($k = 0; $k < 5; $k++): ?>
                        <td>
                            <input type="text" value="<?php echo $array[$k + 1] ?>">

                        </td>
                    <?php endfor; ?>
                    <td>

                    </td>
                </tr>
            <?php endfor; ?>
            <tr>
                <td id="top" colspan="5">
                    Families
                </td>
            </tr>
            <?php for ($m = 0; $m < count($family); $m++): ?>
                <tr>
                    <?php for ($n = 0; $n < 5; $n++): ?>
                        <td>
                            <?php
                            $now = explode(",", $family[$m]);
                            echo $now[$n + 1];
                            ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>

        </table>
        <button  id="saveButton" type="button">Cancel</button>
        <button id="editButton" type="button">Edit</button>
        <button type="button" value="save">Save</button>
        <button type="button" value="add"><a href="editPerson.php">Add</a></button>
        <button type="button" name="tableAction" value="delete">Delete</button>
    </div>
    <script src="../Control/script.js"></script>
    <script src="../Control/jquery-1.12.4.min.js"></script>
</body>
</html>


