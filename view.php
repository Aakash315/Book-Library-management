<?php
require("partials/header.php");
require("connection.php");

$query = $conn->prepare("SELECT * FROM books Where id=:id");
$query->execute(['id' => (int)$_GET["id"]]);
$result = $query->fetch();
?>

    <h1 class="mt-4 px-5">View Book</h1>
    <div class="mt-3 px-5">
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>
    <div class="container border bordered mt-4">
        <form action=".php" method="post">
            <div class="form-field my-4">
                <h3>Title:</h3>
                <!-- <input type="title" class="form-control" id="title" name="title" placeholder="Title:"> -->
                 <p class=""><?php echo $result['title']; ?></p>
            </div>
            <div class="form-field my-4">
                <h3>Author:</h3>
                <p><?php echo $result['author']; ?></p>
                <!-- <input type="author" class="form-control" id="author" name="author" placeholder="Author:"> -->
            </div>
            <div class="form-field my-4">
                <h3>Publication Year:</h3>
                <p><?php echo $result['publication_year']; ?></p>
                <!-- <input type="publication_year" class="form-control" id="publication_year" name="publication_year" placeholder="Publication Year"> -->
            </div>
            <div class="form-field my-4">
                <h3>Isbn:</h3>
                <p><?php echo $result['isbn']; ?></p>
                <!-- <input type="isbn" class="form-control" id="isbn" name="isbn" placeholder="ISBN"> -->
            </div>
        </form>
    </div>

<?php
require("partials/footer.php")
?>