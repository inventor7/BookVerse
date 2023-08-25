<?php
view('/partials/header', ['page' => 'Book']);
view('/partials/nav', ['page' => 'Book']);
?>

<main class=" mt-24  flex flex-col justify-center items-center w-full px-10 py-10">
    <a href="/books" class=" self-start flex flex-row  px-2 py-0.5 bg-blue-700/40 backdrop-blur-lg rounded-xl w-fit gap-2 ">
        <span class="material-symbols-outlined text-lg hover:text-blue-600">
            arrow_back_ios_new
        </span>
        <p class="text-white text-lg hover:text-blue-600 ">Back</p>
    </a>
    <div class=" flex flex-row justify-start items-start w-full h-[70vh]  py-4 gap-10 ">
        <div class="w-1/5 h-full  ">
            <img class=" w-full h-full rounded-xl" src="https://m.media-amazon.com/images/I/51B7kuFwQFL._SY291_BO1,204,203,200_QL40_FMwebp_.jpg" alt="">
        </div>
        <div class="w-4/5 py-8 ">
            <h1 class=" text-5xl text-white font-bold "><?= $book["title"] ?></h1>
            <h2 class=" text-2xl text-slate-400 font-bold pt-2 ">By James Clare</h1>
                <h2 class="text-2xl text-white font-semibold pt-4">Description</h2>
                <p class=" text-sm  "><?= $book["description"] ?></p>
                <div class="flex-1 modif flex flex-row justify-start items-center gap-4 mt-10 ">

                    <a href="/book/edit?id=<?= $book["id"] ?>" class="px-4 py-1.5 rounded-lg bg-blue-600 text-white">Edit</a>

                    <form method="POST" action="/book">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?= $book["id"] ?>">
                        <button class="px-4 py-1.5 rounded-lg bg-red-600 text-white">Delete</button>
                    </form>
                </div>
        </div>
    </div>
</main>



<?php
view('partials/footer');
?>