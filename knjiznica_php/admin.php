<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.html");
        exit;
    }

    if ($_SESSION['role'] != 2) {
        header("Location: login.html");
        exit;
    }

    $username = htmlspecialchars($_SESSION['username']);
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
        <h2>Dodajte knjigu</h2>
        <br>
   </div>

   <form action="addBook.php" method="POST">
        <label for="name">Naziv:</label>
        <input class="form-control" type="text" id="name" name="name" required><br><br>

        <label for="writer">Pisac:</label>
        <input class="form-control" type="text" id="writer" name="writer" required><br><br>

        <label for="genre">Žanr:</label>
        <input class="form-control" type="text" id="genre" name="genre" required><br><br>

        <label for="genre">Količina:</label>
        <input class="form-control" type="number" id="amount" name="amount" required><br><br>

        <button class="btn btn-primary" type="submit">Dodaj knjigu</button>
    </form>
    <br>


    <h3>Niste sigurni postoji li knjiga?</h3>
    <h4>Pretražite koristeći Open library</h4>
    <form action="findBook.php" method="POST">
        <label for="name">Ime knjige:</label>
        <input class="form-control" type="text" id="name" name="name" required><br><br>
        <button class="btn btn-primary" type="submit">Pretraži knjigu</button>
    </form>

    <?php
    if(isset($_GET['author'])) {
        if ($_GET['author'] == "nepostojeci") {
            echo "<p class=\"text-danger\"> Knjiga ne postoji!</p>";
        } else {
            echo "<p class=\"text-success\"> Knjiga postoji!</p>";
            echo "<p>Autor:" . $_GET['author'] . "</p>";
        }
    }
    ?>


    </body>

    <footer class="bg-primary text-white fixed-bottom">
        <h3>Zagreb 2024</h3>
        <p>Marko Marijan</p>
    </footer>
</html>
