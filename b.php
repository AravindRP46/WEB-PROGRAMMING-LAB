<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $id= $_POST['id'];
  $name = $_POST['name'];
  $prev = $_POST['prev'];
  $pres = $_POST['pres']; 
  $units=$pres-$prev;
  echo "-------------------------------------------------------------------------";
   echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
   echo "<br><br>";
   echo "Consumer ID:" .$id."<br>";
   echo "Consumer name : ".$name."<br>";
   echo "Units Consumed : ".$units."<br>";
if($units<=100)
  {
    $amt=$units*3;
  }
  else if($units>100 && $units<=200)
  {
    $amt=$units*4;
         }
  else if($units>200 && $units<=300)
  {
    $amt=$units*5;
  }
   else
  {
    $amt=$units*7;
  }
  echo "<h4>Total : Rs.".($amt)."</h4><br>";
  echo "-------------------------------------------------------------------------";
}
?>