<?php

$con = mysqli_connect('sql205.epizy.com','epiz_32437203','OFFlVOSji5T');

if($con){
    echo "Connenction successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'epiz_32437203_skdb');

$sname = $_POST['sname'];
$fname = $_POST['fname'];
$edu = $_POST['edu'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$addr = $_POST['addr'];

$query = " insert into basic (sname, fname, edu, gender, mobile, addr) values ('$sname', '$fname','$edu', '$gender', '$mobile', '$addr') ";

echo "$query";

mysqli_query($con, $query);

header('location:index.php')
?>