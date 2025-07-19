<?php
require_once __DIR__ . '/../../controller/courseController.php';

session_start();
if (!isset($_SESSION['email']) || $_SESSION['email'] !== 'admin@site.com') {
    header("location: ../../view/admin/login.php");
    exit();
}

$courseController = new CourseController();

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $courseController->deleteCourse($_GET['id']);
    header('Location: course.php'); 
    exit;
}

$courses = $courseController->getAllCourses();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Courses</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="../../include/assets/admin-style.css">
</head>
<body class="bg-slate-100">
    <div class="flex h-screen">
        <?php include 'sidebar.php'; ?>
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-slate-800">Course Management</h1>
                <a href="manage-course.php" class="btn-primary flex items-center gap-2 py-2 px-4 rounded-lg font-semibold">
                    <i class="ph-bold ph-plus-circle"></i>
                    Add New Course
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <table class="w-full">
                    <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="p-4 text-left font-semibold text-slate-600">Course Title</th>
                            <th class="p-4 text-left font-semibold text-slate-600">Price</th>
                            <th class="p-4 text-left font-semibold text-slate-600">Dates</th>
                            <th class="p-4 text-left font-semibold text-slate-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($courses)): ?>
                            <tr><td colspan="4" class="p-4 text-center text-slate-500">No courses found. Add one to get started!</td></tr>
                        <?php else: ?>
                            <?php foreach ($courses as $course): ?>
                            <tr class="border-b border-slate-200 hover:bg-slate-50">
                                <td class="p-4 font-medium"><?php echo htmlspecialchars($course['title']); ?></td>
                                <td class="p-4">€<?php echo htmlspecialchars($course['price']); ?></td>
                                <td class="p-4"><?php echo htmlspecialchars(date('M d, Y', strtotime($course['start_date']))); ?> - <?php echo htmlspecialchars(date('M d, Y', strtotime($course['end_date']))); ?></td>
                                <td class="p-4 flex gap-2">
                                    <a href="manage-course.php?id=<?php echo $course['id']; ?>" class="action-btn edit" title="Edit"><i class="ph-bold ph-pencil-simple"></i></a>
                                    <a href="courses_dashboard.php?action=delete&id=<?php echo $course['id']; ?>" class="action-btn delete" title="Delete" onclick="return confirm('Are you sure you want to delete this course?');"><i class="ph-bold ph-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
