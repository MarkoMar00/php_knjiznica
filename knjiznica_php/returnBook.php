<?php
$bookId = $_GET['book_id'];

$con=mysqli_connect("localhost", "root","","knjiznica");
$query = "DELETE FROM user_books WHERE book_id = $bookId;";
$result = mysqli_query($con, $query);
mysqli_close($con);

header("Location: profile.php");
    exit;

?>