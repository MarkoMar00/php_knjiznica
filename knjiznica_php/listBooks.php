<?php

$con=mysqli_connect("localhost", "root","","knjiznica");
$query = "SELECT id, name, writer, genre FROM books";
$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['writer'] . "</td>";
    echo "<td>" . $row['genre'] . "</td>";
    echo "<td><a href='borrowBook.php?book_id=" . $row['id'] . "'> <button class=\"btn btn-primary\" type=\"submit\">Posudi</button></a></td>";
    echo "</tr>";
}
mysqli_close($con);
?>