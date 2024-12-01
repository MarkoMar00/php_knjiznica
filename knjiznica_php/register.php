<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Marko Marijan">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<header class="bg-primary text-white">
    <h1>Knjižnica</h1>
    <br>
</header>

<body>
    <h2>Register</h2>
    <form action="createUser.php" method="POST">
        <label for="username">Username:</label>
        <input class="form-control" type="text" id="username" name="username" required><br><br>

        <label for="name">Name:</label>
        <input class="form-control" type="text" id="name" name="name" required><br><br>

        <label for="name">Email:</label>
        <input class="form-control" type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input class="form-control" type="password" id="password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input class="form-control" type="password" id="confirm_password" name="confirm_password" required><br><br>

        <button class="btn btn-primary" type="submit">Register</button>
    </form>
</body>

<footer class="bg-primary text-white fixed-bottom">
    <h3>Zagreb 2024</h3>
    <p>Marko Marijan</p>
</footer>
</html>
