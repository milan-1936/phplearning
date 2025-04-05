<?php

$query = "Select * from student";
$conn = new mysqli("localhost", "root", "", "newdb");
//yesle result vanne object banauxa,
$result = $conn->query($query); // result vanne object
//$type = gettype($result);
//echo $type;
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>
        Sabai Ko Data Fetch Gareko
    </title>
</head>
<body>
    <h1>Sabai Jana ko Data Yaha xa</h1>
    <table class="table w-full">
        <tr class = "bg-slate-600 text-white">
            <th>Name</th>
            <th>Address</th>
        </tr>
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){//abstractions
                echo "<tr class ='even:bg-slate-200 border border-slate-200'>";
               echo "<td>" .$row["name"]. "</td>";
                echo "<td>". $row["address"]. "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
