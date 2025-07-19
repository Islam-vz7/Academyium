<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academyium Courses</title>
    <link rel="stylesheet" href="../include/assets/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" type="image/png" href="../include\assets\img\logo_no text.png">

</head>
<body class="bg-slate-50 text-slate-800">

    <!-- Header & Navigation -->
    <header class="fixed top-0 left-0 w-full bg-white/90 backdrop-blur-sm z-50 shadow-md" id="header">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div>
                <a href="index.php" class="flex items-center">
                    <img src="../include/assets/img/logo.png" alt="ACADEMYIUM Logo" class="h-12 w-auto">
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="nav-link">Home</a>
                <a href="courses.php" class="nav-link">All Courses</a>
                <a href="faculty.php" class="nav-link">Faculty</a>
                <a href="about.php" class="nav-link">About Us</a>
                <a href="contact.php" class="nav-link">Contact</a>
                <a href="#" class="ml-4 btn-primary font-bold py-2 px-5 rounded-lg text-sm">Register</a>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-slate-800 focus:outline-none">
                    <i class="ph-bold ph-list text-2xl"></i>
                </button>
            </div>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-200">
            <a href="index.php" class="block py-3 px-4 text-slate-600 hover:bg-slate-100">Home</a>
            <a href="courses.php" class="block py-3 px-4 text-slate-600 hover:bg-slate-100">All Courses</a>
            <a href="faculty.php" class="block py-3 px-4 text-slate-600 hover:bg-slate-100">Faculty</a>
            <a href="about.php" class="block py-3 px-4 text-slate-600 hover:bg-slate-100">About Us</a>
            <a href="contact.php" class="block py-3 px-4 text-slate-600 hover:bg-slate-100">Contact</a>
            <a href="#" class="block py-3 px-4 text-blue-600 font-bold hover:bg-slate-100">Register Now</a>
        </div>
    </header>
