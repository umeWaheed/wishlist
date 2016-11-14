<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name="assign2";

//create connection
$conn = mysqli_connect($servername,$username,$password)  or die('error');

//check conn
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo ",Connected successfully";

//select db
$select = mysqli_select_db($conn,$database_name)
or die ('db not available');
if($select)
    echo (",db selected");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Pagination</title>

</head>

<body>

<table style="border: 1px #000000 solid;" width="400" cellspacing="2" cellpadding="2" align="center">
    <?php

    $perpage = 3;

    if(isset($_GET["page"])){
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
    <tbody>
    <tr style="background-color: #cccccc;">

        <td style="font-weight: bold;font-family: arial;"><?php echo $post["id"]; ?></td>

    </tr>

    <tr>

        <td style="font-family: arial;padding-left: 20px;"><?php echo $post["name"]; ?></td>

    </tr>
    <?php
    }
    }
    ?>

    </tbody>
</table>

<table width="400" cellspacing="2" cellpadding="2" align="center">
<tbody>
<tr>
<td align="center">

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

        echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";

    }

    else

    {

        $j = $page - 1;

        echo "<span><a id='page_a_link' href='test.php?page=$j'>< Prev</a></span>";

    }

    for($i=1; $i <= $totalPages; $i++)

    {

        if($i<>$page)

        {

            echo "<span><a id='page_a_link' href='test.php?page=$i'>$i</a></span>";

        }

        else

        {

            echo "<span id='page_links' style='font-weight: bold;'>$i</span>";

        }

    }

    if($page == $totalPages )

    {

        echo "<span id='page_links' style='font-weight: bold;'>Next ></span>";

    }

    else

    {

        $j = $page + 1;

        echo "<span><a id='page_a_link' href='test.php?page=$j'>Next</a></span>";

    }

}
?>
</td>
<td></td>
</tr>
</tbody>
</table>


</body>
</html>
