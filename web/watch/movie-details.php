<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/index.css" rel="stylesheet">
    <link href="/assets/fonts.css" rel="stylesheet">
    <title>cinehome: The Home Theatre Experience</title>
</head>
<body class="bg-fixed bg-cover text-white" style="background-image:url(/assets/Images/header.jpg)">
    <?php 
        $movie = "";
        if(isset($_GET["movieid"])){
            $movie =  $_GET["movieid"];
        }
    ?>

    <!-- header -->

    <nav class="flex flex-row justify-between items-center px-24 py-12 h-20 w-full z-50 backdrop-blur-sm font-instrument
              text-white bg-gradient-to-b from-black from-40% to-transparent sticky top-0">
        <a href="#" class="text-5xl font-bold font-solitus active:text-current">
            cinehome.
        </a>
        <div class="flex flex-row space-x-12">
            <a href="/web/watch/home.php">Home</a>
            <a href="/web/watch/watch-history.php">Watch History</p>
            <a href="/web/user/profile.php">Your Profile</a>
            <a href="?logout=true">Log out</a>
        </div>

    </nav>

    <!-- Image container -->
        <div class="my-4 mx-8">
            <div class="h-72 w-full bg-cover bg-center rounded-lg"
                 style="background-image:url(/assets/Images/mock/two-bros.png)">
            </div>
        </div>
    
    <!-- Detail Container -->    

    
        <div class="mt-4 mx-8 text-left text-white">
            <p class="text-6xl font-solitus text-center">Two men chilling in a hot tub</p>
            <p class="text-6xl font-solitus">Overview</p>
            <p class="mt-6 text-xl font-instrument leading-none">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id dolor in nibh faucibus condimentum.
                    Donec non finibus mi. Nunc fermentum nisi at lorem tristique accumsan. Mauris eget rutrum justo,
                    a blandit est. Sed condimentum mattis facilisis. Ut eget diam eu felis posuere porttitor ac at magna.
                    Suspendisse convallis ut nisl hendrerit suscipit. Morbi risus nunc, mollis sed euismod sed, volutpat
                    ut felis.
            </p>
            <p class="text-6xl mt-12 font-solitus">Genre</p>
            <p class="mt-6 text-xl font-instrument leading-none">
                Comedy
            </p>
            <p class="text-6xl mt-12 font-solitus">Director</p>
            <p class="mt-6 text-xl font-instrument leading-none">
                Anthony Padilla
            </p>
            <p class="text-6xl mt-12 font-solitus">Notable Actors</p>
            <p class="mt-6 text-xl font-instrument leading-none">
                Ian Hecox <br>
                Shayne Topp
            </p>
            <p class="text-6xl mt-12 font-solitus">Runtime</p>
            <p class="mt-6 text-xl font-instrument leading-none">
                00:00:00
            </p>
            <p class="text-6xl mt-12 font-solitus">Available Until</p>
            <p class="mt-6 text-xl font-instrument leading-none">
                July 01, 2023
            </p>
        </div>
    
    <br>
    <a href="/web/watch/home.php">go back</a> <br>
    <a href="/web/watch/watch-movie.html?movieid=<?php echo $movie; ?>">watch movie</a> <br>
    <a href="/web/payments/pay.php">pay now</a>
</body>
</html>