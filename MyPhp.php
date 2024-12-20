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

    $a = 1 ;
    echo $a--;   
    
    echo "<br>";

    echo $a; // 2

    ?>

</body>
</html>
