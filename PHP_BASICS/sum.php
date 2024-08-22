//find the sum of first n numberss...
<html>
  <body>
    <form method="get" action=" ">
    Enter number:
     <input type="text" name="t1"><br>
     <input type="submit" value="Sum">
</form>
  </body>
</html>
<?php
  $s=0;
  $n=$_GET["t1"];
  for($i=0;$i<=$n;$i++)
  {
     $s=$s+$i;
  }
  echo("Sum=".$s);
?>
