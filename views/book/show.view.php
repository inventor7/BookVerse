<?php
require 'views/partials/navbar.php'; ?>
?>

<main class=" mt-24  flex flex-col justify-center items-center w-full px-10 py-10">
    <a href="/Bookverse/books" class=" self-start flex flex-row  px-2 py-0.5 bg-blue-700/40 backdrop-blur-lg rounded-xl w-fit gap-2 ">
        <span class="material-symbols-outlined text-lg hover:text-blue-600">
            arrow_back_ios_new
        </span>
        <p class="text-white text-lg hover:text-blue-600 " >Back</p>
    </a>
    <div class=" flex flex-row justify-start items-start w-full h-[70vh]  py-4 gap-10 ">
        <div class="w-1/5 h-full  ">
            <img class=" w-full h-full rounded-xl" src="https://m.media-amazon.com/images/I/51B7kuFwQFL._SY291_BO1,204,203,200_QL40_FMwebp_.jpg" alt="">
        </div>
        <div class=" w-4/5 py-8 ">
            <h1 class=" text-5xl text-white font-bold "><?= $book["title"] ?></h1>
            <h2 class=" text-2xl text-slate-400 font-bold pt-2 ">By James Clare</h1>
                <h2 class="text-2xl text-white font-semibold pt-4">Description</h2>
                <p class=" text-sm  ">No matter your goals, Atomic Habits offers a proven framework for improving--every day. James Clear, one of the world's leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.
                    If you're having trouble changing your habits, the problem isn't you. The problem is your system. Bad habits repeat themselves again and again not because you don't want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you'll get a proven system that can take you to new heights.
                    Clear is known for his ability to distill complex topics into simple behaviors that can be easily applied to daily life and work. Here, he draws on the most proven ideas from biology, psychology, and neuroscience to create an easy-to-understand guide for making good habits inevitable and bad habits impossible. Along the way, readers will be inspired and entertained with true stories from Olympic gold medalists, award-winning artists, business leaders, life-saving physicians, and star comedians who have used the science of small habits to master their craft and vault to the top of their field.
                </p>
        </div>
    </div>
</main>



<?php
require 'views/partials/footer.php'; ?>
?>