<?php

$host = "localhost";
$user = "root";
$password ="";
$database ="customer";

$connect = mysqli_connect($host,$user,$password,$database);
if($connect){
    echo" databas has been connected";
}else{
    echo "Try again";
}

$fname = $_POST['1'];
$lname = $_POST['2'];
$id = $_POST['3'];
$age = $_POST['6'];
$weight = $_POST['7'];
$joining = $_POST['8'];


$query="insert into Registration(First_Name,Last_Name,ID,Age,Weight,Joining) values('$fname','$lname','$id','$age','$weight','$joining')";
$transport=mysqli_query($connect,$query);
if($transport){
    echo " data updated";
}else{
    echo "sorry something went wrong";
}
