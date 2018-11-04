<?php

if(!empty($_POST)){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    echo "Name: " . $name . "; Email : ". $email. "; Phone : ".$phone;
}

?>