//(||) :A set of alternate string..
<?php
 $s="nikita679@gmail.gov";
 $p="(.in|.com)$";
 if(ereg($p,$s))
   echo("valid");
else
   echo("invalid");
?>
