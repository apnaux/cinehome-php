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

<body class="bg-red-950 flex flex-col">
    <nav
        class="fixed flex flex-row justify-between items-center px-8 h-20 w-full bg-gradient-to-b from-black text-white from-20% z-50">
        <a href="#" class="text-5xl font-bold font-solitus active:text-current">
            cinehome.
        </a>
        <div class="flex flex-row space-x-12 font-instrument">
            <a href="#now-showing" class="active:text-current">Now Showing</a>
            <p>Coming Soon</p>
            <p>FAQ</p>
            <p>Log in / Sign up</p>
        </div>
    </nav>

    <header class="h-screen w-full bg-red-950 relative">
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
            <div class="flex flex-col m-auto justify-start items-center space-y-6">
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
        </div>
        <img src="/public/images/header.jpg" alt="an image of a cinema"
            class="w-full h-full object-cover relative z-10 brightness-75">
    </header>

    <!-- Now Showing -->
    <div class="flex flex-col w-full bg-red-950" id="now-showing">
        <button type="button"
            class="text-left text-white font-instrument h-[720px] w-full relative overflow-clip bg-red-950 group transition active:scale-95 active:rounded-2xl">
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
                class="absolute top-0 w-full brightness-75 z-10 transition group-hover:brightness-50">
        </button>

        <div class="flex flex-row h-[562px]">
            <button type="button"
                class="text-left text-white font-instrument h-[720px] w-full relative overflow-clip bg-red-950 group transition active:scale-95 active:rounded-2xl">
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
                class="text-left text-white font-instrument h-[720px] w-full relative overflow-clip bg-red-950 group transition active:scale-95 active:rounded-2xl">
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

    <!-- Coming soon -->
    <div class="flex flex-row">

    </div>

    <!-- FAQs -->
    <div class="flex flex-row">

    </div>

    <!-- Footer -->
    <div class="">

    </div>
</body>

</html>