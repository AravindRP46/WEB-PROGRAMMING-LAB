<html>
<body>
<h1>Electricity Bill</h1>
<form method="post" action="#">
Consumer ID=<input type="number" name="id"><br>
Name:<input type="text" name="name"><br>
Previous reading:<input type="number" name="prev"><br>
Present reading:<input type="number" name="pres"><br><br><input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST['id'];
$name=$_POST['name'];
$prev=$_POST['prev'];
$pres=$_POST['pres'];
$units=$pres-$prev;

echo"________________________________________________";
echo"<h3>Kerala State electricity Board";
echo"<br><br>";
echo"consumer ID".$id."<br>";
echo"consumer name:".$name."<br>";
echo"Units Consumed:".$units."<br>";
if($units<=100)
{
$amt=$units*3;
}
else if($units>100&&$units<=200)
{
$amt=$units*5*5;
}
else
{
$amt=$units*5;
}
echo"<h4>Total: Rs.".($amt)."</h4><br>";
echo"____________________________________________________";
}
?>
</body>
</html>
