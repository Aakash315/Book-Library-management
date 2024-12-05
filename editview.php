<?php
include('connection.php');

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publication_year = $_POST['publication_year'];
    $isbn = $_POST['isbn'];
    $available = $_POST['available'];
    

    $stmt = $conn->prepare("UPDATE books SET title= :title, author= :author, publication_year= :publication_year, isbn= :isbn, available= :available WHERE id= :id");
    // print_r($stmt);
    // die();
    
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':publication_year', $publication_year);
    $stmt->bindParam(':isbn', $isbn);
    $stmt->bindParam(':available', $available);

    $result = $stmt->execute();
    // print_r($result);
    // die();
   
    header("Location: index.php");
    exit();
}
