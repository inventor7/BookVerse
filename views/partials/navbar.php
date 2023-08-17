<?php $homeUrl = "/Bookverse"; ?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- tailwind and daisyUi -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- Icon -->
    <link rel="icon" href="./../assets/logo.png">
    <title>BookVerse</title>
</head>

<body style="font-family: 'Poppins', sans-serif; ">

    <nav class="fixed inset-0 h-12 sm:h-16 z-10 backdrop-blur-lg bg-blue-950/40 flex flex-row justify-between items-center gap-4  rounded-full px-1 sm:px-3 py-1 sm:py-2  mt-4 mx-2 sm:mx-8 ">
        <div class="left ">
            <a href="/Bookverse">
                <img class="rounded-full h-10 w-10 sm:h-14 sm:w-14" src="./assets/logo.png" alt="logo" class="logo">
            </a>
        </div>

        <!-- only in small devices -->
        <div class=" logo flex sm:hidden  ">
            <a href="/" class=" text-xl text-blue-600 font-bold">BookVerse</a>
        </div>

        <div class="mid hidden  flex-1 sm:flex flex-col items-center text-lg text-white ">
            <ul class=" flex flex-row justify-between items-center w-2/3 xl:w-1/2 ">
                <li><a class=" <?= navigationStyle("/Bookverse/") ?> px-4 py-2  rounded-lg  transition-all ease-in-out duration-200" href="<?= $homeUrl ?>/">Home</a></li>
                <li><a class=" <?= navigationStyle("/Bookverse/books") ?> px-4 py-2 rounded-lg  transition-all ease-in-out duration-200" href="<?= $homeUrl ?>/books">Books</a></li>
                <li><a class=" <?= navigationStyle("/Bookverse/about") ?> px-4 py-2 rounded-lg  transition-all ease-in-out duration-200" href="<?= $homeUrl ?>/about">About</a></li>
                <li><a class=" <?= navigationStyle("/Bookverse/authors") ?> px-4 py-2 rounded-lg  transition-all ease-in-out duration-200" href="<?= $homeUrl ?>/authors">Authors</a></li>
            </ul>
        </div>

        <div class="right">
            <ul class="flex flex-row justify-between items-center gap-8 ">
                <li class="avatar">
                    <a class=" h-8 w-8 sm:w-12 sm:h-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2" href="#">
                        <img class="rounded-full" src="./assets/avatar.jpg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </nav>