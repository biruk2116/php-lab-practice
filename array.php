<?php 

$age=["peter"=>33,
      "Age"=>29];

      foreach($age as $key=>$value){
        // echo $key.":" .$value
        echo "$key  : $value <br>";
      }

$File=[["Volvo",22,18,],["BMW",15,13],["Saab",5,2],["Land Rover",17,15]];
echo $File[0][0];
echo $File[0][1];
echo $File[0][2];
echo "<br> This is the live server practice one";

?>


<?php 
$firstString = "The quick brown fox"; 
$secondString = " jumped over the lazy dog."; 
$thirdString = $firstString; 
$thirdString .= $secondString; // Concatentation 


echo "<h3> change to lowercase:</h3>";
echo  strtolower($thirdString);
echo "<h3> change to uppercase:</h3>";
echo  strtoupper($thirdString);
echo "<h3> change to uppercase first-letter:</h3>";
echo  ucfirst($thirdString);
echo "<h3> change to uppercase words:</h3>";
echo  ucwords($thirdString);
echo "<h3> change to trim:</h3>";
echo  trim($thirdString);
echo "<h3> change to length:</h3>";
echo  strlen($thirdString); 
echo "<h3> counts the number of characters:</h3>";
echo str_word_count($thirdString); 
echo "<h3> reverse string:</h3>";
echo strrev($thirdString);
echo "<h3> string replace:</h3>";
echo str_replace("fox", "cat", $thirdString);
echo "<h3>position of the first occurence</h3>";
echo strpos($thirdString, "dog");
echo "<h3>Returns part of astring </h3>";
echo substr($thirdString, 0,23);




$x = 1;
do {
  echo "Number: $x <br>";
  $x++;
} while ($x <= 5);

