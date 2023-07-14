<?php
session_start();

$con = mysqli_connect('localhost', 'root', ''); // connection database

mysqli_select_db($con, 'info'); //Selecting database

$studentId = $_POST['studentId']; //Student ID
$email = $_POST['email']; // Student Email @cvsu.com
$pass = $_POST['password']; //POST pass


$sql = "SELECT * FROM student WHERE studentId = '$studentId' && email = '$email' && password = '$pass'";

$result = mysqli_query($con, $sql);
$num = mysqli_num_rows ($result); 

if($num == 1){

       $_SESSION['studentId'] = $studentId;
       $_SESSION['email'] = $email;
       $_SESSION['password'] = $pass;
       

        echo "Hi! " . $studentId; //if email and pass is = 1 then successful login

} 
else{

       echo "Check your credentials if corrent or contact the administrator"; // if your credentials is = 0 u cant log in

    }
?>