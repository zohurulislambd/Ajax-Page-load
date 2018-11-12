<?php

/*db connection*/
$conn = new mysqli("localhost","root","","multiple_form");
// connection check
if ($conn-> connect_error){
    die("DB Connection Fail" .$conn->connect_error);
}

/*db insert*/

if(isset($_POST['form']) && $_POST['form'] == 1){

    //get the data
    $name = trim(htmlspecialchars(strip_tags($_POST['name'])));
    $email =trim(htmlspecialchars(strip_tags($_POST['email'])));
    $phone = trim(htmlspecialchars(strip_tags($_POST['phone'])));

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
  /*  $json = array(
        "name" =>$name,
        "email" => $email,
        "phone" => $phone
    );
echo json_encode($json);*/

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