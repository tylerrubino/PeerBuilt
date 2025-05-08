<?= loadPartial('head'); ?>

<!-- Navbar -->
<?= loadPartial('navbar'); ?>

<!-- Banner CTA -->
<?= loadPartial('top-banner'); ?>

<!-- Post a Project Form -->
<!-- <section class="d-flex justify-content-center align-items-center mt-5 mb-5">
    <div class="bg-white p-4 p-md-5 rounded-4 shadow-lg w-100" style="max-width: 700px;">
        <h2 class="fs-2 fw-bold text-center mb-4 text-color-primary">Create Project Listing</h2>

        <form method="POST">
            <h4 class="text-muted text-center mb-4">Project Info</h4>

            <div class="mb-3">
                <input type="text" name="title" class="form-control rounded" placeholder="Project Title">
            </div>

            <div class="mb-3">
                <textarea name="description" class="form-control rounded" placeholder="Project Description" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <input type="text" name="tech_stack" class="form-control rounded" placeholder="Preferred Tech Stack">
            </div>

            <div class="mb-3">
                <input type="text" name="timeline" class="form-control rounded" placeholder="Project Timeline">
            </div>

            <h4 class="text-muted text-center mb-4">Organizer Info</h4>

            <div class="mb-3">
                <input type="text" name="organizer" class="form-control rounded" placeholder="Organizer Name / School">
            </div>

            <div class="mb-3">
                <input type="email" name="email" class="form-control rounded" placeholder="Contact Email">
            </div>

            <div class="mb-3">
                <input type="text" name="tags" class="form-control rounded" placeholder="Tags (e.g. AI, Web3, Mobile)">
            </div>

            <button type="submit" class="btn btn-accent w-100 py-2 fw-bold">Save Project</button>

            <a href="/" class="btn navbar-custom w-100 py-2 mt-2 text-white fw-bold">Cancel</a>
        </form>
    </div>
</section> -->
<section class="d-flex justify-content-center align-items-center mt-5 mb-5">
    <div class="bg-white p-4 p-md-5 rounded-4 shadow-lg w-100" style="max-width: 700px;">
        <h2 class="fs-2 fw-bold text-center mb-4 text-color-primary">Create Project Listing</h2>

        <!-- <form method="POST"> -->
        <!-- Project Info -->
        <!-- <h4 class="text-muted text-center mb-4">Project Info</h4>

            <div class="mb-3">
                <label for="title" class="form-label fw-semibold">Project Title</label>
                <input type="text" name="title" class="form-control rounded" placeholder="e.g. ResumAI - AI Resume Assistant">
            </div> -->

        <!-- <div class="mb-3">
                <label for="short_description" class="form-label fw-semibold">Short Description</label>
                <input type="text" name="short_description" class="form-control rounded" placeholder="1–2 sentence summary of your project">
            </div> -->

        <!-- <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Description</label>
                <textarea name="description" class="form-control rounded" placeholder="Explain what the project is, its goals, and any background." rows="5"></textarea>
            </div>

            <div class="mb-3">
                <label for="tech_stack" class="form-label fw-semibold">Preferred Tech Stack</label>
                <input type="text" name="tech_stack" class="form-control rounded" placeholder="e.g. React, Python, Firebase">
            </div>

            <div class="mb-3">
                <label for="timeline" class="form-label fw-semibold">Estimated Timeline</label>
                <input type="text" name="timeline" class="form-control rounded" placeholder="e.g. 2 weeks, 1 month, semester">
            </div>

            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="open_remote" id="open_remote">
                <label class="form-check-label" for="open_remote">
                    Open to remote collaborators from other schools
                </label>
            </div> -->

        <!-- Organizer Info -->
        <!-- <h4 class="text-muted text-center mt-5 mb-4">Organizer Info</h4>

            <div class="mb-3">
                <label for="organizer" class="form-label fw-semibold">Organizer Name or School</label>
                <input type="text" name="organizer" class="form-control rounded" placeholder="e.g. Tyler @ Carleton University">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Contact Email</label>
                <input type="email" name="email" class="form-control rounded" placeholder="Used for notifications or team invites">
            </div>

            <div class="mb-3">
                <label for="tags" class="form-label fw-semibold">Project Tags</label>
                <input type="text" name="tags" class="form-control rounded" placeholder="e.g. AI, Social Impact, Web3">
            </div> -->

        <!-- Submit -->
        <!-- <button type="submit" class="btn btn-accent w-100 py-2 fw-bold">Save & Continue</button>

            <a href="/" class="btn navbar-custom w-100 py-2 mt-2 text-white fw-bold">Cancel</a>
        </form> -->
        <form method="POST">
            <!-- Project Info -->
            <h4 class="text-muted text-center mb-4">Project Info</h4>

            <div class="mb-3">
                <label for="title" class="form-label fw-semibold">Project Title</label>
                <input type="text" name="title" class="form-control rounded" placeholder="e.g. ResumAI - AI Resume Assistant">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label fw-semibold">Description</label>
                <textarea name="description" class="form-control rounded" placeholder="Explain what the project is, its goals, and any background." rows="5"></textarea>
            </div>

            <div class="mb-3">
                <label for="tech_stack" class="form-label fw-semibold">Preferred Tech Stack</label>
                <input type="text" name="tech_stack" class="form-control rounded" placeholder="e.g. React, Python, Firebase">
            </div>

            <div class="mb-3">
                <label for="tags" class="form-label fw-semibold">Project Tags</label>
                <input type="text" name="tags" class="form-control rounded" placeholder="e.g. AI, Social Impact, Web3">
            </div>

            <div class="mb-3">
                <label for="timeline" class="form-label fw-semibold">Estimated Timeline</label>
                <input type="text" name="timeline" class="form-control rounded" placeholder="e.g. 2 weeks, 1 month, semester">
            </div>

            <div class="mb-3">
                <label for="commitment" class="form-label fw-semibold">Expected Weekly Commitment</label>
                <input type="text" name="commitment" class="form-control rounded" placeholder="e.g. 5 hrs/week, Flexible">
            </div>

            <div class="mb-3">
                <label for="team_size" class="form-label fw-semibold">Team Size</label>
                <input type="text" name="team_size" class="form-control rounded" placeholder="e.g. 2/5 filled">
            </div>

            <div class="mb-3">
                <label for="roles_needed" class="form-label fw-semibold">Roles Needed</label>
                <textarea name="roles_needed" class="form-control rounded" placeholder="e.g. UI/UX designer, backend dev" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="github_link" class="form-label fw-semibold">GitHub or Project Link (optional)</label>
                <input type="url" name="github_link" class="form-control rounded" placeholder="e.g. https://github.com/your-project">
            </div>

            <!-- Organizer Info -->
            <h4 class="text-muted text-center mt-5 mb-4">Organizer Info</h4>

            <div class="mb-3">
                <label for="institution" class="form-label fw-semibold">Your School / Institution</label>
                <input type="text" name="institution" class="form-control rounded" placeholder="e.g. Carleton University">
            </div>

            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="open_to_other_schools" id="open_to_other_schools">
                <label class="form-check-label" for="open_to_other_schools">
                    Open to remote collaborators from other schools
                </label>
            </div>

            <div class="mb-3">
                <label for="contact_email" class="form-label fw-semibold">Contact Email</label>
                <input type="email" name="contact_email" class="form-control rounded" placeholder="Used for team communication or invites">
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-accent w-100 py-2 fw-bold">Save & Continue</button>
            <a href="/" class="btn navbar-custom w-100 py-2 mt-2 text-white fw-bold">Cancel</a>
        </form>
    </div>
</section>

<!-- Footer -->
<?= loadPartial('footer') ?>