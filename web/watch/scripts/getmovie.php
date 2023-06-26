<?php

require($_SERVER["DOCUMENT_ROOT"]."/connection.php");
session_start();

$select = "SELECT * FROM movie WHERE id = " . $_POST["movieid"];
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_array($result);

$details = array('movie_id'=>$row['id'], 'movie_title'=>$row['title'], 'duration'=>$row['duration'], 'file_location'=>$row['file_location']);


$select = "SELECT * FROM watch_history WHERE movie_id = ". $_POST["movieid"] ." and account_id=". $_SESSION["account_id"];
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_array($result);

$details['elapsed_time'] = $row['elapsed_time'];
$details['completion_date'] = $row['completion_date'];

header('Accept-Ranges: bytes');
echo json_encode($details);

mysqli_close($conn);
?>