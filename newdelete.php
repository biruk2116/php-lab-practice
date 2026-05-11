<?php include 'nnewdb.php';?>
<form>
    ID:<input type="number" name="id"><br>
    <button type="submit" name="delete">delete</button>
</form>

<?php 
     if(isset($_POST["delete"])){
        $id=$_POST["id"];
        $stmt=$conn->prepare("DELTE FROM stud WHERE ID=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        echo "student deleted successfully!";

     }
?>