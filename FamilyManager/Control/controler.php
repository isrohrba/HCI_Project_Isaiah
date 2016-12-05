<?php

require_once '../Model/Family.php';
require_once '../Model/Person.php';
require_once '../Model/User.php';
require_once '../Model/dictionary.php';

//test register data
$saveAction = filter_input(INPUT_POST, 'submit');


/* $dsn = 'msql:host=localhost;dbname=families_db';
  $dbusername = 'root';
  $dbpass = '';
  $db = new PDO($dsn, $dbusername, $dbpass); */

$fName_fail = $sName_fail = $lName_fail = $email_fail = $password_fail = "";

//register page data
$first_name = filter_input(INPUT_POST, 'fName');
$second_name = filter_input(INPUT_POST, 'sName');
$last_name = filter_input(INPUT_POST, 'lName');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$address = filter_input(INPUT_POST, 'address');
$zip = filter_input(INPUT_POST, 'zip');
$phone = filter_input(INPUT_POST, 'phone');
$relationship = filter_input(INPUT_POST, 'relationship');
//confirm register option
$confirmAction = filter_input(INPUT_POST, 'navAcc');

$passFail = "";
$registerNav = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($first_name)) {
        $fName_fail = "First name is required";
        $passFail = "../View/register.php";
    } else {
        $first_name = process\testInput($first_name);
        if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
            $fName_fail = "Only letters and spaces allowed";
            $passFail = "../View/register.php";
        } else {
            $passFail = "../View/confirmAccount.php";
        }
    }
    if (empty($second_name)) {
        $sName_fail = "Second name is required";
        $passFail = "../View/register.php";
    } else {
        $second_name = process\testInput($second_name);
        if (!preg_match("/^[a-zA-Z ]*$/", $second_name)) {
            $sName_fail = "Only letters and spaces allowed";
            $passFail = "../View/register.php";
        } else {
            $passFail = "../View/confirmAccount.php";
        }
    }
    if (empty($last_name)) {
        $lName_fail = "Last name is required";
        $passFail = "../View/register.php";
    } else {
        $last_name = process\testInput($last_name);
        if (!preg_match("/^[a-zA-Z ]*$/", $last_name)) {
            $lName_fail = "Only letters and spaces allowed";
            $passFail = "../View/register.php";
        } else {
            $passFail = "../View/confirmAccount.php";
        }
    }
    if (empty($email)) {
        $email_fail = "Email is required";
        $passFail = "../View/register.php";
    } else {
        $email = process\testInput($email);
        if (!preg_match("/^[a-zA-Z ]*$/", $email)) {
            $email_fail = "Only letters and spaces allowed";
            $passFail = "../View/register.php";
        } else {
            $passFail = "../View/confirmAccount.php";
        }
    }
    if ($confirmAction == "Change") {
        $registerNav = "../View/register.php";
    } else if ($confirmAction == "Confirm") {
        $registerNav = "../View/account.php";
    }

    if (empty($password)) {
        $password_fail = "Password is required";
        $passFail = "../View/register.php";
    } else {
        $password = process\testInput($password);
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]/', $password)) {
            $password_fail = "Only letters and spaces allowed";
            $passFail = "../View/register.php";
        } else {
            $passFail = "../View/confirmAccount.php";
        }
    }
}

//create 'fudged' data
//check for people.txt and or create people.txt
if (file_exists("../Namespace/people.txt")) {
    $people_file = fopen("../Namespace/people.txt", "r+");
    $people = file("../Namespace/people.txt", FILE_IGNORE_NEW_LINES);
    print_r($people);
} else {
    $people_file = fopen("../Namespace/people.txt", "x+");
}
//check for accounts.txt and or create accounts.txt
if (file_exists("../Namespace/accounts.txt")) {
    $accounts_file = fopen("../Namespace/accounts.txt", "r+");
} else {
    $accounts_file = fopen("../Namespace/accounts.txt", "x+");
}

//check for users.txt and or create users.txt
if (file_exists("../Namespace/users.txt")) {
    $users_file = fopen("../Namespace/users.txt", "r+");
    $users = file("../Namespace/users.txt", FILE_IGNORE_NEW_LINES);
    print_r($users);
} else {
    $users_file = fopen("../Namespace/users.txt", "x+");
}

if ($saveAction == "Save") {
    $addString =  "\n" + (count($people) + 1) + ',' + $first_name + ',' + $second_name + ',' + $last_name + ',' + $phone + ',' + $relationship;
    $file = fopen("../Namespace/people.txt", "a") or die("WHY");
    file_put_contents($file, $addString);
    
}