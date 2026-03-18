<?php 

include("database.php");

$username="biniyam";
$pass="bini1234";

$hash=password_hash($pass,PASSWORD_DEFAULT);


$sql="INSERT INTO users(user,password) VALUES('$username','$hash')";

try{
    mysqli_query($conn,$sql);
    echo"user is now registered";
}
catch(mysqli_sql_exception){
echo"user not registered";
}

mysqli_close($conn);
?>