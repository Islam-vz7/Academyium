<?php
require_once __DIR__ . '/../../controller/facultyController.php';

$facultyController = new FacultyController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['faculty_id']) && !empty($_POST['faculty_id'])) {
        $facultyController->updateFaculty($_POST, $_FILES);
    } else {
        $facultyController->addFaculty($_POST, $_FILES);
    }
    header('Location: faculty.php');
    exit;
}

$isEditing = isset($_GET['id']);
$pageTitle = $isEditing ? 'Edit Faculty Member' : 'Add New Faculty Member';
$faculty = [];
if ($isEditing) {
    $faculty = $facultyController->getFacultyById($_GET['id']);
}
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
                <form action="manage-faculty.php<?php echo $isEditing ? '?id=' . htmlspecialchars($_GET['id']) : ''; ?>" method="POST" class="space-y-6" enctype="multipart/form-data">
                    <?php if ($isEditing): ?>
                        <input type="hidden" name="faculty_id" value="<?php echo htmlspecialchars($faculty['id']); ?>">
                    <?php endif; ?>
                    
                    <div>
                        <label for="name" class="block mb-2 font-semibold text-slate-700">Full Name</label>
                        <input type="text" id="name" name="name" class="form-input" value="<?php echo htmlspecialchars($faculty['name'] ?? ''); ?>" required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="role" class="block mb-2 font-semibold text-slate-700">Role / Credentials</label>
                            <input type="text" id="role" name="role" class="form-input" placeholder="e.g., MD, FACEP" value="<?php echo htmlspecialchars($faculty['role'] ?? ''); ?>" required>
                        </div>
                        <div>
                            <label for="hospital" class="block mb-2 font-semibold text-slate-700">Hospital / Institution</label>
                            <input type="text" id="hospital" name="hospital" class="form-input" value="<?php echo htmlspecialchars($faculty['hospital'] ?? ''); ?>">
                        </div>
                    </div>
                    
                    <div>
                        <label for="description" class="block mb-2 font-semibold text-slate-700">Description / Bio</label>
                        <textarea id="description" name="description" rows="5" class="form-input" required><?php echo htmlspecialchars($faculty['description'] ?? ''); ?></textarea>
                    </div>

                    <div>
                        <label for="image" class="block mb-2 font-semibold text-slate-700">Profile Picture</label>
                        <input type="file" id="image" name="image" class="form-input" accept="image/*">
                        <?php if ($isEditing && !empty($faculty['image'])): ?>
                            <p class="text-sm text-slate-500 mt-2">Current image:</p>
                            <img src="<?php echo htmlspecialchars($faculty['image']); ?>" class="h-20 w-20 rounded-full mt-2 object-cover">
                        <?php endif; ?>
                    </div>

                    <div class="pt-4 flex justify-end gap-4">
                         <a href="faculty.php" class="btn-secondary">Cancel</a>
                        <button type="submit" class="btn-primary py-2 px-6 rounded-lg font-semibold">
                           <?php echo $isEditing ? 'Update Member' : 'Save Member'; ?>
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
