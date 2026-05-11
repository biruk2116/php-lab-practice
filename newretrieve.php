<?php include 'newdb.php'; ?>
<table border="1">

<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
</tr>

<?php
$result =$conn->query("SELECT * FROM stud");

while ($row =$result->fetch_assoc()){
    echo "<tr>
    <td>".htmlspecialchars($row['id'])."</td>
    <td>".htmlspecialchars($row['name'])."</td>
    <td>".htmlspecialchars($row['age'])."</td>
    <td>".htmlspecialchars($row['gender'])."</td>
    </tr>";
}
?>

</table>