<?php
require("partials/header.php")
?>

    <h1>Add New Book</h1>
    <div>
        <a href="create.php" class="btn btn-primary">Add Book</a>
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>
    <div class="container">
        <form action="createview.php" class="mt-4 justify-content-center align-item-center" method="post">
            <div class="form-field">
                <input type="title" id="title" name="title" placeholder="Title:">
            </div>
            <div class="form-field">
                <input type="author" id="author" name="author" placeholder="Author:">
            </div>
            <div class="form-field">
                <input type="publication_year" id="publication_year" name="publication_year" placeholder="Publication Year">
            </div>
            <div class="form-field">
                <input type="isbn" id="isbn" name="isbn" placeholder="ISBN">
            </div>
            <div class="form-field">
                <input type="checkbox" id="available" name="available">
            </div>
            <div class="form-field">
                <input type="submit" name="create" value="Add Book">
            </div>
        </form>
    </div>

<?php
require("partials/footer.php")
?>
