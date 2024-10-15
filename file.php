<?php
    if(file_exists("myFile1.txt")){
        $file = fopen("myFile1.txt","r");
    }
    else{
        die("Error: The file does not exists.");
    }
?>