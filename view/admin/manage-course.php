<?php
require_once __DIR__ . '/../../controller/courseController.php';

$courseController = new CourseController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['course_id']) && !empty($_POST['course_id'])) {
        $courseController->updateCourse($_POST);
    } else {
        $courseController->addCourse($_POST);
    }
    header('Location: course.php');
    exit;
}

$isEditing = isset($_GET['id']);
$pageTitle = $isEditing ? 'Edit Course' : 'Create New Course';
$course = [];
if ($isEditing) {
    $course = $courseController->getCourseById($_GET['id']);
}

$course_images = [
    "../include/assets/img/courses/logo.png"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="../../include/assets/admin-style.css">
</head>
<body class="bg-slate-100">
    <div class="flex h-screen">
        <?php include 'sidebar.php'; ?>
        <main class="flex-1 p-8 overflow-y-auto">
            <h1 class="text-3xl font-bold text-slate-800 mb-8"><?php echo htmlspecialchars($pageTitle); ?></h1>
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl mx-auto">
                <form action="manage-course.php<?php echo $isEditing ? '?id=' . htmlspecialchars($_GET['id']) : ''; ?>" method="POST" class="space-y-6">
                    <?php if ($isEditing): ?>
                        <input type="hidden" name="course_id" value="<?php echo htmlspecialchars($course['id']); ?>">
                    <?php endif; ?>
                    
                    <div>
                        <label for="title" class="block mb-2 font-semibold text-slate-700">Course Title</label>
                        <input type="text" id="title" name="title" class="form-input" value="<?php echo htmlspecialchars($course['title'] ?? ''); ?>" required>
                    </div>
                    
                    <div>
                        <label for="description" class="block mb-2 font-semibold text-slate-700">Description</label>
                        <textarea id="description" name="description" rows="6" class="form-input" required><?php echo htmlspecialchars($course['description'] ?? ''); ?></textarea>
                    </div>

                    <div>
    <label for="image_url" class="block mb-2 font-semibold text-slate-700">Course Image</label>
    <select id="image_url" name="image_url" class="form-input">
        <?php foreach ($course_images as $image): ?>
            <option value="<?php echo $image; ?>">
                <?php echo basename($image); ?>
            </option>
        <?php endforeach; ?>
    </select>
</div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="price" class="block mb-2 font-semibold text-slate-700">Price (€)</label>
                            <input type="number" id="price" name="price" class="form-input" step="0.01" value="<?php echo htmlspecialchars($course['price'] ?? ''); ?>" required>
                        </div>
                        <div>
                            <label for="location" class="block mb-2 font-semibold text-slate-700">Location</label>
                            <input type="text" id="location" name="location" class="form-input" value="<?php echo htmlspecialchars($course['location'] ?? ''); ?>" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="start_date" class="block mb-2 font-semibold text-slate-700">Start Date</label>
                            <input type="date" id="start_date" name="start_date" class="form-input" value="<?php echo htmlspecialchars($course['start_date'] ?? ''); ?>" required>
                        </div>
                        <div>
                            <label for="end_date" class="block mb-2 font-semibold text-slate-700">End Date</label>
                            <input type="date" id="end_date" name="end_date" class="form-input" value="<?php echo htmlspecialchars($course['end_date'] ?? ''); ?>" required>
                        </div>
                    </div>
                    
                    <div>
                        <label for="registration_form_link" class="block mb-2 font-semibold text-slate-700">Registration Form Link</label>
                        <input type="url" id="registration_form_link" name="registration_form_link" class="form-input" placeholder="https://example.com/register" value="<?php echo htmlspecialchars($course['registration_form_link'] ?? ''); ?>">
                    </div>

                    <div>
                        <label for="feedback_form_link" class="block mb-2 font-semibold text-slate-700">Feedback Form Link</label>
                        <input type="url" id="feedback_form_link" name="feedback_form_link" class="form-input" placeholder="https://example.com/feedback" value="<?php echo htmlspecialchars($course['feedback_form_link'] ?? ''); ?>">
                    </div>

                    <div class="pt-4 flex justify-end gap-4">
                        <a href="course.php" class="btn-secondary">Cancel</a>
                        <button type="submit" class="btn-primary py-2 px-6 rounded-lg font-semibold">
                            <?php echo $isEditing ? 'Update Course' : 'Save Course'; ?>
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
