<?php include 'newdb.php';?>

<form  method="POST">
   ID: <input type="number" name="id"><br>
   NAME: <input type="text" name= "name"><br>
   AGE : <input type="number" name="age"><br>
   GENDER: <input type="text" name="gender"><br>
   <input type="submit" name="submit" value="insert">
</form>
<?php 

if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
}
// prepared statement

?>

