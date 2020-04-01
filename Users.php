<?php

/**
 * User class is parent of Admin class, Blogger class and Subscriber class
 *
 * @author Claire Winterbottom
 */
abstract class Users {

    protected $username;
    protected $password;
    protected $email;
    protected $usertype;

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getUsertype() {
        return $this->usertype;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUsertype($usertype) {
        $this->usertype = $usertype;
    }

    function __construct($username, $password, $email, $usertype) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->usertype = $usertype;
    }

    
}
