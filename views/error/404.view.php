<?= loadPartial('head'); ?>

<!-- Navbar -->
<?= loadPartial('navbar'); ?>

<section class="d-flex justify-content-center align-items-center vh-100 text-color-secondary">
    <div class="text-center px-4">
        <div class="border border-light rounded-4 p-4 shadow-lg">
            <h1 class="display-3 fw-bold text-color-primary mb-3">404 Error</h1>
            <p class="fs-4 mb-4">This page does not exist.</p>
            <a href="/" class="btn btn-accent fw-semibold px-4 py-2">
                <i class="fa fa-home me-2"></i>Back to Home
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<?= loadPartial('footer') ?>