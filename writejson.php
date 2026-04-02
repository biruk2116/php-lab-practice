<?php  

$student=["name"=>"hana","age"=>23,
"isstudent"=>true,"course"=>["IP","DB"]];

$encode=json_encode($student,JSON_PRETTY_PRINT);

file_put_contents("data.json",$encode);

echo"Data successfully entered";
?>

