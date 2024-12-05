<?php
require("partials/header.php");
require("connection.php");

$query = $conn->prepare("SELECT * FROM books Where id=:id");
$query->execute(['id' => (int)$_GET["id"]]);
$result = $query->fetch();
$id = $_GET['id'];
// print_r($result);
?>

<h1 class="mt-4 px-5">Edit Book</h1>
<div class="mt-3 px-5">
    <a href="index.php" class="btn btn-primary">Back</a>
</div>
<div class="container border mt-4">
    <form action="editview.php" method="post">
        <div class="form-field my-4">
            <h4>Title :</h4>
            <input type="title" class="form-control" id="title" name="title" value="<?php echo $result['title']; ?>" placeholder="Title:">
        </div>
        <div class="form-field my-4">
            <h4>Author :</h4>
            <input type="author" class="form-control" id="author" name="author" value="<?php echo $result['author']; ?>" placeholder="Author:">
        </div>
        <div class="form-field my-4">
            <h4>Publication Year :</h4>
            <input type="publication_year" class="form-control" id="publication_year" name="publication_year" value="<?php echo $result['publication_year']; ?>" placeholder="Publication Year">
        </div>
        <div class="form-field my-4">
            <h4>ISBN :</h4>
            <input type="isbn" class="form-control" id="isbn" name="isbn" value="<?php echo $result['isbn']; ?>" placeholder="ISBN">
        </div>
        <div class="form-field my-4">
            <h4>Available :</h4>
            <input type="checkbox" id="available" name="available" placeholder="Available">
        </div>
        <div class="form-field my-4">
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
            <input type="submit" class="btn btn-primary" name="update" value="Edit Book">
        </div>
    </form>
</div>

<?php
require("partials/footer.php")
?>