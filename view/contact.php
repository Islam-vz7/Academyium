<?php include '../include/header.php'; ?>

    <!-- Main Content -->

    <body>
        <style>
        body { font-family: 'Montserrat', sans-serif; }
        .nav-link { transition: color 0.3s ease; font-weight: 500; }
        .nav-link:hover, .nav-link.active { color: #2563eb; }
        .btn-primary { background-color: #2563eb; color: #ffffff; transition: background-color 0.3s ease, transform 0.2s ease; box-shadow: 0 4px 14px 0 rgba(37, 99, 235, 0.39); cursor: pointer; }
        .btn-primary:hover { background-color: #1d4ed8; transform: translateY(-2px); }
        .section-title { border-bottom: 3px solid #2563eb; padding-bottom: 0.75rem; display: inline-block; }
        .form-input { background-color: #f8fafc; border: 1px solid #cbd5e1; border-radius: 0.5rem; padding: 0.75rem 1rem; width: 100%; transition: border-color 0.3s ease, box-shadow 0.3s ease; }
        .form-input:focus { outline: none; border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.4); }
        .contact-info-card { background-color: #ffffff; }
    </style>
    </body>
    <main class="pt-32">
        <section id="contact" class="pb-20">
            <div class="container mx-auto px-6">
                <h1 class="section-title text-4xl font-bold mb-12 text-center text-slate-900">Get In Touch</h1>
                <p class="text-center text-lg max-w-3xl mx-auto mb-16 text-slate-600">Have questions about our courses, registration, or partnership opportunities? We're here to help. Please use the form below or contact us directly.</p>
                <div class="flex flex-col lg:flex-row gap-10">
                    <div class="lg:w-2/3 bg-white p-8 rounded-lg shadow-xl">
                        <form id="contactForm" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div><label for="name" class="block mb-2 font-semibold text-slate-700">Full Name</label><input type="text" id="name" name="name" class="form-input" required></div>
                                <div><label for="email" class="block mb-2 font-semibold text-slate-700">Email Address</label><input type="email" id="email" name="email" class="form-input" required></div>
                            </div>
                            <div><label for="subject" class="block mb-2 font-semibold text-slate-700">Subject</label><input type="text" id="subject" name="subject" class="form-input" required></div>
                            <div><label for="message" class="block mb-2 font-semibold text-slate-700">Message</label><textarea id="message" name="message" rows="6" class="form-input" required></textarea></div>
                            <div class="pt-2"><button type="submit" class="btn-primary font-bold py-3 px-8 rounded-lg text-lg w-full">Send Message</button></div>
                        </form>
                    </div>
                    <div class="lg:w-1/3">
                        <div class="space-y-6">
                            <div class="contact-info-card p-6 rounded-lg shadow-xl flex items-start gap-4 bg-white">
                                <i class="ph-bold ph-envelope-simple text-3xl text-blue-600 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Email Us</h3>
                                    <p class="text-slate-600">For general inquiries:</p>
                                    <a href="mailto:info@aemis-training.com" class="text-blue-500 hover:underline">info@aemis-training.com</a>
                                </div>
                            </div>
                            <div class="contact-info-card p-6 rounded-lg shadow-xl flex items-start gap-4 bg-white">
                                <i class="ph-bold ph-phone text-3xl text-blue-600 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Call Us</h3>
                                    <p class="text-slate-600">Mon-Fri, 9am - 5pm CET:</p>
                                    <a href="tel:+420123456789" class="text-blue-500 hover:underline">+420 123 456 789</a>
                                </div>
                            </div>
                            <div class="contact-info-card p-6 rounded-lg shadow-xl flex items-start gap-4 bg-white">
                                <i class="ph-bold ph-map-pin-line text-3xl text-blue-600 mt-1"></i>
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900">Our Headquarters</h3>
                                    <p class="text-slate-600">Prague Institute for Advanced Medical Studies, Prague, Czech Republic</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include '../include/footer.php'; ?>
