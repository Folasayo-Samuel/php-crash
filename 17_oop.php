<?php
/* ---------------- Object Oriented Programming -------------- */

/* 
From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
 */

 class User {
    // Properties are attributes that belong to a class

    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed within the class
    // protected - can only be accessed within the class and its subclasses or inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created.
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //  Method is a function thaat belongs to a class
    function set_name($name){
        $this -> name = $name;
    }

    function get_name(){
        return $this->name;
    }
 }

//  Instatiate a user object
$user1 = new User('Brad', 'brad@gmail.com', '12345');
$user2 = new User('Jane', 'jane@mail.example.com', '12345');

// $user1->set_name('John');
// $user2->set_name('Jane');
// echo $user1->email;
// echo $user2->name;

// var_dump($user2);
// echo $user1->get_name();
// echo $user2->get_name();

// Inheritance
class Employee extends User{
    public function __construct($name, $email, $password,$title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    
    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '12345', 'Manager');

echo $employee1->get_title();


