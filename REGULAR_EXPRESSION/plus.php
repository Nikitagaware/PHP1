//'+':It is qualifier that matches  one or more occurrences of preceding chracters.
<?php
$s="Rbnb";
$p="^[a-zA-Z]";
if(ereg($p,$s))
 echo("Valid");
else
  echo("Invalid");

?>