<?php
$servername="localhost";
$username="root";
$password="";
$dbname="empdb";
$tbname="student";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed".mysqli_conect_error());
}
else
{
echo"<br><h2 align=center>CONNECTION SUCCESSFULL<h2><br/>";
}
$no=$_POST['no'];
$name=$_POST['name'];
$ad=$_POST['ad'];
$br=$_POST['br'];
$ph=$_POST['p'];
//$sql=mysqli_select_db("$dbname")die("couldnt select db");
$query="INSERT INTO student(no,name,addr,branch,ph) VALUES('$no','$name','$ad','$br','$ph')";
$res=mysqli_query($conn,$query);
if($res)
{
echo"submitted successfully";
}
else
{
echo"error";
}
mysqli_close($conn);
?>
