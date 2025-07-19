<?php
// PHP to fetch all faculty members from the database
// $faculty_members = get_all_faculty();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Management - AEMIS Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="../../include/assets/admin-style.css">
</head>
<body class="bg-slate-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-slate-800">Faculty Management</h1>
                <a href="manage-faculty.php" class="btn-primary flex items-center gap-2 py-2 px-4 rounded-lg font-semibold">
                    <i class="ph-bold ph-plus-circle"></i>
                    Add New Member
                </a>
            </div>

            <!-- Faculty Table -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <table class="w-full">
                    <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="p-4 text-left font-semibold text-slate-600">Name</th>
                            <th class="p-4 text-left font-semibold text-slate-600">Title</th>
                            <th class="p-4 text-left font-semibold text-slate-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Row 1 -->
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="p-4 flex items-center gap-4">
                                <img src="https://placehold.co/40x40/e0e7ff/3730a3?text=JD" class="rounded-full h-10 w-10" alt="Dr. John Doe">
                                <span>Dr. John Doe</span>
                            </td>
                            <td class="p-4">MD, FACEP | Course Director</td>
                            <td class="p-4 flex gap-2">
                                <a href="manage-faculty.php?id=1" class="action-btn edit"><i class="ph-bold ph-pencil-simple"></i></a>
                                <button class="action-btn delete"><i class="ph-bold ph-trash"></i></button>
                            </td>
                        </tr>
                         <!-- Example Row 2 -->
                        <tr class="border-b border-slate-200 hover:bg-slate-50">
                            <td class="p-4 flex items-center gap-4">
                                <img src="https://placehold.co/40x40/e0e7ff/3730a3?text=JS" class="rounded-full h-10 w-10" alt="Dr. Jane Smith">
                                <span>Dr. Jane Smith</span>
                            </td>
                            <td class="p-4">MBBS, FRCA | Head of Ultrasound Training</td>
                            <td class="p-4 flex gap-2">
                                <a href="manage-faculty.php?id=2" class="action-btn edit"><i class="ph-bold ph-pencil-simple"></i></a>
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
