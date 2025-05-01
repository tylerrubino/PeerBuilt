<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeerBuilt | Build Projects Together</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom px-4 py-2 position-relative">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="#"><i class="fas fa-terminal me-1"></i>PeerBuilt</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                <div class="d-flex flex-column flex-lg-row gap-2 mt-3 mt-lg-0">
                    <a href="/signup" class="btn nav-btn">Signup</a>
                    <a href="/login" class="btn nav-btn">Login</a>
                    <a href="/post" class="btn btn-accent d-flex align-items-center justify-content-center gap-2">
                        <i class="fa fa-plus"></i>
                        <span>Post Project</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-hero text-white text-center py-5">
        <div class="container px-4">
            <h1 class="display-5 fw-bold mb-4">Build Real Projects with Students Worldwide</h1>
            <form class="row g-2 justify-content-center">
                <div class="col-12 col-md-4">
                    <input type="text" class="form-control rounded" placeholder="Tech stack or title">
                </div>
                <div class="col-12 col-md-4">
                    <input type="text" class="form-control rounded" placeholder="School name (optional)">
                </div>
                <div class="col-12 col-md-auto">
                    <button class="btn btn-accent w-100 rounded" type="submit">Search</button>
                </div>
            </form>
        </div>
    </header>

    <!-- Banner CTA -->
    <section class="bg-banner text-white text-center py-5">
        <div class="container">
            <h2 class="fw-semibold mb-2">Peer Driven. Project Powered.</h2>
            <p class="lead">Start a project, find teammates, and grow your skills. From student side hustles to open source.</p>
        </div>
    </section>

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
                <a href="projects.html" class="btn btn-accent">
                    <i class="fa fa-arrow-circle-right me-2"></i>
                    View All Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Sticky Bottom Banner -->
    <div class="sticky-bottom-banner d-flex flex-column flex-md-row align-items-center justify-content-between py-3 px-4">

        <div class="text-center text-md-start mb-2 mb-md-0">
            <h5 class="mb-1 fw-semibold text-white">Looking to Collaborate?</h5>
            <p class="mb-0 text-light">Post your project now and find talented students to build with.</p>
        </div>
        <a href="post.html" class="btn navbar-custom text-light fw-bold mt-2 mt-md-0">
            <i class="fa fa-edit me-2"></i> Post a Project
        </a>
    </div>




    <!-- Footer -->
    <footer class="bg-light text-center py-4 text-muted">
        <div class="container">
            &copy; 2025 PeerBuilt. Made by students, for students.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>