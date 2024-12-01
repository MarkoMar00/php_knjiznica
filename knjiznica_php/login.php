<?php
$savedUser;
$savedPassword;
$role = 1;
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$con=mysqli_connect("localhost", "root","","knjiznica");
$query = "SELECT username, password, role FROM users WHERE username = '$username'";
$result = mysqli_query($con,$query);
$foundUser = mysqli_fetch_row($result);
$savedUser = $foundUser[0];
$savedPassword = $foundUser[1];
$role = $foundUser[2];
mysqli_close($con);

echo "$savedUser $savedPassword $role   $username $password"; 

if ($username == $savedUser && $password == $savedPassword) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    header("Location: main.php");
    exit;
} else {
    header("Location: failedLogin.php");
    exit;
}
?>
