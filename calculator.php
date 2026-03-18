<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="calculator.php" method="post">
    <h2>Simple Calculator</h2>
     <pre>
    <label for="num1">Enter the first Number</label>
    <input type="number" name="num1"> <br>
    <label for="num1">Enter the second Number</label>
    <input type="number" name="num2">

    <label>Select Operator</label>
    <select name="selection">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    </select>

    <input type="submit" name="Result" value="Result">
     </pre>
    
  </form>
</body>
</html>

<?php 

    if(isset($_POST["Result"])){

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operator = $_POST["selection"];

function result($num1,$num2,$operator){

    switch($operator){
        case "+":
            return $num1 + $num2;

        case "-":
            return $num1 - $num2;

        case "*":
            return $num1 * $num2;

        case "/":
            if($num2 == 0){
                return "Cannot divide by zero";
            }
            return $num1 / $num2;

        default:
            return "Invalid operator";
    }

}

echo "<h3>Result: ". result($num1,$num2,$operator) ."</h3>";

}

?>


