<?php

class user{
    public $name;
    public $email;
    public $role;

    function set_user_details($name,$email,$role){
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    function get_user_details(){
        echo "my name is:". $this->name."<br>".
             "my email is:". $this->email."<br>".
             "my role is:". $this->role. "<br>"."<br>";
    }

}

$user1 = new user();
$user1->set_user_details("daniel","ilalokhoindaniel@gmail.com","manager");
$user1->get_user_details();

$user2 = new user();
$user2->set_user_details("chelsea","chelsea@gmail.com","accountant");
$user2->get_user_details();


?>

