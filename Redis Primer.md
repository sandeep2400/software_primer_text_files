#Redis Primer #

* In a key value store, data is stored in the VALUE field inside a KEY.
* The data can only be retrieved IF we know the key. We cant search for the value. 
* Example, if we want to store BAR in FOO, we write
~~~
SET foo bar
~~~
* Redis will store the value permanently, so we can ask what the value of foo is and the reply we get is 
~~~
GET foo => bar
~~~
* other operations are: 
~~~
DEL <key> - delete a key and the matching value. 
SETNX <key>  Set-if-not-exitsts - sets a key if it does not exist. 
INCR <Key>  Automatically increment the value stored in a key. 
~~~

* what makes redis useful is that it provides "atomic" commands like INCR and DEL that let you directly manipulate the data without complex SQL queries. 

##COMMANDS##


## BEYOND KEY VALUE STORES ##


