<?php
require 'partials\navbar.php'; ?>


<main class="max-w-[85rem] mt-20 px-4 py-4 sm:px-6 lg:px-8 lg:py-14 mx-auto">

    <!-- search bar -->
    <div class="sm:w-full  mx-auto text-center mb-6 md:mb-12">
        <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
        <div class="flex rounded-xl shadow-sm">
            <input type="text" id="hs-trailing-button-add-on-with-icon" name="hs-trailing-button-add-on-with-icon" class="py-3 px-4 block w-full text-black border-gray-200 shadow-sm rounded-l-md bg-white text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 ">
            <button type="button" class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] rounded-r-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all text-sm">
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </div>
    </div>
    <!-- end search bar -->


    <!-- Grid -->
    <div class="grid grid-cols-2  sm:grid-cols-4 md:grid-cols-5 gap-3 lg:gap-10">

        <?php foreach ($results as $book) : ?>
            <div class=" flex flex-col justify-between items-center rounded-xl gap-2 cursor-pointer ">
                <div class="relative w-full  h-full hover:scale-[1.025] transition-all duration-300 ease-in-out">
                    <img class="  object-fill w-full h-full rounded-xl" src="https://m.media-amazon.com/images/I/51B7kuFwQFL._SY291_BO1,204,203,200_QL40_FMwebp_.jpg" alt="">
                    <div class="absolute inset-0 w-full  h-full rounded-xl transition-all duration-300 ease-in-out hover:ring-4 ring-blue-600    "></div>
                </div>
                <div class=" w-full ">
                    <a href="/Bookverse/book?id=<?= $book["id"] ?>" class=" font-bold text-gray-300 text-lg text-start "><?= $book["title"] ?></a>
                </div>
            </div>
        <?php endforeach ?>

    </div>
    <!-- End Grid -->


</main>

<?php

require 'partials\footer.php'
?>