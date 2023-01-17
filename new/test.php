<?php
$servername="localhost";
$username="root";
$password="";
$dbname="empdb";
$tbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed".mysqli_conect_error());
}
else
{
echo"<br><h2 align=center>EMPLOYEE DETAILS<h2><br/>";
}
$id=$_POST['eid'];
$name=$_POST['ename'];
$dep=$_POST['dept'];
$salary=$_POST['sal'];

