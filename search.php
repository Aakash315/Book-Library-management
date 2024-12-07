<?php

include("connection.php");

if(isset ($_POST['search'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publication_year = $_POST['publication_year'];
    $isbn = $_POST['isbn'];
    $available = isset($_POST['available']) == 1 ? "Yes" : "No";
}

$sql = "SELECT * FROM books Where  "