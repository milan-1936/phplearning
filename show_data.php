<?php

$query = "Select * from student";
$conn = new mysqli("localhost", "root", "", "newdb");
//yesle result vanne object banauxa,
$result = $conn->query($query); // result vanne object
//$type = gettype($result);
//echo $type;
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){ //abstraction
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>". $row["address"]."</td>";
        echo "</tr>";
    }
}
