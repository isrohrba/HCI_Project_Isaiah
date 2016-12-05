<?php

namespace process {

    function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function changeActions() {
        global $fName_fail, $sName_fail, $lName_fail, $password_fail, $email_fail;
        if ($fName_fail == "" && $sName_fail == "" && $lName_fail == "" && $password_fail == "" && $email_fail == "") {
            return "pass";
        } else {
            return "fail";
        }
    }

    function checkData($first_name, $second_name, $last_name, $email, $password) {
        $passFail = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($first_name)) {
                $fName_fail = "First name is required";
                $passFail = "../View/register.php";
            } else {
                $first_name = testInput($first_name);
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
                $second_name = testInput($second_name);
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
                $last_name = testInput($last_name);
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
                $email = testInput($email);
                if (!preg_match("/^[a-zA-Z ]*$/", $email)) {
                    $email_fail = "Only letters and spaces allowed";
                    $passFail = "../View/register.php";
                } else {
                    $passFail = "../View/confirmAccount.php";
                }
            }
            if (empty($password)) {
                $password_fail = "Password is required";
                $passFail = "../View/register.php";
            } else {
                $password = testInput($password);
                if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]/', $password)) {
                    $password_fail = "Only letters and spaces allowed";
                    $passFail = "../View/register.php";
                } else {
                    $passFail = "../View/confirmAccount.php";
                }
            }
        }
        return $passFail;
    }

}

