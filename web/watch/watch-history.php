<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/index.css" rel="stylesheet">
    <link href="/assets/fonts.css" rel="stylesheet">
    <title>cinehome: The Home Theatre Experience</title>
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 10px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 95%;
            /* Full width */
            height: 95%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
        }

        /* Modal Content */
        .modal-content {
            background-color: #000000;
            margin: auto;
            padding: 20px;
            border: 1px solid #FFFFFF;
            width: 50%;
            height: 95%;
            align-content: justify;
            overflow: auto;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .img-modal {
            border: 2px solid #808080;
        }

        .search-bar {
      background-color: rgba(255, 255, 255, 0.5);
      border: none;
      width: 400px; /* Adjust the width as needed */
      display: flex;
      align-items: center;
      padding: 5px;
      border-radius: 20px;
    }

    .search-bar input[type="text"] {
      flex: 1;
      background-color: transparent;
      border: none;
      outline: none;
      padding: 5px;
    }

    .search-bar button {
      background-color: transparent;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }
    </style>

</head>

<body class="bg-fixed bg-cover" style="background-image:url(/assets/Images/Image-Background.jpg)">
    <nav class="flex flex-row justify-between items-center px-24 py-12 h-20 w-full z-50 backdrop-blur-sm font-instrument text-white">
        <a href="#" class="text-5xl font-bold font-solitus active:text-current">
            cinehome.
        </a>
        <div class="flex flex-row space-x-12">
            <a href="/web/watch/home.php">Home</a>
            <p class="font-bold">Watch History</p>
            <a href="/web/user/profile.php">Your Profile</a>
            <a href="?logout=true">Log out</a>
        </div>
    </nav>

    <!-- Search Button -->
    <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </div>


    <div class="ml-8 mt-6">
        <p class="text-5xl font-bold text-white font-instrument">
            June, 2023
        </p>
    </div>

    <div class="ml-8 mt-6 grid grid-cols-6">
        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/ManSpider-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: June 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="MS1_show_details">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/ManSpider-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>

                </div>

                </p>
            </div>
        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/ManSpider-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: June 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="MS2_show_details">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/ManSpider-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>

                </div>

                </p>
            </div>
        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/ManSpider-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: June 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="MS3_show_details">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/ManSpider-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>

                </div>

                </p>
            </div>
        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/ManSpider-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: June 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="MS4_show_details">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/ManSpider-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>

                </div>

                </p>
            </div>
        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/ManSpider-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: June 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="MS5_show_details">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/ManSpider-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>

                </div>

                </p>
            </div>
        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/ManSpider-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: June 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="MS6_show_details">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/ManSpider-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>

                </div>

                </p>
            </div>
        </div>

    </div>

    <div class="ml-8 mt-6">
        <p class="text-5xl font-bold text-white font-instrument">
            May, 2023
        </p>
    </div>

    <div class="ml-8 mt-6 grid grid-cols-6">
        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/EerieMovie-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0 ">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: May 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="show_details">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/EerieMovie-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>
                </div>

                </p>
            </div>

        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/EerieMovie-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: May 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="show_details_5">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/EerieMovie-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>
                </div>

                </p>
            </div>
        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/EerieMovie-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: May 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="show_details_4">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/EerieMovie-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>
                </div>

                </p>
            </div>
        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/EerieMovie-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: May 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="show_details_3">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/EerieMovie-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>
                </div>

                </p>
            </div>
        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('/assets/Images/Poster_Images/EerieMovie-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: May 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="show_details_2">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/EerieMovie-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>
                </div>

                </p>
            </div>
        </div>

        <div class="h-72 w-48 bg-cover bg-center group"
            style="background-image: url('assets/Images/Poster_Images/EerieMovie-Poster.jpg')">
            <div class="h-full w-full group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white font-bold text-lg
                            font-instrument opacity-0">
                <p class="text-center align-bottom">
                    Lorem Ipsum dolor amet

                    <br>
                    <br>

                    Date Watched: May 01, 2023

                    <br>
                    <br>

                    <button class="underline hover:underline-offset-4" id="show_details_1">View Details</button>

                <div id="Details" class="modal">

                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <center>
                            <img class="img-modal" src="/assets/Images/Poster_Images/EerieMovie-Poster.jpg" height="288"
                                width="192">
                        </center>

                        <div class="ml-8 mt-6 grid grid-flow-row auto-rows-max gap-4">
                            <div>
                                <p class="font-solitus text-white">Title: Lorem Ipsum</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Runtime: 00:00:00</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Purchase Date: June 01, 2023</p>
                            </div>
                            <div>
                                <p class="font-solitus text-white">Completed Watch Date: June 01,2023</p>
                            </div>
                        </div>

                    </div>
                </div>

                </p>
            </div>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("MS1_show_details");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Second Button */

        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("MS2_show_details");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Third Button */

        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("MS3_show_details");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Fourth Button */

        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("MS4_show_details");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Fifth Button */

        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("MS5_show_details");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Sixth Button */
        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("MS6_show_details");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* First Button */

        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("show_details");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Second Button */

        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("show_details_1");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Third Button */

        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("show_details_2");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Fourth Button */

        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("show_details_3");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Fifth Button */

        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("show_details_4");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        /* Sixth Button */
        // Get the modal
        var modal = document.getElementById("Details");

        // Get the button that opens the modal
        var btn = document.getElementById("show_details_5");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>