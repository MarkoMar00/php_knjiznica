<?php
$name = $_POST['name'] ?? '';
$writer = $_POST['writer'] ?? '';
$genre = $_POST['genre'] ?? '';
$amount = $_POST['amount'] ?? '';

$con=mysqli_connect("localhost", "root","","knjiznica");
$query = "INSERT INTO books (name, writer, genre, amount) VALUES ('$name', '$writer', '$genre', '$amount')";
$result = mysqli_query($con,$query);
mysqli_close($con);

echo "$genre";

header("Location: admin.php");
    exit;
?>