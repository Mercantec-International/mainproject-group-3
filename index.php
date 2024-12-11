<?php
session_start();
$page = 'home';
include('includes/header.php');

?>
<!-- Hero Section -->
<div class="hero h-[600px] bg-[url('/media/images/rocket-background.jpg')] bg-cover flex flex-col items-center justify-center text-white">
    <h1 class="text-4xl font-bold">Welcome to Project Apollo</h1>
    <p class="text-xl mt-4">Advancing Rocketry and Space Exploration with Rocket League</p>
    <a href="/pages/project.php" class="mt-6 bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">Learn More About Our Project</a>
</div>

<!-- Content Sections -->
<div class="container mx-auto my-16 px-4">
    <!-- About Section -->
    <div class="p-20 text-center">
        <h2 class="text-[#4D5057] text-4xl mb-2 font-bold">About Us</h2>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="font-bold text-2xl mb-2 text-[#4D5057]">Meet the team behind Rocket League’s pioneering Project Apollo. Our mission is to push the boundaries of space technology through innovation and collaboration.</h2>
            <a href="./pages/aboutus.php" class="inline-block mt-4 border-2 border-indigo-600 text-indigo-600 px-4 py-2 rounded-lg hover:bg-[#91B7C7] hover:border-[#91B7C7] hover:text-white">Meet Our Team</a>
        </div>
    </div>

    <!-- Project Overview Section -->
    <div class="p-20 text-center">
        <h2 class="text-[#4D5057] text-4xl mb-2 font-bold">About Project Apollo</h2>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="font-bold text-2xl mb-2 text-[#4D5057]">Project Apollo is focused on the design and testing of a mini rocket prototype, measuring critical flight data such as speed, altitude, and humidity. Our goal is to achieve remarkable accuracy and efficiency for future space missions.</h2>
            <a href="/pages/project.php" class="inline-block mt-4 border-2 border-indigo-600 text-indigo-600 px-4 py-2 rounded-lg hover:bg-[#91B7C7] hover:border-[#91B7C7] hover:text-white">Explore Our Project</a>
        </div>
    </div>

    <!-- Data Section -->
    <div class="p-20 text-center">
        <h1 class="text-[#4D5057] text-4xl mb-2 font-bold">Prototype Data</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="font-bold text-2xl mb-2 text-[#4D5057]">Explore real-time and recorded data from our mini rocket prototype, including metrics like speed, altitude, and environmental conditions.</h2>
            <a href="/pages/data.php" class="inline-block mt-4 border-2 border-indigo-600 text-indigo-600 px-4 py-2 rounded-xl hover:bg-[#91B7C7] hover:border-[#91B7C7] hover:text-white">View Data</a>
        </div>
    </div>

    <!-- Cross-Country Comparison Section -->
    <div class="p-20 text-center">
        <h2 class="text-[#4D5057] text-4xl mb-2 font-bold">Cross-Country Comparison</h2>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="font-bold text-2xl mb-2 text-[#4D5057]">Compare our rocket's performance across different terrains and atmospheric conditions. Learn how it adapts to a variety of environments.</h2>
            <a href="/pages/comparison.php" class="inline-block mt-4 border-2 border-indigo-600 text-indigo-600 px-4 py-2 rounded-lg hover:bg-[#91B7C7] hover:border-[#91B7C7] hover:text-white">See Comparisons</a>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>