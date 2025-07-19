<?php
session_start();
// Redirect to login if not authenticated
if (!isset($_SESSION['email']) || $_SESSION['email'] !== 'admin@site.com') {
    header("location: ../../view/admin/login.php");
    exit();
}
// Extract user name from email for a personalized welcome
$userName = explode('@', $_SESSION['email'])[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="../../include/assets/admin-style.css">
    <!-- New styles for the redesigned dashboard -->
    
</head>
<body class="bg-slate-100">
    <div class="flex h-screen">
        <?php include 'sidebar.php'; ?>
        <main class="flex-1 p-8 overflow-y-auto">
            <!-- Welcome Banner -->
            <div class="welcome-banner text-white p-8 rounded-lg mb-8">
                <h1 class="text-3xl font-bold">Welcome back, <?php echo htmlspecialchars(ucfirst($userName)); ?>!</h1>
                <p class="mt-2">Here's a quick overview of your site's content.</p>
            </div>

            <!-- Quick Stats Section (Example) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="stat-card">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-full"><i class="ph-bold ph-chalkboard text-2xl"></i></div>
                    <div>
                        <p class="text-slate-500 text-sm">Total Courses</p>
                        <p class="text-2xl font-bold text-slate-800">##</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="bg-green-100 text-green-600 p-3 rounded-full"><i class="ph-bold ph-users-three text-2xl"></i></div>
                    <div>
                        <p class="text-slate-500 text-sm">Faculty Members</p>
                        <p class="text-2xl font-bold text-slate-800">##</p>
                    </div>
                </div>
                
            </div>

            <!-- Main Navigation Cards -->
            <div>
                <h2 class="text-2xl font-semibold text-slate-700 mb-4">Manage Content</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <a href="courses_dashboard.php" class="nav-card nav-card-courses">
                        <i class="ph-bold ph-chalkboard icon-bg"></i>
                        <h3 class="font-bold text-2xl">Manage Courses</h3>
                        <p class="mt-2 opacity-80">Add, edit, or remove course listings and details.</p>
                    </a>
                    <a href="faculty.php" class="nav-card nav-card-faculty">
                        <i class="ph-bold ph-users-three icon-bg"></i>
                        <h3 class="font-bold text-2xl">Manage Faculty</h3>
                        <p class="mt-2 opacity-80">Update faculty profiles and information.</p>
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
