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
    <style>
        /* The Modal (background) */
        .modal {
            position: fixed;
            z-index: 1;
            padding-top: 10px;
            /* Location of the box */
            left: 0;
            top: 0;
            overflow: auto;
            /* Enable scroll if needed */
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            text-decoration: none;
            cursor: pointer;
        }

        .img-modal {
            border: 2px solid #808080;
        }
    </style>

</head>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");

session_start();
unset($_SESSION['message']);

if ($_SESSION['account_id'] == '') {
    header('Location: /?nologin=true');
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();

    header('Location: /');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Location: movie-details.php/?movieid=' . $_POST["movie-select"]);
}

$select = "SELECT * FROM watch_history WHERE account_id=" . $_SESSION['account_id'];
$result = mysqli_query($conn, $select);
$values = mysqli_fetch_all($result);

?>

<body class="bg-fixed bg-cover font-instrument" style="background-image:url(/assets/Images/Image-Background.jpg)">
    <nav
        class="flex flex-row justify-between items-center px-24 py-12 h-20 w-full z-50 backdrop-blur-sm font-instrument text-white">
        <a href="#" class="text-5xl font-bold font-solitus active:text-current">
            cinehome.
        </a>
        <div class="flex flex-row space-x-12">
            <a href="/web/watch/home.php">Home</a>
            <p class="font-bold">Watch History</p>
            <a href="/web/user/profile.php">Your Profile</a>
            <a href="/web/user/customer-service.html?accessedfrom=watch-history">Contact us</a>
            <a href="?logout=true">Log out</a>
        </div>
    </nav>

    <div class="ml-8 mt-6 grid grid-cols-6">
        <?php
        for ($i = 0; $i < sizeof($values); $i++) {
            $select = "SELECT * FROM movie WHERE id=" . $values[$i][0];
            $result = mysqli_query($conn, $select);
            $details = mysqli_fetch_array($result);

            $dt_create = date_format(date_create($values[$i][5]), 'F d, Y');
            $dt_complete = date_format(date_create($values[$i][6]), 'F d, Y');
            ?>

            <div class="h-72 w-48 bg-cover bg-center group"
                onclick="openDetails('<?php echo $details['title'] ?>', '<?php echo $values[$i][3] ?>', '<?php echo $details['duration'] ?>', '<?php echo $dt_create ?>', '<?php echo $dt_complete ?>')"
                style="background-image: url('<?php echo $details['cover_location'] ?>')">
                <div class="h-full w-full flex flex-col justify-end items-start gap-x-1 transition-all bg-transparent group-hover:bg-gradient-to-b group-hover:opacity-100
                            from-transparent to-90% to-black p-6 text-white opacity-0">
                    <p class="font-bold">
                        <?php echo $details['title'] ?>
                    </p>
                    <p>
                        <?php echo $values[$i][3] ?>
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>

    <div id="details" class="modal w-screen h-screen hidden flex-col justify-center items-center backdrop-blur-sm">
        <div class="w-1/2 h-[576px] bg-black rounded-3xl relative">
            <span class="close m-8 absolute right-0" onclick="closeDetails()">&times;</span>
            <div class="m-12 flex flex-col gap-x-2">
                <div>
                    <span class="text-white">Title:</span>
                    <span class="title text-white"></span>
                </div>
                <div>
                    <span class="text-white">Elapsed Time:</span>
                    <span class="elapsed text-white"></span>
                </div>
                <div>
                    <span class="text-white">Runtime:</span>
                    <span class="runtime text-white"></span>
                </div>
                <div>
                    <span class="text-white">Purchase Date:</span>
                    <span class="purchase text-white"></span>
                </div>
                <div class="complete-span">
                    <span class="text-white">Completed Watch Date:</span>
                    <span class="complete text-white"></span>
                </div>
            </div>

        </div>
    </div>

    <script>
        const sleep = (ms) => new Promise((r) => setTimeout(r, ms));

        function openDetails(title, elapsed_time, duration, purchase_date, completed) {
            const modal = document.getElementById('details');

            modal.querySelector(".title").innerHTML = title;
            modal.querySelector(".elapsed").innerHTML = elapsed_time;
            modal.querySelector(".runtime").innerHTML = duration;
            modal.querySelector(".purchase").innerHTML = purchase_date;
            if(Date(completed) == Date('2020-01-01') ){
                modal.querySelector(".complete-span").classList.add('hidden');
            } else {
                modal.querySelector(".complete").innerHTML = completed;
            }

            modal.classList.add('flex');
            modal.classList.remove('hidden');
        }

        function closeDetails() {
            const modal = document.getElementById('details');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        eva.replace({
            fill: '#FFFFFF',
        });
    </script>
</body>

</html>