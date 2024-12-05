<?php
require("partials/header.php");
require("connection.php");

$query = $conn->prepare("DELETE FROM books Where id=:id");
$query->execute(['id' => (int)$_GET["id"]]);
$result = $query->fetch();

header("Location: index.php");
exit();
// print_r($result);
?>