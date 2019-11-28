<?php declare(strict_types = 1);
include 'class-autoload.inc.php';
include 'header.inc.php';

$oper = $_POST["oper"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc = new Calc($oper, (int)$num1, (int)$num2);

?>
<br>

<div class="container">

    <p class=""> Result =


    <?php

    try {

      echo $calc->calculator();

      } catch (TypeError $e){

        echo "Error" . $e->getMessage();
    }

    ?></p>
</div>

<div class="container">
    <a href="../index.php" class="btn btn-info" role="button">Try another calculation</a>
</div>


</html>
