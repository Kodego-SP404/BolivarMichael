<?php 
/* --- Object Oriented Programming -- */
/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class user {
  //Properties are just variables that belong to a class
  //Access modifiers: public, private, protected
  //public - can be access from everywhere
  //private - can be only accessd from inside the class
  //protected - can only be accessed from inside the class and by inheriting classes
  public $name;
  public $email;
  public $password;

  //The constructor is called whenever an object is created from the class.
  //We pass in properties to the constructor from the outside
  public function __construct($name, $email, $password)
  {
    $this -> name = $name;
    $this -> email = $email;
    $this -> password = $password;
    
  }

  //Methods are functions that belong to a class
  function set_name($name){
    $this -> name = $name;
  }

  function get_name() {
    return $this -> name;
  }
}

//Instantiate a new user
$user1 = new User('Ryan', 'qweqweq@gmail.com', '12345');
$user2 = new User('azur', 'qwe123@gmail.com', 'qwerty');

// $user1 = new User();
// $user2 = new User();

// $user1 -> name='Ryan';
// $user2 -> name='Michael';

// var_dump($user1);
// echo $user1 -> name;
// echo $user2 -> name;

//Inheritance
class Employee extends User {
  public $title;
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this -> title = $title;
    
  }

  public function get_title() {
    return $this -> title; 
  }
}

$employee1 = new Employee('zane', 'zaneantonio@gmail.com', '12345', 'Manager');
echo $employee1 -> get_title();