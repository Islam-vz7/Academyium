<?php include '../include/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center text-center text-white">
        <div class="hero-overlay absolute inset-0"></div>
        <video autoplay muted loop class="hero-video">
            <source src="https://www.aemis-er.com/wp-content/uploads/2023/01/AEMIS-2023-HERO-video-1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="relative z-10 px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Empowering Medical Professionals</h1>
            <p class="text-lg md:text-2xl mb-8 max-w-3xl mx-auto">Providing cutting-edge, hands-on training courses for emergency, trauma, and critical care specialists.</p>
            <a href="#courses" class="btn-primary font-bold py-3 px-8 rounded-lg text-lg">Explore Our Courses</a>
        </div>
    </section>


    <!-- Featured Courses Section -->
    <section id="courses" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-4xl font-bold mb-16 text-center text-slate-900">Featured Courses</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Course Card 1 -->
                <div class="course-card rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?q=80&w=2070&auto=format&fit=crop" alt="Advanced Trauma Course" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Advanced Trauma Interventions</h3>
                        <p class="text-slate-600 mb-4 h-24">Master life-saving surgical skills for critical trauma patients in this intensive hands-on workshop.</p>
                        <a href="courses.php#trauma" class="font-bold text-blue-600 hover:underline">Learn More &rarr;</a>
                    </div>
                </div>
                <!-- Course Card 2 -->
                <div class="course-card rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1629233639920-7a71331d5106?q=80&w=2070&auto=format&fit=crop" alt="Pediatric Emergency Course" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Pediatric Emergency Care</h3>
                        <p class="text-slate-600 mb-4 h-24">Gain confidence in managing critically ill children with our specialized simulation-based training.</p>
                        <a href="courses.php#pediatric" class="font-bold text-blue-600 hover:underline">Learn More &rarr;</a>
                    </div>
                </div>
                <!-- Course Card 3 -->
                <div class="course-card rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67?q=80&w=1974&auto=format&fit=crop" alt="Ultrasound Course" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Critical Care Ultrasound</h3>
                        <p class="text-slate-600 mb-4 h-24">Develop proficiency in point-of-care ultrasound (POCUS) for rapid diagnosis and procedural guidance.</p>
                        <a href="courses.php#ultrasound" class="font-bold text-blue-600 hover:underline">Learn More &rarr;</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="courses.php" class="btn-primary font-bold py-3 px-8 rounded-lg text-lg">View All Courses</a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-slate-100">
        <div class="container mx-auto px-6">
            <h2 class="section-title text-4xl font-bold mb-16 text-center text-slate-900">Training in Action</h2>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop" alt="Training session 1" class="gallery-img w-full h-full object-cover"></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070&auto=format&fit=crop" alt="Training session 2" class="gallery-img w-full h-full object-cover"></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1614926857224-a95524561033?q=80&w=1974&auto=format&fit=crop" alt="Training session 3" class="gallery-img w-full h-full object-cover"></div>
                    <div class="swiper-slide"><img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop" alt="Training session 4" class="gallery-img w-full h-full object-cover"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

<?php include '../include/footer.php'; ?>
