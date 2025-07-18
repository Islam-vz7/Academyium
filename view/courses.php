<?php include '../include/header.php'; ?>

    <!-- Main Content -->
    <main class="pt-24">
        <section class="py-20">
            <div class="container mx-auto px-6">
                <h1 class="section-title text-4xl font-bold mb-16 text-center text-slate-900">Our Courses</h1>
                <div class="space-y-16">
                    <!-- Course 1: Trauma -->
                    <div id="trauma" class="course-detail-card rounded-lg shadow-xl overflow-hidden flex flex-col md:flex-row">
                        <img src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?q=80&w=2070&auto=format&fit=crop" alt="Advanced Trauma Course" class="w-full md:w-1/3 h-64 md:h-auto object-cover">
                        <div class="p-8 flex flex-col justify-between">
                            <div>
                                <h2 class="text-3xl font-bold text-slate-900 mb-2">Advanced Trauma Interventions</h2>
                                <p class="text-slate-600 mb-6">This intensive 2-day workshop is designed for clinicians who want to master life-saving surgical skills for critical trauma patients. Participants will engage in high-fidelity simulations and hands-on procedural labs.</p>
                                <h4 class="font-bold mb-2">Key Skills Covered:</h4>
                                <ul class="list-disc list-inside text-slate-600 space-y-1 mb-6">
                                    <li>Emergency Thoracotomy</li>
                                    <li>Surgical Airway (Cricothyrotomy)</li>
                                    <li>Advanced Vascular Access</li>
                                    <li>Chest Decompression Techniques</li>
                                </ul>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-blue-600">€1500</span>
                                <a href="course-registeration.php?course=trauma" class="btn-primary font-bold py-2 px-6 rounded-lg">Register for this Course</a>
                            </div>
                        </div>
                    </div>
                    <!-- Course 2: Pediatrics -->
                    <div id="pediatric" class="course-detail-card rounded-lg shadow-xl overflow-hidden flex flex-col md:flex-row">
                        <img src="https://images.unsplash.com/photo-1629233639920-7a71331d5106?q=80&w=2070&auto=format&fit=crop" alt="Pediatric Emergency Course" class="w-full md:w-1/3 h-64 md:h-auto object-cover">
                        <div class="p-8 flex flex-col justify-between">
                            <div>
                                <h2 class="text-3xl font-bold text-slate-900 mb-2">Pediatric Emergency Care</h2>
                                <p class="text-slate-600 mb-6">Gain confidence and competence in managing critically ill children. This course uses specialized simulation-based training to cover the unique challenges of pediatric resuscitation, airway management, and vascular access.</p>
                                <h4 class="font-bold mb-2">Key Skills Covered:</h4>
                                <ul class="list-disc list-inside text-slate-600 space-y-1 mb-6">
                                    <li>Pediatric Advanced Life Support (PALS) Scenarios</li>
                                    <li>Intraosseous (IO) Access</li>
                                    <li>Pediatric Airway Management</li>
                                    <li>Common Pediatric Emergencies</li>
                                </ul>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-blue-600">€1100</span>
                                <a href="course-registeration.php?course=pediatric" class="btn-primary font-bold py-2 px-6 rounded-lg">Register for this Course</a>
                            </div>
                        </div>
                    </div>
                    <!-- Course 3: Ultrasound -->
                    <div id="ultrasound" class="course-detail-card rounded-lg shadow-xl overflow-hidden flex flex-col md:flex-row">
                        <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67?q=80&w=1974&auto=format&fit=crop" alt="Ultrasound Course" class="w-full md:w-1/3 h-64 md:h-auto object-cover">
                        <div class="p-8 flex flex-col justify-between">
                            <div>
                                <h2 class="text-3xl font-bold text-slate-900 mb-2">Critical Care Ultrasound</h2>
                                <p class="text-slate-600 mb-6">Develop proficiency in point-of-care ultrasound (POCUS) for rapid diagnosis and procedural guidance. This course offers extensive hands-on scanning time with live models and simulators under expert guidance.</p>
                                <h4 class="font-bold mb-2">Key Skills Covered:</h4>
                                <ul class="list-disc list-inside text-slate-600 space-y-1 mb-6">
                                    <li>eFAST & RUSH Protocols</li>
                                    <li>Basic Echocardiography in Life Support</li>
                                    <li>Ultrasound-Guided Vascular Access</li>
                                    <li>Lung and Abdominal Ultrasound</li>
                                </ul>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-blue-600">€950</span>
                                <a href="course-registeration.php?course=ultrasound" class="btn-primary font-bold py-2 px-6 rounded-lg">Register for this Course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include '../include/footer.php'; ?>
