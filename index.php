<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Calculator</title>
  </head>
  <body>
    <?php 
      if(isset($_POST["count"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        switch ($operation) {
          case "add":
            $results = $num1 + $num2;
            break;
          case "sub":
            $results = $num1 - $num2;
            break;
          case "mul":
            $results = $num1 * $num2;
            break;
          case "div":
            $results = $num1 / $num2;
            break;
        }
      }
    ?>
    <div class="calculator">
      <h1 class="title">
        Calculator
      </h1>
      <form method="post" action="index.php">
        <input type="text" name="num1" autocomplete="off" class="num" placeholder="Enter the first number">
        <input type="text" name="num2" autocomplete="off" class="num" placeholder="Enter the second number">
        <select name="operation" class="opt">
          <option value="add">+</option>
          <option value="sub">-</option>
          <option value="mul">*</option>
          <option value="div">/</option>
        </select>
        <input type="submit" class="button" name="count" value="Submit">
      </form>
      <?php if(isset($_POST["count"])) {?>
        <input type="text" value="<?php echo $results; ?>" class="num">
        <?php } else { ?>
        <input type="text" value="0" class="num">
      <?php }?>
    </div>
  </body>
</html>