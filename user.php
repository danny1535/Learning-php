<?php

class User {
    public $name;
    public $email;
    public $role;

    function set_name($name){
        $this->name = $name;
    }
    function set_email($email){
        $this->email = $email;
    }
    function set_role($role){
        $this->role = $role;
    }
    function get_name(){
        return $this->name;
    }
    function get_email(){
        return $this->email;
    }
    function get_role(){
        return $this->role;
    }

    function display_user_details(){
        echo 'my name is ' . $this->name . "<br>";
        echo  "my email is " . $this->email . "<br>";
        echo  "my role is " . $this->role . "<br> <br>";
    }


}
$user1 = new User();
$user1->set_name("Daniel");
$user1->set_email("daniel@gmail.com");
$user1->set_role("admin");

$user2 = new User();
$user2->set_name("Tayo");
$user2->set_email("tayo@gmail.com");
$user2->set_role("manager");

$user1->display_user_details();
$user2->display_user_details();
