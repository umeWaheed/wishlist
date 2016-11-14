<html>
<head>
    <title>My Wishlist</title>
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

    <?php

    $perpage = 10;

    if(isset($_GET["page"]) and $_GET["page"]<>0){
        $page = intval($_GET["page"]);
    }
    else {
        $page = 1;
    }
    $calc = $perpage * $page;
    $start = $calc - $perpage;
    $result = mysqli_query($conn, "select * from  books Limit $start, $perpage");

    $rows = mysqli_num_rows($result);

    if($rows){
    $i = 0;
    while($post = mysqli_fetch_assoc($result)) {
        ?>

        <div class="col-md-3 col-sm-6 col-xs-12 book1 row">
            <div class="col-md-2 col-sm-2 col-xs-2 number">
                <?php
                echo $post['id'];
                ?>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 book">
                <h2>
                    <?php
                    echo $post['name'];
                    ?></h2>
                <img src="<?php echo $post['image'] ?>" alt="#">
                <p><?php echo $post['author'] ?>
                    <span>
                <?php
                for ($i = 1; $i <= $post['review']; $i++) {
                    ?>
                    <span class="glyphicon glyphicon-star"></span>
                    <?php
                }
                ?>
            </span></p>
                <div class="delete">
                    <form action="wishlist.php" method="get" class="form-inline">
                        <input type="hidden" name="id" value="<?php echo $post['id']?>">
                        <button type="submit" class="btn btn-danger" name="del">Delete?</button>
                    </form>
                    <form action="update.php" method="get" class="form-inline">
                        <input type="hidden" name="id1" value="<?php echo $post['id']?>">
                        <button type="submit" class="btn btn-success"  name="up">Update?</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
    }
    ?>
    <div class="col-md-3 book1">
        <div class="col-md-2"></div>
        <div class="col-md-10 book">
            <a href="add.php"><h2>Add a new one!</h2><img class="plus" src="http://www.clipartbest.com/cliparts/4T9/zBp/4T9zBpp8c.png" alt="add"></a>
        </div>
    </div>

    <div>
        <ul class="pagination">
                <?php
                if(isset($page))
                {
                    $result = mysqli_query($conn,"select Count(*) As Total from books");
                    $rows = mysqli_num_rows($result);
                    if($rows)
                    {
                        $rs = mysqli_fetch_assoc($result);
                        $total = $rs["Total"];
                    }
                    $totalPages = ceil($total / $perpage);
                    if($page <=1 ){
                        ?>
                        <li><a href="wishlist.php?page=1">Prev</a></li>
            <?php
                    }
                    else
                    {
                        $j = $page - 1;
                        ?>
            <li><?php echo "<a id='page_a_link' href='wishlist.php?page=$j'>Prev</a>" ?></li>
            <?php
                    }
                    for($i=1; $i <= $totalPages; $i++) {
                        ?>
                        <li> <?php echo "<a id='page_a_link' href='wishlist.php?page=$i'>$i</a>" ?></li>
                        <?php
                    }
                    if($page == $totalPages )
                    {
                        ?>
            <li><?php echo "<a href='wishlist.php?page=$totalPages'>Next</a>" ?></li>
            <?php
                    }
                    else
                    {
                        $j = $page + 1;
                        ?>
            <li><?php echo "<a id='page_a_link' href='wishlist.php?page=$j'>Next</a>"?></li>
            <?php
                    }
                }
                ?>
        </ul>
    </div>

</body>
</html>