<?php declare(strict_types = 1);
      include 'includes/class-autoload.inc.php';
      include 'includes/header.inc.php';
?>


  <body>

<form class="form-inline" action="includes/calc.inc.php" method="post">
  <h3>Calculator with OOP PHP!</h3>

  <div class="form-group">
    <input type="number" name="num1" placeholder="First number" class="form-control">
  </div>

<div class="form-group">
    <select class="form-control" name="oper">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="div">Divide</option>
        <option value="mul">Multiply</option>
    </select>
</div>

  <div class="form-group">
    <input type="number" name="num2" placeholder="Second number" class="form-control">
  </div>

  <button type="submit" name="Submit" class="btn btn-default">Calculate</button>
</form>

<br><br>

  </body>

</html>
