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
<form action="search2.php" method="post">
    <Label for="search"> <h3> Search For User</h3></Label>
   <input type="text"  name="usersearch" placeholder="Search...">
    <button type="submit" name="submit">Submit</button>

    </form>

    </main>

</body>
</html>