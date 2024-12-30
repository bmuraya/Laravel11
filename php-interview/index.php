<?php    
 $share = "This is a test" . ",";

function split($share) {
    $result = explode(" ", $share);
    print_r($result);
}

?>  