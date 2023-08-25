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

    <form method="POST" action="/books">
       
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $book['id'] ?>" >
        <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 ">
            <div class="sm:col-span-3">
                <div class="inline-block">
                    <label for="title" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Title
                    </label>
                </div>
            </div>


            <div class="sm:col-span-9">
                <input id="title" name="title" value="<?= ($book["title"]) ?? ''?>" type="text" class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-white dark:border-gray-700 dark:text-gray-700">

                <p class="text-xs mt-2 text-red-500 underline <?php echo isset($errors["title"]) === false ? "hidden" : "block" ?>">
                    <?= $errors["title"] ?>
                </p>
            </div>


            <!-- <div class="sm:col-span-3">
                <label for="image-cover" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Image cover
                </label>
            </div>
            <div class="sm:col-span-9">
                <label for="image-cover" class="sr-only">Choose file</label>
                <input type="file" name="image-cover" id="image-cover" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-white dark:border-gray-700 dark:text-gray-700
            file:bg-transparent file:border-0
            file:bg-gray-100 file:mr-4
            file:py-2 file:px-3
            dark:file:bg-gray-700 dark:file:text-gray-400">
            </div> -->


            <div class="sm:col-span-3">
                <div class="inline-block">
                    <label for="desc" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                        Description
                    </label>
                </div>
            </div>


            <div class="sm:col-span-9">
                <textarea id="desc" name="desc" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-white dark:border-gray-700 dark:text-gray-700" rows="6" placeholder="Add a description"><?= ($book["description"] ?? '') ?></textarea>
                <p class="text-xs mt-2 text-red-500 underline <?php echo isset($errors["desc"]) === false ? "hidden" : "block" ?>">
                    <?= $errors["desc"] ?>
                </p>
            </div>

        </div>
        <!-- End Section -->

        <!-- Section -->


        <button type="submit" class="py-3 px-4 w-full inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            <span>Update</span>
        </button>
    </form>
    </div>
    <!-- End Card -->
    </div>
    <!-- End Card Section -->

</main>



<?php
view('partials/footer');
?>