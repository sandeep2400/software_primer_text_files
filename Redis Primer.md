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

## Commands ##
~~~
SET <key> <value>
GET <key>
DEL <key> 

INCR <key> - //add 1 to the value of the key
INCRBY <key> <x> //add the value of key by X
DECR <key>
DECRBY <key>

LPUSH <key> <value> //add a new element to a List at the HEAD (or the left)
RPUSH <key> <value> //add a new element to a List at the TAIL (or the right)
LRANGE <key> <start-value> <end-value> //displays the range of the list that we give. LRANGE uses 0 based indexes. i.e. all ranges start with a 0. 
LLEN <key> gives range of the list
LTRIM <key> trims the list. 

SADD <key> <value> //adds a new value to the set <key> 
SREM <key> <value> //removes a value from the set. 
SCARDS <key> //gets the cardinality (or number of elements) in the set. 
SMEMBERS <key> //returns the members of the set. 
SINTER <key1> <key2> //finds out intersection of the 2 keys. (common elements in each set.) SINTER can find intersections in 1000s of sets. 
SISMEMBER <key> <value> //tests if <value> is a member of the set. retursn boolean True or False. 
~~~


## Beyond Key Value Stores ##
###Redis Lists###
Redis Lists are of the Linked list type. Add a  new element to the list using the LPUSH command. 
Redis lists are implemented using linked-lists becauase in a database system its essential to add elements to a very long list in a very fast way. LPUSH and RPUSH can add elements to the start and finish of the list. And LRANGE can be used to read them. 
LRANGE mykey 0 3 ==> will display the all elements w/ index 0 to 4. 
LRANGE mykey 0 -1 ==> will display the all elements w/ index 0 to the last value. 
###Redis Sets###
Sets are unsupported collection of element. Some of the commands are SADD, SREM, SCARD and SMEMBERS