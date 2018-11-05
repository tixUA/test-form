<?php

function all(){
$post = $_POST["input"]; 
    file_put_contents("text.txt", "$post \n", FILE_APPEND);
}

all();