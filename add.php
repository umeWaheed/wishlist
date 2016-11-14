<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="wishlist.css">
</head>
<body>

<?php
   include ('assign2db.php');
?>
    <?php
    if (isset($_POST['btn'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $author = $_POST['author'];
        $path = $_POST['path'];
        $rat = $_POST['rating'];
        $query = "insert into books (id,name,author,review,image) values ('$id','$name','$author','$rat','$path')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            ?>
            <div class="success">
                <?php
                die ("could not enter data" . mysqli_error($conn));
                ?>
            </div>
            <?php
        }
        else {
            ?>
            <div class="success">
                <h4>Done!</h4>
            </div>
            <?php
        }
    }
?>
<div class="container-fluid">
    <div class="head">
        <h1>My Books Wishlist</h1>
    </div>

    <div class="col-md-6 image">
        <img src="http://images.gr-assets.com/quotes/1392103489p8/7572.jpg" alt="quote">
    </div>

    <div class="col-md-2"></div>
        <form action="add.php" class="form-horizontal col-md-4 form" method="post">
            <input type="text" placeholder="book id" class="form-control" name="id" required><br>
            <input type="text" placeholder="name" class="form-control" name="name" required><br>
            <input type="text" placeholder="author" class="form-control" name="author" required><br>
            <input type="text" placeholder="rating" class="form-control" name="rating"><br>
            <input type="text" placeholder="image path" class="form-control" name="path" required><br>
            <button type="submit" class="btn btn-success" name="btn">Add</button>
        </form>

</div>
</body>
</html>
