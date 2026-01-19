<?php

interface LoginSystem{
    function login();
}

abstract class Person implements LoginSystem{
    protected $name;
    function _construct($name){
    $this->name = $name;
    }
    public function welcome(){
        echo "Welcome " . $this->name;
    }
}

class User extends Person{
    function login() {
        return "User logged in successfully";
    }
}

class Admin extends Person{
    function login(){
        return "Admin logged in with extra rights";
    }
}