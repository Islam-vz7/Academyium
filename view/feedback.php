<?php

include '../include/header.php'; 

// Get the form link from the URL, or set to empty if not provided
$form_link = isset($_GET['form_link']) ? $_GET['form_link'] : '';
?>

<main class="pt-24 pb-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="form-container">
            <div class="feed-form-header">
                <h1>Course Feedback</h1>
                <p>We value your input. Please let us know how we did.</p>
            </div>
            <div class="p-2 md:p-4 bg-slate-100">
                <?php if (!empty($form_link)): ?>
                    <div class="iframe-wrapper">
                        <iframe src="<?php echo htmlspecialchars($form_link); ?>">Loading…</iframe>
                    </div>
                <?php else: ?>
                    <div class="error-message">
                        <h2 class="text-2xl font-bold text-slate-700">Invalid Link</h2>
                        <p class="mt-2">The feedback form link is missing or invalid. Please go back to the courses page and try again.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php include '../include/footer.php'; ?>
