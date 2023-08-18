<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/0d88df16c5.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>

<body class="font">
    <header>
        <menu>
            <nav class="bg-blue-500 absolute left-0 text-gray-100 h-screen flex flex-col items-center justify-between py-4 w-12 sm:w-auto">
                    <a href="/"><img src="public/img/logo.png" alt="Logo WeathrLink" class="w-[80px] sm:w-[100px] mb-32 opacity-[0.65]"></a>
                    <ul class="flex flex-col mb-40 text-xl gap-2">
                    <li><a href="#" class="flex items-center gap-2 sm:hover:px-6 sm:hover:bg-blue-600 sm:hover:py-2 sm:hover:rounded mx-12 sm:mx-0 sm:px-10 h-10 sm:w-[300px]"><i class="fa-solid fa-house"></i><span class="hidden sm:block">Accueil</span></a></li>
                    <li class="relative group">
                        <a href="#" id="meteo" class="flex items-center gap-2 sm:hover:px-6 sm:hover:bg-blue-600 sm:hover:py-2 sm:hover:rounded mx-12 sm:mx-0 sm:px-10 h-10 sm:w-[300px]"><i id="icon-meteo" class="fa-solid fa-sun h-5"></i><span class="mr-28 hidden sm:block">Météo</span><span class="hidden sm:block"><i id="icon" class="fa-solid fa-chevron-down fa-rotate-270"></i></span></a>
                        <ul id="sousMenu" class="opacity-0 invisible space-y-2 transition transition-all ease-in-out h-0 items-center flex flex-col">
                            <li><a href="#" class="flex gap-2 items-center sm:hover:bg-blue-600 sm:px-8 py-2 mx-1 sm:mx-12 hover:rounded"><i class="fa-solid fa-mobile-screen-button"></i><span class="hidden sm:block">iPhone</span></a></li>
                            <li><a href="#" class="flex gap-2 items-center sm:hover:bg-blue-600 sm:px-8 py-2 mx-1 sm:mx-12 hover:rounded"><i class="fa-solid fa-cloud"></i><span class="hidden sm:block">France</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="flex items-center gap-2 sm:hover:px-6 sm:hover:bg-blue-600 sm:hover:py-2 sm:hover:rounded mx-12 sm:mx-0 sm:px-10 h-10 sm:w-[300px]"><i class="fa-solid fa-address-book"></i><span class="hidden sm:block">Contact</span></a></li>
                </ul>
                <ul class="flex flex-col sm:flex-row gap-4 text-2xl">
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </nav>
        </menu>
    </header>
</body>

</html>