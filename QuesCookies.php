<?php

$cookie_expiration = time() + (365 * 24 * 60 * 60); 


if (isset($_COOKIE['visit_count'])) {
    
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    
    $visit_count = 1;
}


setcookie('visit_count', $visit_count, $cookie_expiration);

echo "You have visited this page " . $visit_count . " times.";
?>
