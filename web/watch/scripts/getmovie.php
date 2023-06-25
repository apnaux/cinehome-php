<?php

require($_SERVER["DOCUMENT_ROOT"]."/connection.php");
session_start();

$select = "SELECT * FROM movie WHERE id = " . $_GET["movieid"];
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_array($result);

$details = array('movie_id'=>$row['id'], 'movie_title'=>$row['title'], 'duration'=>$row['duration'], 'file_location'=>$row['file_location']);

echo json_encode($details);

mysqli_close($conn);
?>