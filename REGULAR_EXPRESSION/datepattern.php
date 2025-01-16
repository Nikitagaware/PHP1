//Date pattern:DD-MON-YYYY
<?php
$s="30/MAY/2023";
$p="([0-9]{2})/([A-Z]{3})/([0-9]{4})";
if(ereg($p,$s))
 echo("valid");
else
 echo("Invalid");
?>