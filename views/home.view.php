<?= loadPartial('head'); ?>

<!-- Navbar -->
<?= loadPartial('navbar'); ?>

<!-- Showcase -->
<?= loadPartial('showcase-search'); ?>

<!-- Banner CTA -->
<?= loadPartial('top-banner'); ?>

<!-- Featured Projects Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-4 border-bottom pb-2 text-dark">Featured Projects</h2>
        <div class="row g-4">
            <!-- Project Card -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-code text-color-primary"></i>ResumAI</h5>
                        <p class="card-text">A resume builder that uses LLM to suggest personalized bullet points based on experience.</p>
                        <ul class="list-group list-group-flush my-3">
                            <li class="list-group-item">
                                <i class="fa-solid fa-laptop-code me-2 text-secondary"></i>
                                React, Flask, OpenAI API
                            </li>
                            <li class="list-group-item">
                                <i class="fa-solid fa-university me-2 text-secondary"></i>
                                Carleton University
                            </li>
                            <li class="list-group-item">
                                <i class="fa-solid fa-tags me-2 text-secondary"></i>
                                AI, Resumes, SaaS
                            </li>
                        </ul>
                        <a href="#" class="btn btn-accent w-100">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Repeat cards as needed -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-database text-color-primary"></i>Cryptofolio</h5>
                        <p class="card-text">Track and chart your crypto portfolio over time, with Telegram alert integration.</p>
                        <ul class="list-group list-group-flush my-3">
                            <li class="list-group-item">
                                <i class="fa-solid fa-laptop-code me-2 text-secondary"></i>
                                Node.js, PostgreSQL, Bootstrap
                            </li>
                            <li class="list-group-item">
                                <i class="fa-solid fa-university me-2 text-secondary"></i>
                                University of Waterloo
                            </li>
                            <li class="list-group-item">
                                <i class="fa-solid fa-tags me-2 text-secondary"></i>
                                Crypto, Finance, Fullstack
                            </li>
                        </ul>
                        <a href="#" class="btn btn-accent w-100">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa-solid fa-shield-halved text-color-primary"></i>Campus Security App</h5>
                        <p class="card-text">A real-time location-based app that lets students report suspicious activity anonymously.</p>
                        <ul class="list-group list-group-flush my-3">
                            <li class="list-group-item">
                                <i class="fa-solid fa-laptop-code me-2 text-secondary"></i>
                                Swift, Firebase
                            </li>
                            <li class="list-group-item">
                                <i class="fa-solid fa-university me-2 text-secondary"></i>
                                UBC
                            </li>
                            <li class="list-group-item">
                                <i class="fa-solid fa-tags me-2 text-secondary"></i>
                                Mobile, Security, Social Impact
                            </li>
                        </ul>
                        <a href="#" class="btn btn-accent w-100">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Show All Projects Button -->
        <div class="text-center mt-4">
            <a href="/listings" class="btn btn-accent">
                <i class="fa fa-arrow-circle-right me-2"></i>
                View All Projects
            </a>
        </div>
    </div>
</section>

<!-- Sticky Bottom Banner -->
<?= loadPartial('bottom-banner') ?>

<!-- Footer -->
<?= loadPartial('footer') ?>