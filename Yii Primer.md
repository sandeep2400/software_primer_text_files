#Yii Primer#
## MVC Architecture ##
### Controllers ###
* Controller is initialted whenever you request a page. 
* A controller canr ead data from POST, GET or SESSION values. 
* Addresses have a special importance in MVC frameworks -> They include parameters which specify WHICH controller is to be used. 
* You will have multiple controllers for each action and each controller will act on a different piece of the puzzle. 
*A typical web address when you use a controller is this: 
```
www.myweb.com/index.php?r=myController
r = router to a controller named myController
In Yii, all navigation through the index.php file and r does all the routing to the right controllers. 
```
#### Action 
* Controllers can have one or more sub-controllers called actions. If a Controller has 1 or more actions, you need to specify that in the r parameter. 
Exampe: 
```
www.myweb.com/index.php?r=myController/myAction 
or we can rewrite this as: 
www.myweb.com/index.php?r=users/myAction 
```
All controllers must have a default action, and in the absence of an action, it will fall to the default. 

###Model###
* Yii creates models automatically and can be created in the Command Line 
* Each table has its own Model. The model has the same name as that of the table. Each model has 2 important functions,  - Find and Save Data. 
* When we need to read data, we usually do something like 
~~~
ModelName.FindAll();
~~~
* When we need to write we use 
~~~
ModelName.column = value;
---
ModelName.SAve();
~~~
*There are no SQL queries to be written, no fetching arrays like in PHP, the advantage of Yii is its Object Oriented access to DB. 
*Another feature are inter-table relations. Models allow you to tunnel through from one table to another using inbuilt queries for foreign keys. IF we want to get emplpyee department using the employee name we can simply use: 
~~~
$employee->department-departmentName
~~~
###View###
View has no intelligence. It simply reads data from Controller and displays it. 
* This is the ONLY PLACE, you would use HTML, CSS, JAVASCRIPT.

### Why use a FRAMEWORK ###
* Frameworks have a set of functions and these functions are grouped into CLASSES. 
* Frameworks have a lot of functions for common tasks like creating web forms and such. And they always validate as HTML. 
* Often, frameworks have more functions than we know of, and its easier to create a simple function than use a prepared solution.

### Yii Demo Project ###
when you create a demo project you will notice a PROTECTED folder which contains MVC folders. 

*Models in the demo project: Models are usually for DB access, but in the demo, there are no demos, only web forms. The loginform class extends the CFormModel whiih creates the user id for username and pwd. 



