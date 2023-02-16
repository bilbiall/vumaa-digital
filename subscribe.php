<?php
$name = $_POST['name'];
$email = $_POST['email'];
//database connection
$conn = new mysqli('localhost','vumaadigital','Vumaadigital@2023','subscribers');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
} 
else{
    $stmt = $conn->prepare("insert (name,email) values(?,?)");
    $stmt = bind_param("ss",$name,$email);
    $stmt->execute();
    echo "Wohooo! Succesfully subscribed..." ;
    $stmt->close();
    $conn->close();

}


?>