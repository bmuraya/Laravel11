<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars( $_POST['firstname']);
    $lastname = htmlspecialchars( $_POST['lastname']);
    $favouritepet = htmlspecialchars( $_POST['favouritepet']);


    if(empty($firstname) || empty($lastname) || empty($favouritepet)){
        header("Location: ../MyPhp.php?form=empty");
        exit();
    }

    echo "Your name is $firstname $lastname and your favourite pet is a $favouritepet.";

    header("Location: ../MyPhp.php?form=success");
}
else{
    header("Location: ../MyPhp.php?form=error");
}


