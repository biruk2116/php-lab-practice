<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="City.php" method="post">
        <label for="Country">Enter the country</label><br> <br> 
        <input type="text" name="Country"> <br><br>
        <input type="submit">
        
    </form>
</body>
</html>
<?php 
$countries=array("USA"=>"Washington DC",
                 "India"=>"new delhi",
                 "Ethiopia"=>"Addis Ababa",
                 "Japan"=>"Tokyo",                
                  "South Korea"=>"Seoul");

    $Capital=$countries[$_POST["Country"]];

    echo "The capital city is {$Capital}";

?>


<?php

