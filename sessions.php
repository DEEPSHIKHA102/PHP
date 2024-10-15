<?php
    session_start();
    $_SESSION["username"] = "Deepshikha";
    $_SESSION["role"] = "Student";

    echo "Session started Username is: " . $_SESSION["username"] . ", Role is " . $_SESSION["role"]. "<br>";

    print_r($_SESSION);
    echo "<br>";

    unset($_SESSION["username"]);
    print_r($_SESSION);
    echo "<br>";
    //session_unset();

    session_destroy();

    if(empty($_SESSION)){
        echo "Session varibales are now cleared and the session is destroyed.";
    }else{
        echo "Session is still active.";
    }


?>