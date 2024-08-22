/* write a php script for the foll. design form to accept a string
a)write a function to  find the length of given string without using built in function
b)write a  function to count the total number of vowels i,e (a,e,i,o,u) from the string
c)Convert the given string to lowrcase & then to TitleCase
d)Pad the given String with "*" form left & right both the side
e)Remove the  leading whitespace from the given String 
f)Find the  reverse of given String (use built-in(function),(use radio button & the concept of function use 'include ' construct' or 'require' stmt
<html>
    <body>
        <form method="POST" action="">
            Enter String :
            <input type="text" name="t1"><br>
            <input type="radio" name="r1" value="aa">Length of String<br>
            <input type="radio" name="r1" value="bb">Count vowels<br>
            <input type="radio" name="r1" value="cc">Left & Rigth Padding<br>
            <input type="radio" name="r1" value="dd">Lower & Title case<br>
            <input type="submit">
</form> 
</body>
</html>

<?php
  $s=$_POST["t1"];
  $ch=$_POST["r1"];
  if($ch=="aa")
  length($s);
if($ch=="bb")
vowels_count($s);
if($ch=="cc")
left_right_pad($s);
if($ch=="dd")
disp_lower_title($s);
function length($s)
{
    $c=0;
    for($i=0;@$s[$i]!=null;$i++)
    $c++;
echo("Length=".$c);
}
function vowels_count($s)
{
    $cnt=0;
    for($i=0;@$s[$i]!=null;$i++)
    {
        if($s[$i]=='a'||$s[$i]=='A'||$s[$i]=='e'||$s[$i]=='E'||$s[$i]=='i'||$s[$i]=='I'||$s[$i]=='o'
        ||$s[$i]=='O'||$s[$i]=='u'||$s[$i]=='U')
        $cnt++;

    }
    echo("Vowels=".$cnt);
}
function left_right_pad($s)
{
    $s=str_pad($s,10,"*",STR_PAD_BOTH);
    echo("String=".$s);
}
function disp_lower_title($s)
{
    $s1=strtolower($s);
    echo("String in lower=".$s1);
    $s2=ucfirst($s1);
    echo("<br>titleCase=".$s2);
}
?>