<?php
view('/partials/header', ['page' => 'Book']);
view('/partials/nav', ['page' => 'Book']);

?>
<main class="h-full mt-24 px-10 w-full flex flex-col justify-center items-center">
    <div class=" grid grid-cols-4 gap-x-4 gap-y-8 w-full h-full  ">

        <?php foreach($authors as $author): ?>
        <div
            class="flex flex-row justify-start items-start w-full bg-blue-900/30 rounded-xl border-gray-500 border-2 p-2 gap-2 ">
            <div class=" w-32 h-32 rounded-full  " >
                <img class=" rounded-2xl  "
                    src="https://images.pexels.com/photos/5384445/pexels-photo-5384445.jpeg?auto=compress&cs=tinysrgb&w=1260&h=1260&dpr=1"
                    alt="no fkng img">

            </div>
            <div class=" flex flex-col justify-start items-start gap-2 w-full h-full ">
                <h1 class=" text-xl font-bold text-white">
                    <?= $author['name'] ?>
                </h1>
                <p class=" text-base font-semibold text-white">writing is everything.</p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<?php
view('partials/footer');
?>