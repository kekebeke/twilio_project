<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'twilio_sms');

$id = $_POST['idNum'];
$pass = $_POST['password'];
$first = $_POST['firstName'];
$last = $_POST['lastName'];
$phone = $_POST['phoneNum'];
$prog = $_POST['program'];

$s = "select * from usertable where idNum = '$id'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"ID Number is Already Taken";
}
else {
    $reg =" insert into usertable(idNum, firstName, lastName, phoneNum, program, password)
    values ('$id','$first', '$last','$phone','$prog','$pass')";
    mysqli_query($con,$reg);
    echo"Registration Successful";
}

?>