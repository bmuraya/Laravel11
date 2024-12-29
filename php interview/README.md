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

