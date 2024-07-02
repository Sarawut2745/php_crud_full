<?php 
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

$sql = "UPDATE users SET name='$name',email='$email',age='$age' WHERE id='$id'";

if ($conn->query($sql) == TRUE){
    echo "แก้ข้อมูลแล้ว";
}else
echo "เกิดข้อผิดพลาดแก้ข้อมูล" . $conn->error;
}


?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for=""></label>
    <input type="text" name="id">
    <label for=""></label>
    <input type="text" name="name">
    <label for=""></label>
    <input type="text" name="email">
    <label for=""></label>
    <input type="text" name="age">

    <input type="submit" value="แก้ไข">
</form>