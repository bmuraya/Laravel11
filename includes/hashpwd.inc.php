<?php

// $sensitiveData = "bmuraya";
// $salt = bin2hex(random_bytes(16));  // generate  random salt

// $pepper ="SecretPepper"; // secret pepper


// $datatoHash = $sensitiveData . $salt . $pepper;

// $hash = hash("sha256", $datatoHash);



$pwdSignup = "bmuraya";

$option = [
    'cost' => 12
];

$hashedpwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $option);

$pwdLogin = "bmuraya";

if(password_verify($pwdLogin, $hashedpwd)){
    echo "Password is correct";
}
else{
    echo "Password is incorrect";
}




