<?php

/*db connection*/
$conn = new mysqli("localhost","root","","multiple_form");
// connection check
if ($conn-> connect_error){
    die("DB Connection Fail" .$conn->connect_error);
}

/*db insert*/

// define variable and set entry value
$name = $email = $phone = "";
$nameErr = $emailErr = $phoneErr = "";
if(isset($_POST['form']) && $_POST['form'] == 1){
    function test_input($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        return $data;
    }
    /*validation entry field*/
    if (empty($_POST["name"])){
        $nameErr ="Name field is required";
    }else{
        $name = test_input($_POST['name']);
    }
    if (empty($_POST["email"])){
        $emailErr = "email field must be contain";
    }else{
        $email = test_input($_POST['email']);
    }
    if (empty($_POST["phone"])){
        $phoneErr = " Phone Filed is empty";
    }else{
        $phone = test_input($_POST['phone']);
    }

    //get the data

    /*db insert*/
    $sql = "INSERT INTO form1 (`name`,`email`,`phone`) VALUES ('$name','$email','$phone')";

    if($name == "" || $name == NULL){
        header("HTTP/1.1 400". "Name was empty");
    }
    elseif($email == "" || $email == NULL){
        header("HTTP/1.1 400". "Empty was empty");
    }
    elseif($phone == "" || $phone == NULL){
        header("HTTP/1.1 400". "Phone was empty");
    }

    if ($conn->query($sql)){
        header("HTTP/1.1 201");
        echo "The new data record is successful";
    }else{
        header("HTTP/1.1 304");
        echo "Error".$sql. "<br/>" .$conn->error;
    }

}elseif(isset($_POST['form']) && $_POST['form'] == 2){

    //get the data
$name =htmlspecialchars(strip_tags($_POST['name']));
$email =htmlspecialchars(strip_tags($_POST['email']));
$phone =htmlspecialchars(strip_tags($_POST['phone']));
/*db insert*/
$sql = "INSERT INTO form2 (`name`,`email`,`phone`) VALUES ('$name','$email','$phone')";

if ($conn->query($sql) == 1){
    header("HTTP/1.1 201 CREATED");
    echo "The new data record is successful";
}else{
    header("HTTP/1.1 406 Not Acceptable".$conn->error);
    echo "Error".$sql. "<br/>" .$conn->error;
}
}elseif(isset($_POST['form']) && $_POST['form'] == 3){
    //get the data
$name =htmlspecialchars(strip_tags($_POST['name']));
$email =htmlspecialchars(strip_tags($_POST['email']));
$phone =htmlspecialchars(strip_tags($_POST['phone']));
/*db insert*/
$sql = "INSERT INTO form3 (`name`,`email`,`phone`) VALUES ('$name','$email','$phone')";
if ($conn->query($sql) == 1){
    header("HTTP/1.1 201 CREATED");
    echo "The new data record is successful";
}else{
    header("HTTP/1.1 406 Not Acceptable".$conn->error);
    echo "Error".$sql. "<br/>" .$conn->error;
}
}else{
    echo "Problem ocurred";
}

$conn->close();



?>