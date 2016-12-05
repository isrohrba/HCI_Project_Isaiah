<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Isaiah
 */
class User {

    public $firstName = '';
    public $secondName = '';
    public $lastName = '';
    public $email = '';
    public $password = '';

    public function __construct($first, $second, $last, $email, $password) {
        $this->firstName = $first;
        $this->secondName = $second;
        $this->lastName = $last;
        $this->email = $email;
        $this->password = $password;
    }

}
