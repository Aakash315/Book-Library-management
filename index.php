<?php
include("partials/header.php");
$heading = "Book Library";
include("connection.php");

$limit = 10;

if (!isset($_GET['page'])) {
    $page_number = 1;
} else {
    $page_number = $_GET['page'];
}

$start_page = ($page_number - 1) * $limit;
// print_r($start_page);

$sql = "SELECT * FROM books LIMIT $start_page, $limit";
$stmt = $conn->query($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);


$sql = "SELECT * FROM books";
$stmt = $conn->query($sql);
$stmt->execute();
$results = $stmt->rowCount();
$result_count = ceil($results / $limit);
// print_r($result_count);
?>

<h1 class="mt-5 px-5"><?= $heading; ?></h1>
<div class="mt-3 px-5">
    <a href="create.php" class="btn btn-primary">Add Book</a>
</div>
<form action="index.php" method="post">
    <div class="container mt-4">
        <input type="search" name="search" id="search">
        <input type="submit" class="btn btn-primary" value="Search">
        <select name="available" id="available">
            <option value="1" <?php isset($_GET['available']) && $_GET['available'] == 1 ? 'selected' : '' ?>>Yes</option>
            <option value="0" <?php isset($_GET['available']) && $_GET['available'] == 0 ? 'selected': '' ?>>No</option>
        </select>
        <input type="submit" class="btn btn-primary" value="Search">
    </div>
</form>
<div class="container">
    <table class="table table-bordered mt-4">
        <thead class="align-item-center">
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publication Year</th>
            <th>ISBN</th>
            <th>Available</th>
            <th>Created At</th>
            <th>Action</th>
        </thead>
        <tbody class="">
            <?php foreach ($result as $book): ?>
                <tr>
                    <td><?= $book["id"] ?></td>
                    <td><?= $book["title"] ?></td>
                    <td><?= $book["author"] ?></td>
                    <td><?= $book["publication_year"] ?></td>
                    <td><?= $book["isbn"] ?></td>
                    <td><?= $book["available"] == 1 ? "YES" : "NO"; ?></td>
                    <td><?= $book["created_at"] ?></td>
                    <td>
                        <div>
                            <a href="view.php?id=<?= $book['id'] ?>" class="btn btn-info">View</a>
                            <a href="edit.php?id=<?= $book['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?= $book['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <label for="" class="fs-6">pages..</label>
    <?php
    echo '<ul class="pagination">';
    for ($i = 1; $i <= $result_count; $i++) {
        echo '<a href="?page=' . $i . '" class="p-2 fs-5"> ' . $i . ' </a>';
    }
    echo '</ul>';
    ?>
</div>
<?php include("partials/footer.php"); ?>