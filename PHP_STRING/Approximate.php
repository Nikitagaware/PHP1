<?php
$s1="Sea";
$s2="See";
if(soundex($s1)==soundex($s2))
  echo("String are Same");
else 
  echo("String are not Same");
echo("<br>Using Metaphone<br>");
if(metaPhone($s1)==metaphone($s2))
 echo("Same");
else
 echo("Not Same");
?>