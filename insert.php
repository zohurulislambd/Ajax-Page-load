<?php

/*db connection*/
$conn = new mysqli("localhost","root","","multiple_form");
// connection check
if ($conn-> connect_error){
    die("DB Connection Fail" .$conn->connect_error);
}

/*db insert*/

if(!empty($_POST)){

    //get the data
    $name =htmlspecialchars(strip_tags($_POST['name']));
    $email =htmlspecialchars(strip_tags($_POST['email']));
    $phone =htmlspecialchars(strip_tags($_POST['phone']));

    /*db insert*/
    $sql = "INSERT INTO form1 (`name`,`email`,`phone`) VALUES ('$name','$email','$phone')";
    if ($conn->query($sql) === TRUE){
        echo "The new data record is successful";
    }else{
         echo "Error".$sql. "<br/>" .$conn->error;
    }
  /*  $json = array(
        "name" =>$name,
        "email" => $email,
        "phone" => $phone
    );
echo json_encode($json);*/


}else{
    echo "Problem ocurred";

}

$conn->close();




?>