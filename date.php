<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="date.php" method="post">
  <!-- <label for="date">Enter the day</label>
    <input type="text" name="date"> -->
    <input type="submit" name="display"  value="Day">
   </form>
</body>
</html>

<?php 


if(isset($_POST["display"])){

$day=date("D");

switch($day){
case("Mon"):
    echo" Monday is Working day";
    break;
case("Tue"):
    echo"Tuesday is Working day";
    break;
case("Wedn"):
    echo"Wednesday is Working day";
    break;
case("Thu"):
    echo" Thursday is Working day";
    break;
case("Fri"):
    echo" Friday is Working day";
    break;
default:
    echo"Saturday and Sunday is Weekend";
}

}


?>