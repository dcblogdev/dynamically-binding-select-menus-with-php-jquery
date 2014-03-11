<?php
include('config.php');

//collect the passed id
$id = $_GET['catID'];

//run a prepared statement 
$stmt = $conn->query('SELECT bookID,bookTitle FROM books WHERE catID = '.$conn->quote($id).' ORDER BY bookTitle');

//loop through all returned rows
while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo "<option value='$row->bookID'>$row->bookTitle</option>";
}