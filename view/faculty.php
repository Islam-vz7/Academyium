<?php 
require_once __DIR__ . '/../controller/facultyController.php';
$facultyController = new FacultyController();
$faculty_members = $facultyController->getAllFaculty();
include '../include/header.php'; 
?>

    <main class="pt-24">
        <section id="faculty" class="py-20">
            <div class="container mx-auto px-6">
                <h1 class="section-title text-4xl font-bold mb-12 text-center text-slate-800">Our Expert Faculty</h1>
                <p class="text-center text-lg max-w-3xl mx-auto mb-16 text-slate-600">Learn from a multidisciplinary team of world-renowned experts in emergency medicine, anaesthesia, and critical care. Our faculty are not only exceptional clinicians but also passionate educators dedicated to advancing your skills.</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    <?php if (empty($faculty_members)): ?>
                        <p class="text-center text-slate-500 col-span-full">Faculty information is not available at the moment.</p>
                    <?php else: ?>
                        <?php foreach ($faculty_members as $member): ?>
                        <div class="faculty-card rounded-lg overflow-hidden text-center p-6 shadow-lg bg-white">
                            <img src="<?php echo htmlspecialchars($member['image']); ?>" class="w-32 h-32 rounded-full mx-auto mb-4 border-4 border-white shadow-md object-cover" alt="<?php echo htmlspecialchars($member['name']); ?>" onerror="this.onerror=null;this.src='https://placehold.co/200x200/e0e7ff/3730a3?text=Photo';">
                            <h3 class="text-xl font-bold text-slate-800"><?php echo htmlspecialchars($member['name']); ?></h3>
                            <p class="text-blue-600 font-semibold"><?php echo htmlspecialchars($member['role']); ?></p>
                            <p class="text-slate-500 mt-1"><?php echo htmlspecialchars($member['hospital']); ?></p>
                            <p class="mt-4 text-sm text-slate-600"><?php echo nl2br(htmlspecialchars($member['description'])); ?></p>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

<?php include '../include/footer.php'; ?>
