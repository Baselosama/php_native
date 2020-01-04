<?php
include ('../database/connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm_pass'];

$sql = "INSERT INTO register  (name, email, password, confirm_pass) VALUES ('{$name}', '{$email}', '{$password}', '{$confirm_pass}')";
if (mysqli_query($conn, $sql)) {
    header('location:../../php/homepage.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>