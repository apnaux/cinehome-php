<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/eva-icons"></script>
    <link href="/assets/index.css" rel="stylesheet">
    <link href="/assets/fonts.css" rel="stylesheet">
    <title>cinehome: Your Profile</title>
</head>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/connection.php");

$email = '';

session_start();

if ($_SESSION['user_name'] == '') {
    header('Location: /?nologin=true');
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();

    header('Location: /');
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    header('Location: movie-details.php/?movieid=' . $_POST["movie-select"]);
}
?>

<body
    class="flex flex-col bg-gradient-to-r from-blue-300 via-violet-400 to-red-300 select-none text-white font-instrument relative">
    <img src="/assets/images/mock/profile_header.jpg" alt="bg-image" class="object-cover z-0 fixed">
    <nav class="fixed flex flex-row justify-between items-center px-24 py-12 h-20 w-full z-50 backdrop-blur-sm">
        <a href="#" class="text-5xl font-bold font-solitus active:text-current">
            cinehome.
        </a>
        <div class="flex flex-row space-x-12">
            <p class="font-bold">Home</p>
            <a href="/web/watch/watch-history.php">Watch History</a>
            <a href="/web/user/profile.php">Your Profile</a>
            <a href="?logout=true">Log out</a>
        </div>
    </nav>

    <div class="w-full h-20 backdrop-contrast-150 px-24 py-12"></div>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"
        class="w-screen bg-gradient-to-b from-transparent from-0% to-black to-20% backdrop-contrast-150 z-10">
        <div class="flex flex-col gap-y-6 scale-95">
            <button type="submit" value="<?php echo '1'; ?>" name="movie-select"
                class="text-left text-white font-instrument h-[720px] w-full relative overflow-clip bg-cyan-900 group transition active:scale-95 rounded-2xl">
                <div
                    class="flex flex-col justify-center items-end space-y-4 z-30 absolute h-full w-1/2 right-0 bg-gradient-to-l from-black from-20% transition opacity-0 group-hover:opacity-100">
                    <h1 class="text-6xl font-instrument font-medium mx-auto">
                        Watch now!
                    </h1>
                    <p class="mx-auto">
                        Available 'til May 26!
                    </p>
                </div>
                <div
                    class="p-16 w-full h-full flex flex-col items-start justify-between z-20 relative transition group-hover:scale-90">
                    <h1 class="font-bold text-8xl">
                        Now <br>
                        Showing.
                    </h1>

                    <div class="flex flex-col items-start space-y-4 w-full">
                        <h2 class="font-bold text-6xl p-4 bg-cyan-700">
                            01
                        </h2>
                        <p class="font-bold text-6xl">
                            Two bros chilling <br>
                            in the hot tub~
                        </p>
                        <p class="font-instrument">
                            five feet apart 'cause they're not gay
                        </p>
                    </div>
                </div>
                <img src="/assets/images/mock/two-bros.png" alt="two bros chilling"
                    class="absolute top-0 w-full h-full object-cover brightness-75 z-10 transition group-hover:brightness-50">
            </button>

            <div class="flex flex-row gap-x-6">
                <button type="submit" value="<?php echo '2'; ?>" name="movie-select"
                    class="text-left text-white font-instrument h-[720px] w-full relative overflow-clip bg-cyan-900 group transition active:scale-95 rounded-2xl">
                    <div
                        class="p-16 w-full h-full flex flex-col items-start justify-between z-20 relative transition group-hover:scale-90">
                        <h1 class="font-bold text-8xl opacity-0 transition group-hover:opacity-100">
                            Watch <br>
                            now!
                        </h1>
                        <div class="flex flex-col items-start space-y-4 w-full">
                            <h2 class="font-bold text-6xl p-4 bg-cyan-700">
                                02
                            </h2>
                            <p class="font-bold text-6xl">
                                Two bros chilling <br>
                                in the hot tub~
                            </p>
                            <p class="font-instrument">
                                five feet apart 'cause they're not gay
                            </p>
                        </div>
                    </div>
                    <img src="/assets/images/mock/two-bros.png" alt="two bros chilling"
                        class="absolute top-0 w-full brightness-75 z-10 transition group-hover:brightness-50">
                </button>

                <button type="submit" value="<?php echo '3'; ?>" name="movie-select"
                    class="text-left text-white font-instrument h-[720px] w-full relative overflow-clip bg-cyan-900 group transition active:scale-95 rounded-2xl">
                    <div
                        class="p-16 w-full h-full flex flex-col items-start justify-between z-20 relative transition group-hover:scale-90">
                        <h1 class="font-bold text-8xl opacity-0 transition group-hover:opacity-100">
                            Watch <br>
                            now!
                        </h1>
                        <div class="flex flex-col items-start space-y-4 w-full">
                            <h2 class="font-bold text-6xl p-4 bg-cyan-700">
                                03
                            </h2>
                            <p class="font-bold text-6xl">
                                Two bros chilling <br>
                                in the hot tub~
                            </p>
                            <p class="font-instrument">
                                five feet apart 'cause they're not gay
                            </p>
                        </div>
                    </div>
                    <img src="/assets/images/mock/two-bros.png" alt="two bros chilling"
                        class="absolute top-0 w-full brightness-75 z-10 transition group-hover:brightness-50">
                </button>
            </div>
        </div>
    </form>

    <!-- Footer -->
    <footer
        class="flex flex-row px-28 py-12 w-full justify-between items-center font-instrument bg-gradient-to-b from-black from-90% to-transparent z-10">
        <div class="flex flex-col justify-between items-start h-full gap-y-12">
            <div class="flex flex-col justify-start items-start text-white leading-tight">
                <h1 class="font-solitus text-7xl">cinehome</h1>
                <p>the home theatre experience.</p>
            </div>

            <div class="flex flex-row items-start gap-x-4">
                <i data-eva="facebook"></i>
                <i data-eva="twitter"></i>
            </div>

            <div class="flex flex-col justify-start items-start gap-y-2 text-white font-instrument leading-tight">
                <div class="flex flex-row gap-x-2">
                    <i data-eva="phone-call"></i>
                    <p>099 9998 999</p>
                </div>

                <div class="flex flex-row gap-x-2">
                    <i data-eva="email"></i>
                    <p>hello@cinehome.com</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-between items-end h-full">
            <!-- Payment Methods -->
        </div>
    </footer>

    <script>
        eva.replace({
            fill: '#FFFFFF',
        });
    </script>
</body>

</html>