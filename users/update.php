<?php 

include "../db_conn.php";
$name = ucwords($_POST['name']);
$user_name = ($_POST['user_name']);
$password = ($_POST['password']);
$role = $_POST['role'];
$id = $_GET['id'];

$sql = "UPDATE `user` SET 
`fullName`='$name',
`username`='$user_name',
`password`='$password',
`role`='$role'
Where id = '$id'";
mysqli_query($conn, $sql);

header("location:index.php?message=updated");
?>
