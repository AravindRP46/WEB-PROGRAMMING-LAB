<html>
<body>
<h1 align="center">REGISTRATION FORM</h1>
<form method="POST" action="#">
<table align="center">
<tr>
<td>Roll Number</td><td><input type="text" name="no" id="no"></td>
</tr>
<tr>
<td>Name</td><td><input type="text" name="name" id="name"></td>
</tr>
<tr>
<td>Address</td><td><input type="text" name="ad" id="ad"></td>
</tr>
<tr>
<td>branch</td><td><input type="text" name="br" id="br"></td>
</tr>
<tr>
<td>Phone</td><td><input type="text" name="p" id="p"></td>
</tr>
<tr>
<td>Subject 1 marks</td><td><input type="text" name="mk1" id="mk1"></td>
</tr>
<tr>
<td>Subject 2 marks</td><td><input type="text" name="mk2" id="mk2"></td>
</tr>
<tr>
<td>Subject 3 marks</td><td><input type="text" name="mk3" id="mk3"></td>
</tr>
<tr>
<td>Subject 4 marks</td><td><input type="text" name="mk4" id="mk4"></td>
</tr>
<tr>
<td></td><td align="right"><input type="submit" name="submit"</td>
</form>
</body>
</html>
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
$no=$_POST['no'];
$name=$_POST['name'];
$ad=$_POST['ad'];
$br=$_POST['br'];
$ph=$_POST['p'];
$mk1=$_POST['mk1'];
$mk2=$_POST['mk2'];
$mk3=$_POST['mk3'];
$mk4=$_POST['mk4'];
//$sql=mysqli_select_db("$dbname")die("couldnt select db");
$query="INSERT INTO student(no,name,addr,branch,ph,mk1,mk2,mk3,mk4) VALUES('$no','$name','$ad','$br','$ph','$mk1','$mk2','$mk3',$mk4')";
$res=mysqli_query($conn,$query);
if($res)
{
$sql="SELECT * FROM student";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
echo"<table border=2 align='center'";
echo"<tr><th>Roll No</th>";
echo"<th>Student Name</th>";
echo"<th>Adress</th>";
echo"<th>Branch</th>";
echo"<th>Phone</th>";
echo"<th>mark 1</th>";
echo"<th>mark 2</th>";
echo"<th>mark 3</th>";
echo"<th>mark 4</th>";
echo"<th>Total mark</th>";
echo"<th>Percentage</th>";
</tr>";
while($row=mysqli_fetch_assoc($res))
{
	echo"<tr><td>$row[no]</td>";
	echo"<td>$row[name]</td>";
	echo"<td>$row[addr]</td>";
	echo"<td>$row[branch]</td>";
	echo"<td>$row[ph]</td</tr>";
	echo"<td>$row[mk1]</td</tr>";
	echo"<td>$row[mk2]</td</tr>";
	echo"<td>$row[mk3]</td</tr>";
	echo"<td>$row[mk4]</td</tr>";
	</tr>";
}
echo"</table>";
}
else
{
echo"0 results";	
}
}
mysqli_close($conn);
?>
