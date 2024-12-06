<?php
include('connection.php');

if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publication_year = $_POST['publication_year'];
    $isbn = $_POST['isbn'];
    $available = isset($_POST['available'])==1 ? "Yes" : "No";

    $stmt = $conn->prepare("INSERT INTO books(title, author, publication_year, isbn, available) VALUES(:title, :author, :publication_year, :isbn, :available)");

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':publication_year', $publication_year);
    $stmt->bindParam(':isbn', $isbn);
    $stmt->bindParam(':available', $available);

    $result = $stmt->execute();

    header("Location: index.php");
    exit();
}

// function checkBox () {
//     if($_POST['available'] == 1){
//         echo ;
//     }
// }
