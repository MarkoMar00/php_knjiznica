<?php
$username = htmlspecialchars($_SESSION['username']);

$con=mysqli_connect("localhost", "root","","knjiznica");
$query = "SELECT books.id, books.name, books.writer, books.genre 
          FROM books 
          INNER JOIN user_books ON books.id = user_books.book_id
          INNER JOIN users ON user_books.user_id = users.id
          WHERE users.username = '$username';";
$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['writer'] . "</td>";
    echo "<td>" . $row['genre'] . "</td>";
    echo "<td><a href='returnBook.php?book_id=" . $row['id'] . "'> <button class=\"btn btn-primary\" type=\"submit\">Vrati</button></a></td>";
    echo "</tr>";
}
mysqli_close($con);
?>