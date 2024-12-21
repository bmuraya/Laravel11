<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(13, 12, 12);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .calculator input, .calculator select, .calculator button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 1.2rem;
            border: none;
            border-radius: 5px;
        }
        .calculator input {
            background: #444;
            color: #fff;
        }
        .calculator select {
            background: #555;
            color: #fff;
        }
        .calculator button {
            background: #007BFF;
            color: #fff;
            cursor: pointer;
        }
        .calculator button:hover {
            background: #0056b3;
        }
        h1.result {
            margin-bottom: 20px;
            color: #0f0;
        }
        p.error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="calculator">



    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="number" name="num01" placeholder="Number one" >
            <select name="operator">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
            </select>
            <input type="number" name="num02" placeholder="Number two" >
            <button type="submit" name="submit">Calculate</button>
        </form>


        <?php 
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Grab and sanitize input data
            $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $operator = htmlspecialchars($_POST["operator"]);

            $result = null;
            $error = null;

            // Calculate result or handle errors
            if ($num01 !== null && $num02 !== null) {
                switch ($operator) {
                    case "add":
                        $result = $num01 + $num02;
                        break;
                    case "sub":
                        $result = $num01 - $num02;
                        break;
                    case "mul":
                        $result = $num01 * $num02;
                        break;
                    case "div":
                        $result = $num02 != 0 ? $num01 / $num02 : "Error: Division by zero";
                        break;
                    default:
                        $error = "Invalid operator.";
                }
            } else {
                $error = "Please enter valid numbers.";
            }

            // Display result or error
            if ($result !== null) {
                echo "<h1 class='result'>Result: $result</h1>";
            } elseif ($error) {
                echo "<p class='error'>$error</p>";
            }
        }
        ?>

      
    </div>
</body>
</html>
