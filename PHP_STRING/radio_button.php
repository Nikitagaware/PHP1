/*
Use Radio button & write seperate function for each operation
*/
<html>
    <body>
        <form method="POST" action=" ">
            Enter no1:
            <input type="numbers" name="t1"><br>
            Enter no2:
            <input type="number" name="t2"><br>
            <input type="radio" name="r1" value="aa">Addition<br>
            <input type="radio" name="r1" value="bb">Substraction<br>
            <input type="radio" name="r1" value="cc">Multiplication<br>
            <input type="radio" name="r1" value="dd">Division<br>
            <input type="Submit">
</form>
</body>
    </html>
    <?php
    $a=$_POST["t1"];
    $b=$_POST["t2"];
    $ch=$_POST["r1"];
    if($ch=="aa")
      add($a,$b);
    if($ch=="bb")
      sub($a,$b);
    if($ch=="cc")
     mul($a,$b);
    if($ch=="dd")
    div($a,$b);

    function add($a,$b)
    {
        $c=$a+$b;
        echo("<br>Result:".$c);

    }
    function sub($a,$b)
    {
        $c=$a-$b;
        echo("<br>Result:".$c);
        
    }
    function mul($a,$b)
    {
        $c=$a*$b;
        echo("<br>Result:".$c);
        
    }
    function div($a,$b)
    {
        $c=$a/$b;
        echo("<br>Result:".$c);
        
    }

    ?>