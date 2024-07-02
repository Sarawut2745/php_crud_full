<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM users WHERE id='$id'";
    if($conn->query($sql) == TRUE) {
        echo "ลบข้อมูลแล้ว";
    }else
    echo "เกิดข้อผิดพลาดลบข้อมูล" . $conn->error;
}

?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="">ลบ  ID</label>
    <input type="text" name="id"><br><br>
    <input type="submit" value="ลบ">

</form>