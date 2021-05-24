<?php

class Person {
    // Properties
    public $name;
    // Methods
  function __construct($name)
  {
      $this->name = $name;
  }
   function get_name(){
       return $this->name;
   } 
}

class Father extends Person {
    public $child;
    public $name;
    function __construct($name)
  {
      $this->name = $name;
  }
    function set_father_of($child){
        $this->child= $child;
        echo "{$this->name} is father of {$this->child}<br>";
    }
}
class Mother extends Person {
    public $child;
    public $name;
    function __construct($name)
  {
      $this->name = $name;
  }
    function set_mother_of($child){
        $this->child= $child;
        echo "{$this->name} is mother of {$this->child}<br>";
    }
}
// class Child extends Person {
//     public $father;
//     public $name;
//     function __construct($name)
//   {
//       $this->name = $name;
//   }
//     function set_son_of($father){
//         $this->father= $father;
//     }
// }
$Person1 = new Person("Fazni");
$Person2 = new Person("Farook");
$Person3 = new Person("Manzila");
$Father1= new Father("Farook");
$Mother1 = new Mother("Manzila");
// $son1 = new Child($Person1);
$Father1->set_father_of("Fazni");
$Mother1->set_mother_of("Fazni");
// $son1->set_son_of($Person2);



?>