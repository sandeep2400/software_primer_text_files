#OOP in PHP Primer
CLASS define the concept - the idea of a set of things and their  behaviours. 
Objects are the actual things within the class that contain the data and the 
Properties are the actions that can be applied to them. 

## How to define a class
```
class <class Name> {
	//class methods and properties go here. 
}
```
## Objects
You can define an object anywhere in the code. 
```
<object1>= new <class_name>
<object2>= new <class_name>
```

## properties 
1. Properties are special variables that STORE the DATA values that the OBJECTS will take on., 
2. Objects of the same class can have the same properties (example: car1 and car2 have the property of speed) but the properties will be different (20kph or 40kph)
3. There are 3 types of Props: 
* Public:  can be read and changed by any code in the program
* Private: can be read and changed by ONLY code INSIDE THE Class
* Protected: can be read and changed ONLY by code inside the class and code in INHerited classes. 
```
class <myclass>{
	public $propertyName;
	private  $propertyName
	protected $propertyName
}
```
5. Try to keep all properties private or protected. That way your code is more MODULAR and can be easily maintained. 
6. TO access an Objects property, you use the '->' indicator. 
```
so to access the $speed Property of an object $mycar1 you say
$mycar1->speed = 40kph;			 {notice there isn't a '$' on the Property speed.}
echo $mycar1->speed. 
```

## methods
1. These are functions within a class that are used to change the objects properties. 
2. For example a Method called Accelration can alter the Property $speed of the Object $mycar. 
3. Functions can be 3 types (similar to Properties): Public, Private and Protected. 
```
class myKlass{
	public function ACClration (){
		// method code here  - function can be called from anywhere
	}

	private function() Braking{
	//method code here  - function can be called by other methods in the class
	}

	private function() Valuation {
	//method code here. - function can be called by methods in the class or in Inherited classes. 
	}
}
```
4. In order to act on a method you write this. 
```
 $myCar1->Acclration();
```
And inside of the function, you write 
```
public function Acclration(){
	$this-> loggedin = true;  //where loggedin is a function. 
}
```
5. The variable $this is the object itself. Using $this to represent the object, we allow the methods in the class to 
access the object and its properties. 


## Constructors and Destructors: 
1. these let you do specific actions when your object is either created or deleted. 
2. What actions might these be: maybe when I create an object, I want to initialize it with some properties, opn a file or a DB connection or when I close an object, I want to close a file or database connections. 
3. An object's CONSTRUCTOR is called as soon as the object is created and the DESTRUCTOR is called just BEfore an object is removed. 
4. Create a constructor like this
```
class myClass{
	private $username;
	private $password; 
	private $age;

	private function __construct($username, $password, $age){   // this is a constructor variable. 
	echo "i'm a class and i've just been created.";
	$this->username = $username;
	$this->password = $password;
	$this->age = $age;
	}
}

new firstObject = new myClass('sandeep', '35342', 40);
```
Here __construct reads the passed-parameters and assigns them to the new object's properties immeditaely. 

5. DeSructors - Create a destructor like this
```
class newClass{
	public function __destruct(){
	echo "this is me self destructing";
	}
}
$myObject = new newClass();
unset($myObject);
```
Destructors are called just before the object is deleted. 
6. Important :: You cannot pass variables to a Destructors. 
7. When objects of a child's class are created, the PARENT's Constructors are also called. I can also call the parent's contructor from within the child's CONSTRUCTOR by writing parent::__Constructor();

##Static properties and Methods. 
1. These are class properties that are not tied to any method. 
2. Lets say you want to create a variable that's accessible inside a Method but not tied it to any object. you can do that by declaring a property as Static. 
```
Example: lets say in the method Accleration, you want to create a property called $speedLimit. You can do that like this: 
class Automobilia{
	public static $speedLimit = 65mph;
}



## Type Hinting: 
1. restricting the types of objects that can be passed to the method. 

## __get() and __set methods for overloading the property access. 

## __call() for overloading method calls



