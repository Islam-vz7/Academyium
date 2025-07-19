<?php 
require_once __DIR__ . '/../controller/courseController.php';
$courseController = new CourseController();
$courses = $courseController->getAllCourses();
include '../include/header.php'; 
?>


    <main class="pt-24">
        <section class="py-20">
            <div class="container mx-auto px-6">
                <h1 class="section-title text-4xl font-bold mb-16 text-center text-slate-900">Our Courses</h1>
                <div class="space-y-16">
                    <?php if (empty($courses)): ?>
                        <p class="text-center text-slate-500">No courses are available at the moment. Please check back later.</p>
                    <?php else: ?>
                        <?php foreach ($courses as $course): ?>
                        <div class="course-detail-card rounded-lg shadow-xl overflow-hidden flex flex-col md:flex-row bg-white">
                            <img src="<?php echo htmlspecialchars($course['image_url']); ?>" alt="<?php echo htmlspecialchars($course['title']); ?>" >
                            <div class="p-8 flex flex-col justify-between flex-1">
                                <div>
                                    <h2 class="text-3xl font-bold text-slate-900 mb-2"><?php echo htmlspecialchars($course['title']); ?></h2>
                                    <div class="flex items-center flex-wrap gap-4 text-slate-500 mb-4">
                                        <span><i class="ph-bold ph-calendar"></i> <?php echo htmlspecialchars(date('M d, Y', strtotime($course['start_date']))); ?></span>
                                        <span><i class="ph-bold ph-map-pin"></i> <?php echo htmlspecialchars($course['location']); ?></span>
                                        <span class="font-bold text-lg text-slate-700">€<?php echo htmlspecialchars($course['price']); ?></span>
                                    </div>
                                    <p class="text-slate-600 mb-6"><?php echo nl2br(htmlspecialchars($course['description'])); ?></p>
                                </div>
                                <div class="flex items-center flex-wrap gap-4 mt-4">
                                    <a href="course-program.php?course_id=<?php echo $course['id']; ?>" class="btn-secondary font-bold py-2 px-6 rounded-lg">Explore Program</a>
                                    <a href="<?php echo htmlspecialchars($course['registration_form_link']); ?>" target="_blank" class="btn-primary font-bold py-2 px-6 rounded-lg">Register Now</a>
                                    <?php
                                        $today = new DateTime();
                                        $endDate = new DateTime($course['end_date']);
                                        if ($today > $endDate && !empty($course['feedback_form_link'])):
                                    ?>
                                        <a href="<?php echo htmlspecialchars($course['feedback_form_link']); ?>" target="_blank" class="btn-feedback font-bold py-2 px-6 rounded-lg">Give Feedback</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

<?php include '../include/footer.php'; ?>
