<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/index.css" rel="stylesheet">
    <link href="/public/fonts.css" rel="stylesheet">
    <style>
    </style>
    <title>cinehome: The Home Theatre Experience</title>
</head>

<body class="bg-black flex flex-col">
    <nav
        class="fixed flex flex-row justify-between items-center px-24 py-12 h-20 w-full bg-gradient-to-b from-black text-white from-20% z-50">
        <a href="#" class="text-5xl font-bold font-solitus active:text-current">
            cinehome.
        </a>
        <div class="flex flex-row space-x-12 font-instrument">
            <a href="#features">Features</a>
            <a href="#now-showing" class="active:text-current">Now Showing</a>
            <a href="">Log in / Sign up</a>
        </div>
    </nav>

    <header class="h-screen w-full bg-red-950 relative">
        <div
            class="absolute top-0 w-full h-full z-20 flex flex-col m-auto justify-center items-center space-y-6 bg-gradient-to-b from-transparent from-80% to-black">
            <h1 class="font-instrument font-bold text-7xl text-center text-white">
                Experience the big screen <br>
                right in the comfort of your home!
            </h1>
            <p class="text-white font-instrument text-center">
                No need to worry about not being able to watch movies from the cinema. <br>
                Watch the same movies being shown there right here, and right now!
            </p>
            <button type="button"
                class="py-2 px-3 bg-red-700 rounded-lg border border-red-300 font-instrument text-white font-medium transition hover:scale-110 hover:border-red-700 active:scale-95 active:bg-red-900">
                Sign up now!
            </button>
        </div>
        <img src="/public/images/header.jpg" alt="an image of a cinema"
            class="w-full h-full object-cover relative z-10 brightness-75">
    </header>

    <!-- Features -->
    <div class="flex flex-row justify-center items-center gap-x-12 w-full h-screen font-instrument text-white" id="features">
        <div
            class="flex flex-col justify-start items-center h-[672px] w-[468px] rounded-3xl overflow-hidden bg-red-700/50 backdrop-blur-sm shadow-2xl shadow-red-600/40 gap-y-12">
            <picture class="w-full">
                <img src="/public/images/homepage/watching-something.jpg" alt="a person watching a movie">
            </picture>

            <div class="flex flex-col gap-y-4 px-12">
                <h1 class="text-4xl font-bold">
                    Cinema anywhere? we gotchu!
                </h1>
                <p>
                    Access the catalog of cinemas here in the Philippines anywhere you want whether it be
                    your house or during a roadtrip! Cinehome is right in your fingertips.
                </p>
            </div>
        </div>

        <div
            class="flex flex-col justify-start items-center h-[672px] w-[468px] rounded-3xl overflow-hidden bg-red-700/50 backdrop-blur-sm shadow-2xl shadow-red-600/40 gap-y-12">
            <picture class="w-full">
                <img src="/public/images/homepage/paying.jpg" alt="a person watching a movie">
            </picture>

            <div class="flex flex-col gap-y-4 px-12">
                <h1 class="text-4xl font-bold">
                    Pay as you go, just like the cinemas!
                </h1>
                <p>
                    No subscription fees, no hidden fees, and no other shit. Just pay for the movie you want and
                    play it however you want.
                </p>
            </div>
        </div>

        <div
            class="flex flex-col justify-start items-center h-[672px] w-[468px] rounded-3xl overflow-hidden bg-red-700/50 backdrop-blur-sm shadow-2xl shadow-red-600/40 gap-y-12">
            <picture class="w-full">
                <img src="/public/images/homepage/watch-history.jpg" alt="a person watching a movie">
            </picture>

            <div class="flex flex-col gap-y-4 px-12">
                <h1 class="text-4xl font-bold">
                    Access your watch history!
                </h1>
                <p>
                    Want to recommend a movie but you don't remember the movie that you watched?
                    No worries, cinehome lists all the movies you watched so you can recall them anytime!
                </p>
            </div>
        </div>
    </div>

    <!-- Now Showing -->
    <div class="h-auto w-full bg-gradient-to-b from-black via-red-950 to-black" id="now-showing">
        <div class="flex flex-col gap-y-6 scale-95">
            <button type="button"
                class="text-left text-white font-instrument h-[720px] w-full relative overflow-clip bg-red-950 group transition active:scale-95 rounded-2xl">
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
                        <h2 class="font-bold text-6xl p-4 bg-red-900">
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
                <img src="/public/images/mock/two-bros.png" alt="two bros chilling"
                    class="absolute top-0 w-full h-full object-cover brightness-75 z-10 transition group-hover:brightness-50">
            </button>

            <div class="flex flex-row gap-x-6">
                <button type="button"
                    class="text-left text-white font-instrument h-[720px] w-full relative overflow-clip bg-red-950 group transition active:scale-95 rounded-2xl">
                    <div
                        class="p-16 w-full h-full flex flex-col items-start justify-between z-20 relative transition group-hover:scale-90">
                        <h1 class="font-bold text-8xl opacity-0 transition group-hover:opacity-100">
                            Watch <br>
                            now!
                        </h1>
                        <div class="flex flex-col items-start space-y-4 w-full">
                            <h2 class="font-bold text-6xl p-4 bg-red-900">
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
                    <img src="/public/images/mock/two-bros.png" alt="two bros chilling"
                        class="absolute top-0 w-full brightness-75 z-10 transition group-hover:brightness-50">
                </button>

                <button type="button"
                    class="text-left text-white font-instrument h-[720px] w-full relative overflow-clip bg-red-950 group transition active:scale-95 rounded-2xl">
                    <div
                        class="p-16 w-full h-full flex flex-col items-start justify-between z-20 relative transition group-hover:scale-90">
                        <h1 class="font-bold text-8xl opacity-0 transition group-hover:opacity-100">
                            Watch <br>
                            now!
                        </h1>
                        <div class="flex flex-col items-start space-y-4 w-full">
                            <h2 class="font-bold text-6xl p-4 bg-red-900">
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
                    <img src="/public/images/mock/two-bros.png" alt="two bros chilling"
                        class="absolute top-0 w-full brightness-75 z-10 transition group-hover:brightness-50">
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="">

    </div>
</body>

</html>