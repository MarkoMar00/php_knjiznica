<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.html");
        exit;
    }

    $username = htmlspecialchars($_SESSION['username']);
    $role = htmlspecialchars($_SESSION['role']);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Knjižnica</title>
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
    <?php include 'navbar.php'; ?>

    <div>
        <?php echo "<h1>Pozdrav " . $username . "</h1>"; ?>
        <br>
        <h2>Vaše posuđene knjige:</h2>
        <br>
   </div>

    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>Naziv</th>
        <th>Pisac</th>
        <th>Žanr</th>
        <th>Vrati</th>
    </tr>

    <?php include 'listUsersBooks.php'; ?>
    </table>
    </body>

    <footer class="bg-primary text-white fixed-bottom">
        <h3>Zagreb 2024</h3>
        <p>Marko Marijan</p>
    </footer>
</html>