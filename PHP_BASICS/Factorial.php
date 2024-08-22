//Calculate Factorial of numbers
<html>
  <body>
    <form method="get" action=" ">
     Enter number:
      <input type="text" name="t1"><br>
      <input type="Submit" value="Factorial">
</form>
  </body> 
</html>
<?php
  $f=1;
  $n=$_GET["t1"];
  for($i=1;$i<=$n;$i++)
  {
     $f=$f*$i;
}  
 echo("Factorial=".$f);

?>
