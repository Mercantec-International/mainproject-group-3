<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Apollo | Welcome</title>

    <!-- Bootstrap and styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/css.css+">

    <!-- Tailwind CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <script src="../javascript/script.js"></script>
    <!-- Navbar -->
    <nav class="relative px-4 py-4 flex justify-between items-center bg-[#4D5057] text-white shadow-md">
        <a href="index.php" class="flex items-center">
            <img src="../media/images/Logo_project_apollo.png" alt="Logo" class="w-12 h-12">
            <div class="ml-2 flex flex-col">
                <span class="text-xl font-bold">Project Apollo</span>
                <?php
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                    echo '<span class="text-sm">Welcome, ' . htmlspecialchars($_SESSION['username']) . '</span>';
                }
                ?>
            </div>
        </a>
        <!-- Mobile menu toggle -->
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-white p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <!-- Navbar Links -->
        <ul class="hidden lg:flex lg:items-center lg:space-x-9">
            <li><a class="hover:text-white font-semibold" href="index.php">Home</a></li>
            <li class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="hover:text-white font-semibold" href="aboutus.php">About Us</a></li>
            <li class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="hover:text-white font-semibold" href="project.php">Project</a></li>
            <li class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="hover:text-white font-semibold" href="data.php">Data</a></li>
            <li class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="hover:text-white font-semibold" href="comparison.php">Comparison</a></li>
        </ul>
        <?php
        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
        ?>
            <a class="hidden lg:inline-block py-2 px-6 bg-red-500 hover:bg-red-600 text-white font-bold rounded" href="backend/login/logout.php">Log out</a>
        <?php
        } else {
        ?>
            <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-white font-bold rounded" href="login.php">Login</a>
        <?php
        }
        ?>
    </nav>
    <!-- Mobile Menu -->
    <div class="navbar-menu hidden fixed inset-0 z-50 bg-white">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto flex items-center" href="<?= $base ?>">
                    <div class="ml-4 flex flex-col">
                        <span class="text-lg font-bold">Project Apollo</span>
                        <?php
                        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
                            echo '<span class="text-sm">Welcome, ' . htmlspecialchars($_SESSION['username']) . '</span>';
                        }
                        ?>
                    </div>
                </a>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded" href="<?= $base ?>">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded" href="<?= $base ?>pages/aboutus.php">AboutUs</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded" href="<?= $base ?>pages/project.php">Project</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded" href="<?= $base ?>pages/data.php">Data</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded" href="<?= $base ?>pages/omparison.php">Comparison</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <?php
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
                ?>
                    <a class="block px-4 py-3 mb-2 text-center text-white bg-red-500 hover:bg-red-600 rounded" href="<?= $base ?>backend/login/logout.php">Log out</a>
                <?php
                } else {
                ?>
                    <a class="block px-4 py-3 mb-2 text-center text-white bg-blue-500 hover:bg-blue-600 rounded" href="<?= $base ?>pages/login.php">Login</a>
                <?php
                }
                ?>
            </div>
        </nav>
    </div>
</body>

</html>