<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Family
 *
 * @author Isaiah
 */
class Family {
    
    public $familyId = 0;
    public $familyName = '';
    public $address = '';
    public $city = '';
    public $state = '';
    public $zip = '';
    public $phone = '';
    
    public function __construct($id, $name, $address, $city, $state, $zip, $phone) {
        $this->familyId = $id;
        $this->familyName = $name;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->phone = $phone;
    }
}
