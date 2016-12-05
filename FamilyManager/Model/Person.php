<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Person
 *
 * @author Isaiah
 */
class Person {

    public $familyId = 0;
    public $firstName = '';
    public $middleName = '';
    public $lastName = '';
    public $cellPhone = '';
    public $relationship = '';

    public function __construct($id, $first, $middle, $last, $phone, $relationship) {
        $this->familyId = $id;
        $this->firstName = $first;
        $this->middleName = $middle;
        $this->lastName = $last;
        $this->cellPhone = $phone;
        $this->relationship = $relationship;
    }

}
