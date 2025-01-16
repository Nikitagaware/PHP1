//"-"::Represent all characters between two characters 
<?php
  $s="rbpcdj";
  $p="rb[a-d]cdj";
  if(ereg($p,$s))
   echo("Valid");
else
   echo("Invalid");

?>