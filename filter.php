<?php
$email= "user@example.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "The email address is valid.";
}else{
    echo "Invalid email address.";

}


$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($email) {
    echo "The email address is valid.";
}else{
    echo "Invalid email address.";
}

?>