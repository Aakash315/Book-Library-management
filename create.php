<?php
require("partials/header.php")
?>

    <h1 class="mt-4 px-5">Add New Book</h1>
    <div class="mt-3 px-5">
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>
    <div class="container border mt-4">
        <form action="createview.php" method="post">
            <div class="form-field my-4">
                <h4>Title :</h4>
                <input type="title" class="form-control" id="title" name="title" placeholder="Title:">
            </div>
            <h4>Author :</h4>
            <div class="form-field my-4">
                <input type="author" class="form-control" id="author" name="author" placeholder="Author:">
            </div>
            <div class="form-field my-4">
                <h4>Publication Year :</h4>
                <input type="publication_year" class="form-control" id="publication_year" name="publication_year" placeholder="Publication Year">
            </div>
            <div class="form-field my-4">
                <h4>ISBN :</h4>
                <input type="isbn" class="form-control" id="isbn" name="isbn" placeholder="ISBN">
            </div>
            <div class="form-field my-4">
                <h4>Available :</h4>
                <input type="checkbox" id="available" name="available" placeholder="Available">
            </div>
            <div class="form-field my-4">
                <input type="submit" class="btn btn-primary" name="create" value="Add Book">
            </div>
        </form>
    </div>

<?php
require("partials/footer.php")
?>
