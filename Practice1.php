<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Practice1.php" method="post">
        <label for="quantity"> Quantity</label>
        <input type="number" name="quantity"><br><br>
        <button type="submit" name="Calculate">Calculate</button>
    </form>
</body>
</html>
<?php 
$item="Burger";
$Quantity=$_POST["quantity"];
$price=8.32;
$totalprice=null;
$totalprice=$price*$Quantity;
echo " <br> You ordered  {$Quantity} x  {$item}s  <br> <br>";
echo "Your total price is : \${$totalprice}";
?>