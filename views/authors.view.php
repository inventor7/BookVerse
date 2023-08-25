<?php
view('/partials/header', ['page' => 'Book']);
view('/partials/nav', ['page' => 'Book']);

?>
<main class=" h-[50vh] w-full flex flex-col justify-center items-center">
    <h1 class=" text-3xl font-bold text-white"> Welcome to the authors page !</h1>
</main>

<?php
view('partials/footer');
?>