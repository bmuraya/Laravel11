<?php

declare(strict_types=1);
 
function is_input_empty( $username , $pwd, $email)  {
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
}


function get_username( object  $pdo , string $username) {

 $query = "SELECT * FROM users WHERE username = :username";

 $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
    

}

