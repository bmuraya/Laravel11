<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize input
    $userSearch = htmlspecialchars(trim($_POST['usersearch']));





    try {
        require_once 'includes/dbh.inc.php';

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);


        $stmt->bindParam(":usersearch", $userSearch, PDO::PARAM_STR);
        

        $stmt->execute();


        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;


    } catch (PDOException $e) {
        echo "Query Failed: " . $e->getMessage();
    }
} else {
    header("Location: ../search.php?form=error");
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

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
        h3{
            color: #000;
            margin:auto;
            font-size: 0.6em; 
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }


</style>
<body>
    <main>

    <h3>Search Results</h3>

    <?php
if (empty($result)) {
    echo "<h3>No results found</h3>";

} else {
    foreach ($result as $row) {
        echo "<h3>Username: " . $row['username'] . "</h3>";
        echo "<h3>Comment: " . $row['comment_text'] . "</h3>";
    }
}
?>

    </main>

</body>
</html>