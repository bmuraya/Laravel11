## What is PHP 

* Php stands for hypertext preprocessors 
* its a server side scriptinh language  embedded into HTML generally used for dynamic webs      development 
* it works efficeiently witj almost over 20 different databases such as mYSQL POstgreSQl MOngoDB 


 # what is a session in PHP 

 session in PHP are used to store data for users under a unique ID which can be then used across multiple webpages of a website 


 what is PEAR in PHP 


 PEAR stands for PHP extension and Application Respository 
 its is a framework and repository for the resuable components of PHP containing Code snippets and libraries 


is PHP considered as a case- sensitive language 
it is partially case sensitive since variable names in PHPO are case- sentive while the function and functions and user- defined function are not 

 ## Summary Table

| Element               | Case-Sensitivity    | Example                   |
|-----------------------|---------------------|---------------------------|
| **Variable Names**    | Case-Sensitive      | `$name` vs `$NAME`        |
| **Built-in Functions**| Case-Insensitive    | `strlen` vs `STRLEN`      |
| **User-defined Functions** | Case-Insensitive  | `greet` vs `GREET`        |
| **Keywords**          | Case-Insensitive    | `if` vs `IF`              |

## Explanation

### Case-Sensitive Elements

1. **Variable Names**
   - Variables in PHP are case-sensitive.
   - Example:
     ```php
     $name = "John";
     echo $name;  // Outputs: John

     echo $NAME;  // Undefined variable warning
     ```

### Case-Insensitive Elements

1. **Function Names**
   - Built-in and user-defined function names are not case-sensitive.
   - Example:
     ```php
     // Built-in function
     echo strlen("Hello");    // Outputs: 5
     echo STRLEN("Hello");    // Outputs: 5

     // User-defined function
     function greet() {
         return "Hi!";
     }
     echo greet();  // Outputs: Hi!
     echo GREET();  // Outputs: Hi!
     ```

2. **Keywords**
   - PHP keywords like `if`, `else`, `while`, etc., are not case-sensitive.
   - Example:
     ```php
     IF (true) {
         echo "This works!";  // Outputs: This works!
     }
     

### Data types  in PHP 

- Interger 
- float 
- string 
- boolean 
- array
- object
- Null 
- resource 

PHP data types are used to hold different types of data or values. There are 8 primitive data types which are further categorized in 3 types:

    - Scalar types
    - Compound types
    - Special types



## how is "echo" different from "print"

**Echo**
- it can ourput  multiple strings
- no return value 
- faster 

**Print**
- it can ouput a singe string 
- alway return 1 
- slower 


### what are the rules for Namming a variable?
    - varible name must always begin with  underscore '_' or letter  it never start with a number 
    - variable names can include numbers but not special charaters 
    - A varible in PHP declared usning '$' sign followed by the variable name

    $my_varibles 


###  Name some  Popular PHP frameworks  and most used

- Laravel: Best for beginners and modern web applications.
- Symfony: Suitable for large, enterprise-level applications.
- CodeIgniter: Lightweight, good for simple and fast projects.
- Slim: Ideal for APIs and microservices.
- Yii: Great for high-performance web applications  e-commerce platforms..


### How to check if a defined varible is NULL ?

 isset() function is used to check if the defined variblw has any value or not 

        ```php
        $x=  0;
        if (isset($x)) {
            echo "x is set";
        } 


        echo '<br>';


        $y = null;
        if(isset($y)) {
            echo "y is set";
        }
        ```
### How to check if a defined varible is NULL ?

 - Object  in PHP are passed by value 

        ```php
        $apple = new Fruit();
        $banana = new Fruits ();
        ```
### how to display output  directly to the browesrs? 

- Special tags "<?=" and "?>" 


### what is define() used for in php 

define () is used to declare a constant in php 
in contrast to the varibles, there no neee to  for '$' sign before declaring  aconstanc since the value of a constant cannot be change 

    ```php
    
    define ("PI", 3.14);
    echo PI;

 ```

### constant () used for 

- constant() retursn the value of a constant

 ```php
define ("PI", 3.14);
    echo  constant ("PI");
 ```

### is multiple inheriance support in PHP  

- PHP only  supports single inheritance which means a class can be extended from only one class using the keywoord "extended "


### WHAT ARE THE diffrent types of Loops in PHP 

- while Loop 
- for  llop 
- Do while Loop
- foreach llop 


## how  to concatenante two strings in php ?
  - use  '.' operatie 

    ```php
        $str_1 = "Hello Guys";
        $str_2 = "and welcome to My world";

        echo  $str_1 . " " . $str_2;
    ```


## what is the use of Func_num_args()?

- it is used to return the number of arguments  passed in a  function 

    ```php
        function sample ()
        {
            $numargs - fun_num_args();
            echo "Number of arguments:  $numargs\n";
        
        }
        sample(6,8,2);
    ```
### what are super Global Variable in PHP ?

 - predefined variable in PHP are know as super global variable  becoz ther can be always accessible forn any function, file or class 

        - $_GLOBAL 
        - $_SERVER
        - $_REQUEST 
        - $_SESSION
        - $_COOKIE
        - $_ENV
        - $_GET
        - $_FILES

### invoke a single line and mult line comments
  
    ```php
        // single line comment
        # thus a single line comment 

        /* this displaying 
        multi line 
        Comments */
    ```
### Name some commin Applications of PHP 

    - systems functions 
    - form handling 
    - CRUD Tasks (Create, Read, Update, Delete)
    - accessing  cookies variable and sety cookies
    - Data Encryption


###### Advance Part 


## how can i execute a php script from commnad line
- Executing a PHP script from the command line can be useful for running background jobs, testing scripts, or performing server-side tasks without a browser 
 

 Bash 

  php -v

##  Defferent btw $variable  and $$variable 

 - $varible is a siomple variable use to store data 
 - $$varible  is a reference varible to varibeles 

 - *$message* stores variable data while *$$message* is used to store variable of variables.
  

### different  btw  GET and  POST 

    **GET**
    - used to submit form data 
    - sends data as part of page URL 
    - Not secure 

    **POST** 
    - used to submit form data 
    - sends data through HTTP header 
    - secure

### how to connect to connect to a data base using PHP script?

        ```php
        
            $HOST = "localhost";
            $username = "username";
            $password = "pwd";

            // Create connection

            $conn = new mysqli($HOST, $username, $password);    


            // check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";

        ```

### what does final class and final methos mean in php 

 - final class means that the class cannot be extended
 - A final method means that it cannot be overriden 


### Differentiate btw Function overloading and Overidding 

- OVERLOADING
    the same function is used for diffrent purpose based on the number of arguments inside the function 

-OVERRIDING
    the same namr and same argument function is used in parent and child class respectively to chang the behaviour of parent class method 


### Differentiate btw ==  and == operator 

 the ==   used to check if value of two operands are equal or not 
 ===  performa typesafe comparasion which mean that it will only return true if both operands have the same type and same value 

    ```php
      1=== 1; //true
      1== 1; //true 
      1 === "1"; // false 
      1 == "1";  // true 
      "check" === "check";  //true 
    ```


## How does Exception Handling Work in PhP?
 when an exception is thrown, code following the statement will not be executed, and PHP will attempt to find the firs matching catch block 

 if an exception is not caught, a pHP fatal error wiill be isssued with an "uncaught exception" . An execption can be thrown, and caught within PHP


##  Differentiate btw require() and include()
        - REQUIRE()
            -if a required file is not  found, it will throw a fatal error and stops the code execution.

        -INCLUDE()
            - if an essential file is not found, it will produce a warning and execute the remaining scripts 


## Explain different types of errors in PHP 

    - NOTICE 
        It is a non critical error meaning something minor went wrong during execution 

    - WARNING 
        its is crital error. it is given in condition where suppose an include() went to retrieve a non existant file 

    - FATAL ERROR 
        - Its is a critcal error resulting in termination of code 


### how to call a function by reference 
     '&' sign is used to call a function by reference, in case of reference, the actual value is modified if the value passed inside th function is modified  


### create a singleton class in PHP 
    A Singleton pattern ensures that a class has only one instance and provides a global point of access to that instance.


## how to encrypt a password using PHP 
    the  password_hash() create a hash password from the passowrd string  using hashing algorithm 

### What are the encryption functions in PHP?
    -CRYPT() and MD5()


    ```php
      
            $pwd = "password@123";

            echo "original Password: " . $pwd . "<br>";

            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

            echo "Generated Hashed Password: " . $hashedPwd; 
    ```

### Mention diffrent sorting function for Arrays in PHP
        In PHP, there are several built-in sorting functions that allow you to sort arrays in different ways. These functions can sort arrays in ascending or descending order, maintain or not maintain key-value pairs, and work with different types of data (e.g., numeric, associative)


## PHP Array Types
    There are 3 types of array in PHP.

    Indexed Array
        
    ```php
        - $season=array("summer","winter","spring","autumn"); 
    ``` 

    Associative Array
     - $salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");  

    Multidimensional Array
        -$emp = array  
            (  
            array(1,"sonoo",400000),  
            array(2,"john",500000),  
            array(3,"rahul",300000)  
            );  


        # PHP Array Sorting Functions

| **Function**         | **Sort Type**                                           | **Key Preservation**    |
|-----------------------|---------------------------------------------------------|--------------------------|
| `sort()`             | Ascending (by value)                                   | No                      |
| `asort()`            | Ascending (by value)                                   | Yes                     |
| `ksort()`            | Ascending (by key)                                     | Yes                     |
| `rsort()`            | Descending (by value)                                  | No                      |
| `arsort()`           | Descending (by value)                                  | Yes                     |
| `krsort()`           | Descending (by key)                                    | Yes                     |
| `usort()`            | User-defined comparison (by value)                     | No                      |
| `uasort()`           | User-defined comparison (by value)                     | Yes                     |
| `uksort()`           | User-defined comparison (by key)                       | Yes                     |
| `natcasesort()`      | Ascending (natural order, case-insensitive)            | No                      |
| `natsort()`          | Ascending (natural order, case-sensitive)              | No                      |
| `array_multisort()`  | Sort multiple arrays or multidimensional arrays        | Yes                     |

### what will be the output of the following Code ?


    ```php
      $a = '1';
      $b = &$a;
      $b = "2$b";
      echo $a .", " .$b
    ```
    Step-by-Step Execution:
$a = '1';

A variable $a is initialized with the string value '1'.
$b = &$a;

$b is assigned as a reference to $a.
This means $b does not hold its own value but instead refers to the same memory location as $a. Any change to $b will directly affect $a, and vice versa.
$b = "2$b";

Since $b is a reference to $a, $b refers to the current value of $a, which is '1'.
The value of $b is updated to the string "2$b". Here, $b is interpolated within the double quotes, and its value at this moment is '1'. So, the new value of $b becomes '21'.
Because $b is a reference to $a, $a is also updated to '21'.
echo $a .", " .$b;

At this point, both $a and $b hold the value '21', as $b is a reference to $a.
  


###  what are __construct() and __destruct() in PHP 
    In PHP, __construct() and __destruct() are magic methods used in object-oriented programming. They are part of the lifecycle of a class instance (an object)

   -  __construct()
        - Purpose: Acts as the constructor of a class. It is automatically called when an object of the class is created.
        - Use Case: Often used to initialize properties, allocate resources, or perform setup tasks when an object is instantiated. 

    - __destruct()
        - Purpose: Acts as the destructor of a class. It is automatically called when the object is no longer needed (e.g., when it goes out of scope or is explicitly unset).
        - Use Case: Used to release resources, perform cleanup tasks, or close database connections before the object is destroyed


### how can PHP and Javascript interect 

        -PHP and JavaScript interact by exchanging data between the server (where PHP executes) and the client (where JavaScript runs). This interaction is often facilitated using HTTP requests and embedded PHP/JavaScript 

## Explain type Hinting In PHP 

        Type hinting is a feature in PHP that allows developers to specify the expected data type for function arguments, return values, and properties. This ensures that the correct type of data is used, helping to prevent bugs and improve code readability and maintainabilit

###  What is the name of scripting engine in PHP?
    - The scripting engine that powers PHP is called Zend Engine 2.


