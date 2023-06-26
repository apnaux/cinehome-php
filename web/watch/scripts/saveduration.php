<?php

require($_SERVER["DOCUMENT_ROOT"]."/connection.php");
session_start();

$hours = (int)($_POST['currenttime'] / 3600);
$mins = (int)($_POST['currenttime'] / 60 % 60);
$secs = (int)($_POST['currenttime'] % 60);

$timeFormat = sprintf('%02d:%02d:%02d', $hours, $mins, $secs);

$select = "update watch_history set elapsed_time='" . $timeFormat . "' where account_id=" . $_SESSION['account_id'] . " and movie_id=". $_POST['movieid'];
$result = mysqli_query($conn, $select);

mysqli_close($conn);
?>