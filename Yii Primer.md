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

### Creating your Own Project ###
#### Create a database for your project. 
Think of the relational model you will have for your project. Create a table with prim and foregin keys that you need. Use mYSQL workbench of needed to design and view the graphical representation of a relational mode. 

#### Run Yiic Shell oe Gii. 
When the DB is ready, set the connection in the config file in 
```
yourProject/protected/config/main.php
```
What's in congif/main: 
	* Auto Loads the component and the models classes. 
	* sets the default controller to post. 
	* Provides the DB connection string to the connectionString variable. 
	* Provides the DB connection string to the MYSQL database. 
	* Write an error handler and a URL handler. 
Important: Then go to the YII web root folder and using the command line call the 'yiic Shell' -> it will launch the Yii Console and 
* You can create a MODEL for the <table> using a command lime 
```
model tablename or for all tables like model *
```
You can also use 
```
crud tablename
```
to generate administration of your tables. 

####Gii
The Gii website is the web-manifestation of the Yiic CLI. It lets you generate models & controllers without using the CLI. 
You launch it by uncommenting the lines of code in PROTECTED/CONFIG/MAIN.PHP and launching the website at 
```
localhost/myproject/index.php?r=gii
```
#### How to create your own Controller: 
*Create your controllers here:  protected/controllers. 
* The first name of the controller msut be the first name of the Controller in uppercase. , especially for linux servers/ 
* Lets say you want to create a controller called myfirst. 
* Typically, here is the code inside a controller. 
```
<?php
class MyfirstController extends Controller //class extends the controller function, 
{
	public function actionMyaction(){
	//will list some acton for this controller. 
		$this->render ('myview');
		}
	public function actionIndex(){
		//woll list code for this action 
	}	
}
?>
```
*Controller is a class that contains definitions of action and non-action functions. 
* The default action is the actionIndex () function. It is executed when no other action is in the R router int he URL  
* to invoke the Myaction action, you would make the URL like this: 
```
?r=Myfirst/Myaction
```
What this will do is: 
```
$this-> render('myView)
```

### How to create a blog on Yii
1. Create a demo blog on your webroot by using the command shell yiic program in the yiiroot\frameworks folder. 
```
C:\xampp\htdocs> yiiroot\framework\yiic webapp <app name> {in this case 'blogroll'}
```
2. The Blogroll folder and assets will be created in the htdocs folder. 
3. Now create your data model. While this is easier said than done at this stage, and there is a good chance that I will change the data model later on, its good to get one going. 
4. If you have created a model on Mysql or sql lite, just add the connection string to the \config\main.php file. In this file you can unlock the Gii Tool. 
5. The Gii tool is a web tool that can create all the controllers, views and models that my application will need
6. Or you can use the command line tool 'yiic shell' in the <application>\<protected> folder. 
7. 

Post Id
Author
Title
Date
Content
Keywords