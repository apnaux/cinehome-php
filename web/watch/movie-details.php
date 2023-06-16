<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_GET["movieid"])){
            echo $_GET["movieid"];
        }
    ?>
    <br>
    <a href="/web/watch/home.php">go back</a> <br>
    <a href="/web/payments/pay.php">pay now</a>
</body>
</html>