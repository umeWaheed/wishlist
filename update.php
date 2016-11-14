<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="wishlist.css">
</head>
<body>
<?php
include('assign2db.php');
?>
<div class="container-fluid">
    <div class="head">
        <h1>My Books Wishlist</h1>
    </div>

    <div class="col-md-6 image">
        <img src="http://images.gr-assets.com/quotes/1392103489p8/7572.jpg" alt="quote">
    </div>

    <div class="col-md-2"></div>

    <?php
    if (isset($_GET['up'])) {
        $id1 = $_GET['id1'];
        $record = "select * from books where id=".$id1;
        $row = mysqli_query($conn, $record);
        $row = mysqli_fetch_array($row);
        if (!$row)
            echo mysqli_error($conn);

        ?>
        <form action="update.php" class="form-horizontal col-md-4 form" method="post">
            <input type="hidden" value="<?php echo $id1 ?>" name="prevID">
            <input type="text" value="<?php echo $row['id'] ?>" class="form-control" name="id" required readonly><br>
            <input type="text" value="<?php echo $row['name'] ?>" class="form-control" name="name" required><br>
            <input type="text" value="<?php echo $row['author'] ?>" class="form-control" name="author" required><br>
            <input type="text" value="<?php echo $row['review'] ?>" class="form-control" name="rating"><br>
            <input type="text" value="<?php echo $row['image'] ?>" class="form-control" name="path" required><br>
            <button type="submit" class="btn btn-success" name="update">Update</button>
        </form>
        <?php
    }
    else {
        ?>

        <div class="col-md-4 success">
            <h1>Updated :)</h1>
        </div>
        <?php
    }
    ?>

    <?php
    if (isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $author = $_POST['author'];
        $path = $_POST['path'];
        $rat = $_POST['rating'];
        $query = "update books set id='$id', name='$name', author='$author', review='$rat', image='$path' where id=".$_POST['prevID'];
        if (! mysqli_query($conn,$query))
            echo mysqli_error($conn);
    }
    ?>

</body>
</html>