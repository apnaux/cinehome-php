<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/eva-icons"></script>
    <link href="/assets/index.css" rel="stylesheet">
    <link href="/assets/fonts.css" rel="stylesheet">
    <title>cinehome: The Home Theatre Experience</title>
</head>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");

session_start();
unset($_SESSION['message']);

$select = "SELECT * FROM movie WHERE id=" . $_GET["movieid"];
$result = mysqli_query($conn, $select);
$movie_details = mysqli_fetch_array($result);

$select = "SELECT * FROM watch_history WHERE movie_id=". $_GET["movieid"] ." and account_id=" . $_SESSION['account_id'];
$result = mysqli_query($conn, $select);
$watch_history = mysqli_fetch_array($result);

$select = "SELECT actor.actor_name FROM movie_actors INNER JOIN actor ON movie_actors.actor_id = actor.id WHERE movie_actors.movie_id=". $_GET["movieid"];
$result = mysqli_query($conn, $select);
$movie_actors = mysqli_fetch_all($result);

mysqli_close($conn);
?>
<body class="bg-fixed bg-cover text-white font-instrument" style="background-image:url('<?php echo $movie_details['cover_location'] ?>')">
    <nav class="fixed flex flex-row justify-start items-center px-24 py-12 h-20 w-full gap-x-4 z-50 backdrop-blur-sm">
        <a onclick="goBack()" class="group">
            <i data-eva="arrow-ios-back-outline" data-eva-height="32" data-eva-width="32"></i>
        </a>
    </nav>
    <div class="z-40 absolute bottom-0 w-full h-[576px] px-48 pt-20 flex flex-row justify-between items-start bg-gradient-to-t from-black from-70% to-transparent">
        <div class="flex flex-col gap-y-2 w-[862px]">
            <h1 class="text-3xl font-bold"><?php echo $movie_details['title']; ?></h1>
            <h3 class="text-xl"><?php echo $movie_details['publisher']; ?></h1>
            <h3 class="text-lg"><?php echo $movie_details['genre']; ?></h1>
            <p>Actors: 
                <?php 
                    for($i = 0; $i < sizeof($movie_actors); $i++){
                        echo $movie_actors[$i][0];
                        if($movie_actors[sizeof($movie_actors) - 1][0] != $movie_actors[$i][0]){
                            echo ', ';
                        }
                    }
                 ?>
            </p>

            <p><?php echo $movie_details['details']; ?></p>
        </div>

        <div class="flex flex-col items-end gap-y-8">
            <div class="flex flex-col items-end">
                <h1 class="text-3xl font-bold">PHP 150</h1>
                <p>Available until <?php echo date_format(date_create($movie_details['available_until']), 'F d, Y') ?>!</p>
            </div>
            <?php if(empty($watch_history)) { ?>
                <button type="button" onclick="payforMovie()" class="flex flex-row justify-center items-center w-64 h-16 bg-red-700 rounded-lg border border-red-300 font-instrument text-white font-medium transition hover:scale-110 hover:border-red-700 active:scale-95 active:bg-red-900">
                    Pay now!
                </button>
            <?php } else { ?>
                <button type="button" onclick="watchMovie()" class="flex flex-row justify-center items-center w-64 h-16 bg-red-700 rounded-lg border border-red-300 font-instrument text-white font-medium transition hover:scale-110 hover:border-red-700 active:scale-95 active:bg-red-900">
                    Watch now!
                </button>
            <?php } ?>
        </div>
    </div>

    <script>
        function goBack(){
            window.location.href = '/web/watch/home.php';
        }

        function watchMovie(){
            const param = new URLSearchParams(new URL(window.location.href).search);
            movie = param.get('movieid');

            window.location.href = '/web/watch/watch-movie.html?movieid=' + movie;
        }

        function payforMovie(){
            const param = new URLSearchParams(new URL(window.location.href).search);
            movie = param.get('movieid');

            window.location.href = '/web/payments/pay.php?movieid=' + movie;
        }
        
        eva.replace({
            fill: '#FFFFFF',
        });
    </script>
</body>
</html>