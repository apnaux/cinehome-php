<?php

require($_SERVER["DOCUMENT_ROOT"]."/connection.php");
session_start();

$select = "update watch_history set completion_date=CURRENT_DATE() where account_id=" . $_SESSION['account_id'] . " and movie_id=". $_POST['movieid'];
$result = mysqli_query($conn, $select);

mysqli_close($conn);
?>