<?php
session_start();
$bookId = $_GET['book_id'];
$username = $_SESSION['username'];

$con=mysqli_connect("localhost", "root","","knjiznica");
$query = "SELECT id  FROM users WHERE username='$username'";
$result = mysqli_query($con,$query);
$userId = mysqli_fetch_row($result);
$userId = $userId[0];
mysqli_close($con);

$con=mysqli_connect("localhost", "root","","knjiznica");
$query = "INSERT INTO user_books (user_id, book_id) VALUES ($userId, $bookId);";
$result = mysqli_query($con, $query);
mysqli_close($con);

header("Location: main.php");
    exit;

?>