<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="condition.php" method="post">

    <label for="score">Enter Your Score</label>
    <input type="number" name="score">
    <input type="submit" name="submit" value="Display">
        
    </form>
</body>
</html>

<?php 

  

    if(isset($_POST["submit"])){
  
    $score=$_POST["score"];

    switch(true){
    case ($score >= 90):
        echo "Grade: A+";
        break;

    case ($score >= 85 && $score < 90):
        echo "Grade: A";
        break;

    case ($score >= 80 && $score < 85):
        echo "Grade: A-";
        break;

    case ($score >= 75 && $score < 80):
        echo "Grade: B+";
        break;

    case ($score >= 70 && $score < 75):
        echo "Grade: B";
        break;

    case ($score >= 65 && $score < 70):
        echo "Grade: B-";
        break;

    case ($score >= 60 && $score < 65):
        echo "Grade: C+";
        break;

    case ($score >= 55 && $score < 60):
        echo "Grade: C";
        break;

    case ($score >= 50 && $score < 55):
        echo "Grade: C-";
        break;

    case ($score >= 40 && $score < 50):
        echo "Grade: D";
        break;

    default:
        echo "Your Grade:F";
}  



    }


?>