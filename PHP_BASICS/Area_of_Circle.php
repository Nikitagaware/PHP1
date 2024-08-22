<html>
    <body>
        <form method="POST" action=" ">
            Enter radius:
            <input type="text" name="t1"><br>
            <input type="Submit" value="Area">
</form>
</body>
    </html>
    <?php
      $r=$_POST["t1"];
    $a=3.14*$r*$r;
    echo("Area of Circle=".$a);
    ?>