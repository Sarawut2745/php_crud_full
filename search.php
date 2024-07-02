<?php

include 'connect.php';

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    $sql = "SELECT * FROM users WHERE name LIKE '%$keyword%'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . ", Name: " . $row["name"] . "<br>";
        }
    } else {
        echo "ไม่พบข้อมูล";
    }

    $conn->close();
}
?>

<form action="search.php" method="GET">
    <input type="text" name="keyword">
    <button type="submit">ค้นหา</button>
</form>
