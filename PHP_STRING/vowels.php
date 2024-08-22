//Count the vowels..
<?php
$s="rbnb college";
$cnt=0;
for($i=0;@$s[$i]!=Null;$i++)
{
    if($s[$i]=='a'||$s[$i]=='A'||$s[$i]=='e'||$s[$i]=='E'||$s[$i]=='i'||$s[$i]=='I'||$s[$i]=='o'||$s[$i]=='O'
    ||$s[$i]=='u'||$s[$i]=='U')
    $cnt++;
}
echo("string vowels=".$cnt);
?>