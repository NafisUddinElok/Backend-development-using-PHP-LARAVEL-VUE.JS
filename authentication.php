<?php 

define("USERNAME", "admin");
define("PASSWORD", "12345");

echo "enter Username :";
$username = readline();

echo "enter password :";
$password = readline();

if(empty($username) || empty($password)){
    echo"User name or password is empty\n";
} else {
    if($username === USERNAME && $password === PASSWORD){
        echo "Login Successful\n";
    } else {
        echo "Invalid Username or Password\n";
    }
}