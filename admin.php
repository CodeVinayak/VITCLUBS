<?php
    include("php/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data  ">
    <label for="">Background : <input type="file" name="bg_img"></label><br>
    <label for="">Main Image : <input type="file" name="img"></label><br>
    <label for="">Name : <input type="text"></label><br>
    <label for="">Intro  : <input type="text"></label>
    <label for="">Description:<textarea name="" id="" cols="30" rows="10"></textarea></label><br>
    </form>
    <?php
    ?>
</body>
</html>
