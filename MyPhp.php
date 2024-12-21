<?php

declare(strict_types=1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            font-size: 4em;
        }

        main {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname</label>
            <input  required ="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname</label>
            <input  required id="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="favouritepet">Favourite Pet?</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main> -->
 

    <?php

    // string operator 

    // $a= "Hello";
    // $b= "World";
    // $c = $a .  " " . $b;  // concatenation operator

    // echo $c; 

    // // arithmetic operator

    // echo (1 + 2 ) * (4 - 2);


    // assignment operators 

    // $a = 2;

    // $a *= 4;// $a = $a + 4

    // echo $a;


    // Comparison operators


    // $a = 2;
    // $b = 2;

    // $c = 2;
    // $d = 6;


    // if ($a == $b || $c == $d && $a == $b) {
    //     echo "This statement is true";
    // }



    // Increment / Decrement operators

    // $a = 1 ;
    // echo $a--;   
    
    // echo "<br>";

    // echo $a; // 2


// condition structure
// $bool  = true;
// $a =1;
// $b = 2;

// if($a < $b && !$bool) {
//     echo " First statement is true";

// }
// else if ($a < $b && !$bool){
//     echo " Second statement is true";

// }
// else {
//   echo " None of the conditions is true";
// }


// $bool  = true;
// $a =3;
// $b = 2;


// switch($a) {
//     case 1:
//         echo "The first case is correcct!";
//         break;

//     case 3 :
//         echo "The second case is correcct!";
//         break;

//     default:
//         echo "None of the cases is correct!";
//         break;
//     }


// match 

//  $bool  = true;
// $a ="10";
// $b = 2;

// $result = match($a) {

//     1, 5, 10, 25 => "The first case is correcct!",
//     3 => "The second case is correcct!",
//     default => "None of the cases is correct!"

// };

// echo $result;


// $fruits = array("apple", "banana", "orange");

// $tasks = [
//     "muraya" => "cleaning",
//     "kamau" => "trash",
//     "john" => "vacuum",
//     "bellas" => "dishes",
// ];


// echo count($tasks)

// $fruits = array("apple", "banana", "orange");
// $test = ["mango", "pineapple"];

// array_splice($fruits, 1, 0, $test);

// print_r($fruits);


// mulitdemensional array

// $food =[ 


//     "fruit" => ["apple", "banana", "orange"],
//     "meat" => ["beef", "chicken", "pork"],
//     "vegetables" => ["kales", "spinach", "cabbage"],
    
// ];

// echo $food["vegetables"][2];

// echo '<br>';

// echo $food["meat"][2];
// echo '<br>';

// echo $food["fruit"][2];

// echo '<br>';

// echo $food["vegetables"][2] . ', ' . $food["fruit"][0];


//  built in functions


// $string = "Hello world!";

//    explode(" ", $string);


//  numbers math functions

// $number = -5.5;

// echo rand(1, 100);


// $fruit = ['apple', 'banana', 'orange', 'pineapple'];

// array_push($fruit, 'mango');
// print_r($fruit);

// array_pop($fruit);
// print_r($fruit);


// dates and time functions

// echo date('Y-m-d H:i:s');

// echo '<br>';

// echo time();


// $date = "2024-12-21 12:00:20";
// echo strtotime($date);


// user-defined functions 


// function sayHello(int $num01, int $num02) {
    
//     $result = $num01 + $num02;
//     return $result;
// }

// $test = sayHello(2, 2);
// echo  $test;


//  scope of variables local scope and global scope

// $test = "Daniel"; // global scope

// echo $test;

// function sayHello() {

//     $local = "John"; // local scope

//     return $local;
// }

// echo sayHello();


// function myfunction(){
//    static  $staticvar = 2;

//     $staticvar++;

//     return $staticvar;
// }

// echo myfunction();
// echo  myfunction();
// echo  myfunction();


// class 

// class MyClass {

//     public $classvar = "This is a class variable";

//     public function myMethod()
//      {
//        echo $this -> classvar; 
//     }
// }

// $myobject = new MyClass;

// echo $myobject->classvar;


// constant data that can't be change 

    // define("PI", 3.14);
    
    // echo PI;



    //  loop  for loop

    // for($i = 0; $i <= 10; $i++) {
    //     echo $i . "<br>";

    // }


    // while loop 
 $i = 0;
//     while($i <= 5) {
//         echo $i . "<br>";
//         $i++;
//     }


    // do{
    //     echo $i . "<br>";
    //     $i++;
    // } while ($i <= 10);


    // for each looop 
  $fruit = [
        "Apple" => "red",
        "banana" => "Yellow", 
        "Orange" => "blue",
    ];

  foreach($fruit as $fruit => $name) {
      echo "This is a " . $fruit . ", That has a color of " .  $name . "<br>";
  }


?>


</body>
</html>
