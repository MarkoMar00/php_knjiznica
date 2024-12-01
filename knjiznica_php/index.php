<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
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
        <h2>Dobro došli!</h2>
        <h3>Kako bi ste nastavili molimo ulogirajte se ili se registrirajte!</h3>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input class="form-control" type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password" required><br><br>

            <button class="btn btn-primary" type="submit">Login</button>
        </form>
        <br>
        <form action="register.php" method="POST">
            <button class="btn btn-primary" type="submit">Register</button>
        </form>
    </body>

    <footer class="bg-primary text-white fixed-bottom">
        <h3>Zagreb 2024</h3>
        <p>Marko Marijan</p>
    </footer>
</html>