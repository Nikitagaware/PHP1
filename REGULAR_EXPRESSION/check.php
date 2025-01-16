//'\':check single character
<?php
 $s="c*t";
 $p="c\*t";
 if(ereg($p,$s))
 echo("valid");
else
 echo("Invalid");
?>