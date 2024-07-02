<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD</h1>
    <table border="2">
        <tr>
            <th>NO.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php 
       include 'connect.php';

        $sql = "SELECT * FROM users";

        $strsql = mysqli_query($conn, $sql);
        if ($strsql->num_rows > 0){
            $count = 1;
            while ($row = mysqli_fetch_assoc($strsql)) {
                echo "<tr>";
                echo "<td>". $count ."</td>";
                echo "<td>". $row['name']."</td>";
                echo "<td>". $row['email']."</td>";
                echo "<td>". $row['age']."</td>";  
                echo "</tr>";
                $count++;
            }
        } 
        ?>
    </table>
</body>
</html>
