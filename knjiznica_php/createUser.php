<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirm_password'] ?? '';
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$users = [];

echo " $username, $password $name $email";

// Check if passwords match
if ($password !== $confirmPassword) {
    echo "
    <h2>Neispravni podaci</h2>
    <h3 class=\"text-danger\">Korisničko ime ili šifra su krivi, molim pokušajte ponovo</h3>
    <form action=\"index.php\" method=\"POST\">
        <button class=\"btn btn-primary\" type=\"submit\">Povratak</button>
    </form>";
    exit;
}

$con=mysqli_connect("localhost", "root","","knjiznica");
$query = "SELECT username FROM users";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) {
    array_push($users, $row['username']); 
}
mysqli_close($con);

if (isset($users[$username])) {
    echo "
    <h2>Neispravni podaci</h2>
    <h3 class=\"text-danger\">Korisničko ime ili šifra su krivi, molim pokušajte ponovo</h3>
    <form action=\"index.php\" method=\"POST\">
        <button class=\"btn btn-primary\" type=\"submit\">Povratak</button>
    </form>
    ";
    exit;
}

$con=mysqli_connect("localhost", "root","","knjiznica");
$query = "INSERT INTO users (username, password, name, email, role) VALUES ('$username', '$password', '$name', '$email', 1)";
$result = mysqli_query($con,$query);
mysqli_close($con);

$_SESSION['username'] = $username;
$_SESSION['role'] = 1;
header("Location: main.php");
    exit;

?>
