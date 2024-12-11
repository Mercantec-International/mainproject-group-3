<?php
session_start();
$page = 'AboutUs';
include_once('../database/db_conn.php');
include_once('../includes/header.php');
?>

<div class="container mx-auto my-5">
  <h1 class="px-3 py-1 text-sm font-semibold text-white bg-gradient-to-r from-[#353839] to-indigo-600 rounded-full text-center">Meet Our Team</h1>

  <!-- Team Members Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
    <!-- Julian -->
    <div class="card w-[20em] h-[30em] bg-[#353839] transition duration-500 ease-in-out clip-path-custom rounded-tr-[20px] rounded-bl-[20px] flex flex-col mx-auto">
      <div class="img w-[6em] h-[6em] bg-[url('../media/images/julian.jpg')] bg-cover bg-center rounded-[15px] mx-auto"></div>
      <span class="font-bold text-white text-center text-[1.1em] block mt-2">Julian</span>
      <span class="text-center text-white font-semibold text-[1em]">Arduino Programmer</span>
      <span class="text-center text-white font-medium text-[1em] mt-2">Age: 19</span>
      <p class="bio font-normal text-white text-center text-[0.9em] mx-[1em] mt-[0.5em]">
        Hi, my name is Julian Timmermans. I like to play games and listen to music.
      </p>
      <p class="info font-normal text-white text-center text-[0.9em] mx-[1em] my-[1em]">
        I have experience programming in PHP, HTML, CSS, Javascript, and C#. I have also worked with Arduino IDE, Bootstrap, and Laravel.
      </p>
    </div>

    <!-- Sjors -->
    <div class="card w-[20em] h-[30em] bg-[#353839] transition duration-500 ease-in-out clip-path-custom rounded-tr-[20px] rounded-bl-[20px] flex flex-col mx-auto">
      <div class="img w-[6em] h-[6em] bg-[url('../media/images/Sjors.jpg')] bg-cover bg-center rounded-[15px] mx-auto"></div>
      <span class="font-bold text-white text-center text-[1.1em] block mt-2">Sjors</span>
      <span class="text-center text-white font-semibold text-[1em]">Arduino Programmer</span>
      <span class="text-center text-white font-medium text-[1em] mt-2">Age: 23</span>
      <p class="bio font-normal text-white text-center text-[0.9em] mx-[1em] mt-[0.5em]">
        Hi, I'm Sjors Pynaert I like gaming, coding, and working out (mainly running on a treadmill).
      </p>
      <p class="info font-normal text-white text-center text-[0.9em] mx-[1em] my-[1em]">
        I have experience with PHP, HTML, CSS, Javascript, C#, MySQL, Arduino, and a little bit of C.
      </p>
    </div>

    <!-- Lucas -->
    <div class="card w-[20em] h-[30em] bg-[#353839] transition duration-500 ease-in-out clip-path-custom rounded-tr-[20px] rounded-bl-[20px] flex flex-col mx-auto">
      <div class="img w-[6em] h-[6em] bg-[url('../media/images/Lucas.jpg')] bg-cover bg-center rounded-[15px] mx-auto"></div>
      <span class="font-bold text-white text-center text-[1.1em] block mt-2">Lucas</span>
      <span class="text-center text-white font-semibold text-[1em]">Back-End</span>
      <span class="text-center text-white font-medium text-[1em] mt-2">Age: 18</span>
      <p class="bio font-normal text-white text-center text-[0.9em] mx-[1em] mt-[0.5em]">
        Hi, I'm Lucas!
      </p>
      <p class="info font-normal text-white text-center text-[0.9em] mx-[1em] my-[1em]">
        Hello! I like playing games and making them too. I am experienced in C#, JavaScript, Laravel, PHP, and C.
      </p>
    </div>

    <!-- Rasmus -->
    <div class="card w-[20em] h-[30em] bg-[#353839] transition duration-500 ease-in-out clip-path-custom rounded-tr-[20px] rounded-bl-[20px] flex flex-col mx-auto">
      <div class="img w-[6em] h-[6em] bg-[url('../media/images/Rasmus.PNG')] bg-cover bg-center rounded-[15px] mx-auto"></div>
      <span class="font-bold text-white text-center text-[1.1em] block mt-2">Rasmus</span>
      <span class="text-center text-white font-semibold text-[1em]">Front-End</span>
      <span class="text-center text-white font-medium text-[1em] mt-2">Age: 21</span>
      <p class="bio font-normal text-white text-center text-[0.9em] mx-[1em] mt-[0.5em]">
        Hi, I'm Rasmus! I love watching football, spending time with friends, and exploring hobbies like fishing, gaming, and playing football.
      </p>
      <p class="info font-normal text-white text-center text-[0.9em] mx-[1em] my-[1em]">
        I enjoy creating functional websites that are responsive and user-friendly. My primary languages include PHP, Dart, and JavaScript, with tools like Tailwind CSS.
      </p>
    </div>

    <!-- Silas -->
    <div class="card w-[20em] h-[30em] bg-[#353839] transition duration-500 ease-in-out clip-path-custom rounded-tr-[20px] rounded-bl-[20px] flex flex-col mx-auto">
      <div class="img w-[6em] h-[6em] bg-[url('../media/images/Silas.jpg')] bg-cover bg-center rounded-[15px] mx-auto"></div>
      <span class="font-bold text-white text-center text-[1.1em] block mt-2">Silas</span>
      <span class="text-center text-white font-semibold text-[1em]">Front-End</span>
      <span class="text-center text-white font-medium text-[1em] mt-2">Age: 19</span>
      <p class="bio font-normal text-white text-center text-[0.9em] mx-[1em] mt-[0.5em]">
        Hi, I'm Silas! I have a passion for gaming and enjoy watching TV shows and movies.
      </p>
      <p class="info font-normal text-white text-center text-[0.9em] mx-[1em] my-[1em]">
        I focus on making websites with database integration. My primary language is C#, and I use frameworks like Blazor for efficient solutions.
      </p>
    </div>

    <!-- Rens -->
    <div class="card w-[20em] h-[30em] bg-[#353839] transition duration-500 ease-in-out clip-path-custom rounded-tr-[20px] rounded-bl-[20px] flex flex-col mx-auto">
      <div class="img w-[6em] h-[6em] bg-[url('../media/images/Profielen.jpg')] bg-cover bg-center rounded-[15px] mx-auto"></div>
      <span class="font-bold text-white text-center text-[1.1em] block mt-2">Rens</span>
      <span class="text-center text-white font-semibold text-[1em]">Arduino</span>
      <span class="text-center text-white font-medium text-[1em] mt-2">Age: 18</span>
      <p class="bio font-normal text-white text-center text-[0.9em] mx-[1em] mt-[0.5em]">
        Hi, I'm Rens! My hobbies are playing games, watching movies, and sports.
      </p>
      <p class="info font-normal text-white text-center text-[0.9em] mx-[1em] my-[1em]">
        Favorite coding languages: C++ and Python.
      </p>
    </div>
  </div>

  <!-- Custom Clip-path for Tailwind -->
  <style>
    .clip-path-custom {
      clip-path: polygon(30px 0%, 100% 0, 100% calc(100% - 30px), calc(100% - 30px) 100%, 0 100%, 0% 30px);
    }
  </style>
</div>

<?php
include_once('../includes/footer.php')
?>