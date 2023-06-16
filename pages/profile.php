<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/eva-icons"></script>
    <link href="/public/index.css" rel="stylesheet">
    <link href="/public/fonts.css" rel="stylesheet">
    <title>cinehome: Your Profile</title>
</head>

<body class="flex flex-col bg-cover" style="background-image: url('../public/images/mock/profile_header.jpg');">
    <nav
        class="fixed flex flex-row justify-between items-center px-24 py-12 h-20 w-full bg-gradient-to-b from-black text-white from-20% z-50">
        <a href="#" class="text-5xl font-bold font-solitus active:text-current">
            cinehome.
        </a>
        <div class="flex flex-row space-x-12 font-instrument">
            <a href="">Home</a>
            <a href="">Watch History</a>
            <p class="font-bold">Your Profile</p>
            <a href="">Log out</a>
        </div>
    </nav>

    <script>
        eva.replace({
            fill: '#FFFFFF',
        });
    </script>
</body>

</html>