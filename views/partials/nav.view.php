<nav
    class="fixed inset-0 h-12 sm:h-16 z-10 backdrop-blur-lg bg-blue-950/40 flex flex-row justify-between items-center gap-4  rounded-full px-1 sm:px-3 py-1 sm:py-2  mt-4 mx-2 sm:mx-8 ">
    <div class="left ">
        <a href="/Bookverse">
            <img class="rounded-full h-10 w-10 sm:h-14 sm:w-14" src="<?= path('/public/assets/BookVerse.svg') ?>"
                alt="logo" class="logo">
        </a>
    </div>

    <!-- only in small devices -->
    <div class=" logo flex sm:hidden  ">
        <a href="/" class=" text-xl text-blue-600 font-bold">BookVerse</a>
    </div>

    <div class="mid hidden  flex-1 sm:flex flex-col items-center text-lg text-white ">
        <ul class=" flex flex-row justify-between items-center w-2/3 xl:w-1/2 ">
            <li><a class=" <?= navigationStyle(" /") ?> px-4 py-2 rounded-lg transition-all ease-in-out duration-200"
                    href="/">Home</a></li>
            <?php if(isset($_SESSION['email'])) :?>
            <li><a class=" <?= navigationStyle(" /books") ?> px-4 py-2 rounded-lg transition-all ease-in-out
                    duration-200" href="/books">Books</a></li>
            <?php endif ?>
            <li><a class=" <?= navigationStyle(" /about") ?> px-4 py-2 rounded-lg transition-all ease-in-out
                    duration-200" href="/about">About</a></li>
            <li><a class=" <?= navigationStyle(" /authors") ?> px-4 py-2 rounded-lg transition-all ease-in-out
                    duration-200" href="/authors">Authors</a></li>
        </ul>
    </div>

    <div class="right">
        <?php if(isset($_SESSION['email'])) :?>
        <form action="/user/logout" method="POST">
            <input type="hidden" name="logout-id" value="dk">
            <button type="submit" 
                class="text-white bg-blue-600 text-lg font-semibold px-5 py-3 rounded-full transition-all ease-in-out duration-200">Logout</button>
        </form>
        <?php else : ?>
        <a href="/user/login"
            class="text-white bg-blue-600 text-lg font-semibold px-5 py-3 rounded-full transition-all ease-in-out duration-200">Login</a>
        <a href="/user/create"
            class="text-white ml-4 bg-blue-600 text-lg font-semibold px-5 py-3 rounded-full transition-all ease-in-out duration-200">Register</a>
        <?php endif ?>
    </div>
</nav>