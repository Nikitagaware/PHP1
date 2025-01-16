/*
using regular expression check for the validity of entered  email-id 
a)the @ symbol should not appear more than once.
b)The dot(.) can appear at the most once before @ & at the most twice or at least once after @ sodium_crypto_box_publickey
c)The subString before  @ should not begin with a digit or underscore or dot or @ or any other special character(use explode & ereg function)

*/
<html>
    <body>
        <form method="post" action=" ">
            Enter EmailId:
            <input type="text" name="t1" ><br>
            <input type="submit" value="ok">
</form>
</body>
</html>
<?php
$s=$_POST["t1"];
$p="^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,3}$";
if(ereg($p,$s))
 echo("Valid");
else
 echo("Invalid");
?>

