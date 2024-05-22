<?php
$conn=mysqli_connect('localhost','root','','example');
// $db=mysqli_query($conn,"CREATE DATABASE example");
$tb=mysqli_query($conn,"CREATE TABLE ex(id int not null primary key auto_increment,name varchar(200),password varchar(200) unique)");
?>