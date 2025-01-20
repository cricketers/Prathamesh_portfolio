<?php
include 'header.php';
?>
<style>
    /* Card Styling */
    .card {
        max-width: 350px;
        height: 400px;
        margin: 0 auto; /* Center cards */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    /* Card Hover Effects */
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
    }

    /* Card Title Styling */
    .card-title {
        font-size: 1.25rem;
        font-weight: bold;
        color: #007bff;
    }

    /* Card Text */
    .card-text {
        font-size: 1rem;
        color: #6c757d;
    }

    /* Button Styling */
    .btn-primary {
        background-color:rgb(113, 117, 121);
        border-color:rgb(69, 216, 88);
        padding: 0.5rem 1.5rem;
        font-size: 1rem;
        border-radius: 30px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    /* Button Hover Effects */
    .btn-primary:hover {
        background-color:rgb(113, 117, 121);;
        border-color: rgb(113, 117, 121);;
        transform: translateY(-3px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .card {
            margin-bottom: 30px;
        }
    }
</style>

<section class="w3l-service-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Project</p>
      </div>
  </div>
</section>

<section class="w3l-cards-4 py-5">
    <div class="container py-md-5">
        <div class="row justify-content-center text-center">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h5 class="card-title text-black">Blog Management System</h5>
                        <p class="card-text text-muted">
                            I am developing a blog management system in PHP, working on both the frontend and backend. The frontend uses HTML, CSS, and the Bootstrap framework for responsive design, while the backend handles core PHP functionality. Additionally, a third-party application is integrated for a pure chat contact form.
                        </p>
                        <a href="project_details.php" class="btn btn-success mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h5 class="card-title text-black">EV Charging System</h5>
                        <p class="card-text text-muted">
                            I am developing an EV charging system in PHP, focusing on backend development. My work includes creating a master page for consistent layout, designing and managing the database, and integrating payment gateways for seamless transactions.
                        </p>
                        <a href="project_details2.php" class="btn btn-success mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h5 class="card-title text-black">Dr. Chandru's Prakritik Chikitsa</h5>
                        <p class="card-text text-muted">
                            I am working on a project titled 'Dr. Chandru's Prakritik Chikitsa - Naturopathy,' focusing on the frontend. The design leverages HTML, CSS, and the Bootstrap framework for responsiveness, with integration of a third-party application for additional functionality.
                        </p>
                        <a href="project_details3.php" class="btn btn-success mt-3">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-body">
                        <h5 class="card-title text-black">District Political Institute CMS</h5>
                        <p class="card-text text-muted">
                            Created a dynamic and personalized website for Prasad Patil, focusing on showcasing his identity, political journey, and professional achievements. The website highlights his portfolio, political initiatives, and community service projects through a visually appealing and user-friendly design.
                        </p>
                        <a href="project_details4.php" class="btn btn-success mt-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- grids block 5 -->
 <?php
include 'footer.php';
?>