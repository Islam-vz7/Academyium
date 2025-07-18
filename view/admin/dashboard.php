<?php
// Check for admin session, otherwise redirect to login.
// session_start();
// if (!isset($_SESSION['admin_user'])) {
//     header('Location: login.php');
//     exit();
// }

// PHP logic to fetch courses from the database would go here.
// $courses = fetch_all_courses();
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
</head>
<body class="bg-slate-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-800 text-white flex flex-col">
            <div class="p-6 text-center">
                <img src="../../include\assets\img\logo.png" alt="ACADEMYIUM Logo" class="h-12 w-auto mx-auto mb-4">
            </div>
            <nav class="flex-1 px-4 py-2 space-y-2">
                <a href="#" class="sidebar-link active"><i class="ph-bold ph-chalkboard"></i><span>Courses</span></a>
                <a href="#" class="sidebar-link"><i class="ph-bold ph-users"></i><span>Users</span></a>
                <a href="#" class="sidebar-link"><i class="ph-bold ph-gear"></i><span>Settings</span></a>
            </nav>
            <div class="p-4">
                <a href="login.php" class="sidebar-link logout"><i class="ph-bold ph-sign-out"></i><span>Logout</span></a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-slate-800">Course Management</h1>
                <button class="btn-primary flex items-center gap-2 py-2 px-4 rounded-lg font-semibold">
                    <i class="ph-bold ph-plus-circle"></i>
                    Add New Course
                </button>
            </div>

            <!-- Courses Table -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <table class="w-full">
                    <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="p-4 text-left font-semibold text-slate-600">Course Name</th>
                            <th class="p-4 text-left font-semibold text-slate-600">Price</th>
                            <th class="p-4 text-left font-semibold text-slate-600">Status</th>
                            <th class="p-4 text-left font-semibold text-slate-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Row 1 -->
                        <tr class="border-b border-slate-200">
                            <td class="p-4">Advanced Trauma Interventions</td>
                            <td class="p-4">€1500</td>
                            <td class="p-4"><span class="status-badge published">Published</span></td>
                            <td class="p-4 flex gap-2">
                                <button class="action-btn edit"><i class="ph-bold ph-pencil-simple"></i></button>
                                <button class="action-btn delete"><i class="ph-bold ph-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Example Row 2 -->
                        <tr class="border-b border-slate-200">
                            <td class="p-4">Pediatric Emergency Care</td>
                            <td class="p-4">€1100</td>
                            <td class="p-4"><span class="status-badge published">Published</span></td>
                            <td class="p-4 flex gap-2">
                                <button class="action-btn edit"><i class="ph-bold ph-pencil-simple"></i></button>
                                <button class="action-btn delete"><i class="ph-bold ph-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Example Row 3 -->
                        <tr class="border-b border-slate-200">
                            <td class="p-4">Critical Care Ultrasound</td>
                            <td class="p-4">€950</td>
                            <td class="p-4"><span class="status-badge draft">Draft</span></td>
                            <td class="p-4 flex gap-2">
                                <button class="action-btn edit"><i class="ph-bold ph-pencil-simple"></i></button>
                                <button class="action-btn delete"><i class="ph-bold ph-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
