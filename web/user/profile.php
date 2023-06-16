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

<body class="flex flex-col bg-fixed bg-cover select-none text-white font-instrument"
    style="background-image: url('/assets/images/mock/profile_header.jpg');">
    <nav class="fixed flex flex-row justify-between items-center px-24 py-12 h-20 w-full z-50 backdrop-blur-sm">
        <a href="#" class="text-5xl font-bold font-solitus active:text-current">
            cinehome.
        </a>
        <div class="flex flex-row space-x-12">
            <a href="">Home</a>
            <a href="">Watch History</a>
            <p class="font-bold">Your Profile</p>
            <a href="">Log out</a>
        </div>
    </nav>

    <div
        class="w-screen min-h-screen flex flex-col justify-center items-center py-12 px-72 bg-gradient-to-b from-transparent to-black backdrop-contrast-150 gap-y-8">
        <div
            class="backdrop-blur-2xl backdrop-contrast-50 rounded-3xl w-full h-[348px] flex flex-row justify-start items-center gap-x-12 overflow-hidden">
            <img src="/assets/images/mock/user/user.jpg" alt="a person" class="object-cover h-full">
            <div class="flex flex-col items-start justify-between h-full py-12">
                <div class="flex flex-col gap-y-2">
                    <h1 class="font-bold text-4xl">
                        Alisa Rand
                    </h1>
                    <p>
                        2065 North Social Way, Santa Fe, New Mexico, 35440
                    </p>
                </div>

                <div class="flex flex-col">
                    <p>
                        Date Joined
                    </p>
                    <h1 class="font-bold text-2xl">
                        December 31, 2014
                    </h1>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col justify-start items-start gap-y-4">
            <h1 class="font-bold text-2xl">
                Modify user credentials:
            </h1>

            <div class="w-full h-[1px] bg-white"></div>

            <form action="" method="post" class="flex flex-col justify-start items-start gap-y-4">
                <label for="username"
                    class="flex flex-row backdrop-blur-2xl backdrop-contrast-50 rounded-xl h-12 w-96 overflow-hidden">
                    <div class="px-4 flex flex-col items-center justify-center">
                        <i data-eva="email-outline" class="w-8"></i>
                    </div>

                    <input type="text" name="username" id="username" placeholder="New Username"
                        class="bg-transparent h-full focus:outline-none flex-grow">
                </label>

                <label for="password"
                    class="flex flex-row backdrop-blur-2xl backdrop-contrast-50 rounded-xl h-12 w-96 overflow-hidden">
                    <div class="px-4 flex flex-col items-center justify-center">
                        <i data-eva="lock-outline" class="w-8"></i>
                    </div>

                    <input type="password" name="password" id="password" placeholder="New Password"
                        class="bg-transparent h-full focus:outline-none flex-grow">
                </label>

                <button type="submit"
                    class="py-2 px-3 backdrop-blur-2xl backdrop-contrast-50 rounded-lg border font-medium transition hover:scale-110 active:scale-95 active:backdrop-contrast-0">
                    Change Credentials
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer
        class="flex flex-row px-28 py-12 w-full justify-between items-center font-instrument bg-gradient-to-b from-black from-90% to-transparent">
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