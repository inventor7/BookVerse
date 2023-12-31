<?php
view('/partials/header', ['page' => 'Book']);
view('/partials/nav', ['page' => 'Book']);

?>

<div class="flex flex-col items-center justify-center h-screen ">
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-2xl md:text-3xl lg:text-7xl font-bold text-gray-200 mt-8">404</h1>
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-200 mt-4">Unauthorized !</h1>
        <p class="text-gray-200 mt-2">You are not authorized.</p>
        <a href="/" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300 ease-in-out">Go Home</a>
    </div>
</div>

<?php
view('partials/footer')
?>