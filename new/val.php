<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
$name=$_POST['nam'];
if(!preg_match("/^[a-zA-Z]*$/",$name))
{
	$ErrMsg="Only alphabets and whitespace are allowed";
	echo $ErrMsg;
}
else
{
	echo $name;
	
}

$email=$_POST['mail'];
$pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-])*(\.[a-z]{2,3})$^";
if(!preg_match($pattern,$email))
{
	$ErrMsg="Email is not valid";
	echo$ErrMsg;
}
else
{
	echo"your valid email addrress is:\t".$email;
}

$mob=$_POST['ph'];
if(!preg_match("/^[0-9]*$/",$mob))
{
	$ErrMsg="only numeric value is allowed";
	echo $ErrMsg;
}
else
{
	echo$mob;
}
?>