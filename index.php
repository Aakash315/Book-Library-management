<?php
include("partials/header.php");
include("connection.php");

$sql = "SELECT * FROM books";
$stmt = $conn->query($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);

?>

<h1 class="mt-5">Add New Books</h1>
<div>
    <a href="create.php" class="btn btn-primary">Add Book</a>
</div>
<div class="container">
    <table class="border table-bordered">
        <thead class="">
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publication Year</th>
            <th>ISBN</th>
            <th>Available</th>
            <th>Created At</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($result as $book): ?>
                <tr>
                    <td><?= $book["id"] ?></td>
                    <td><?= $book["title"] ?></td>
                    <td><?= $book["author"] ?></td>
                    <td><?= $book["publication_year"] ?></td>
                    <td><?= $book["isbn"] ?></td>
                    <td><?= $book["available"] ?></td>
                    <td><?= $book["created_at"] ?></td>
                    <td>
                        <div>
                            <a href="view.php?id=<?=$book['id'] ?>" class="btn btn-primary">View</a>
                            <a href="edit.php?id=<?=$book['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $book['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include("partials/footer.php"); ?>