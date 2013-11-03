<?php
/*
OOP in PHP Primer
CLASS define the concept - the idea of a set of things and their  behaviours. 
Objects are the actual things within the class that contain the data and the 
Properties are the actions that can be applied to them. 
How to define a class
*/
class <class-Name> {
//class methods and properties go here. 
}

// After declaring the class you can define a physical manifestation of that class in an object. 

$obj = new <Class Name>;
var_dump($obj);  

//How to define properties for that class. 
//Properties are like variables but they are bound
//to the object and therefore can be accessed only 
//by that object. 
//
//______________________________________________________________

class myclass{
	public $prop1 = "I'm a class property";
}

$obj1 = new myclass;
echo $obj->prop1;
// '->' is a way for an object to ACCESS the Properties containted 
//in the class
//______________________________________________________________

// DEFINING CLASS METHODS
//Methods are class-specific functions. Individual actions that an
// object will be able to perform are defined within
//the class as methods. 
class methClass{
	public $prop1 = "I'm a methheadclass property";
	public function setProperty($newval){
		$this-> prop1 = $newval;
	}
	public function getProperty(){
		return $this-> prop1."Yo!! <br/>";
	}
}
$methobj = new methClass; //defining a new object in Methclass
echo $methobj->prop1;
echo $methobj->getProperty(); //get the property value
$obj-> setProperty("I'm a new property value")
echo $methobj->getProperty(); //get the property value

//Constructors and destructors: 
//Constructors are functions that are initiated right of the bat, 

?>