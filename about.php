<?php
include 'header.php';
?>

<style>
    /* Title Style */
    .title-style {
        font-family: 'Roboto', sans-serif;
        font-size: 2.5rem;
        color: #007bff;
    }

    /* Responsive Heading */
    @media (max-width: 768px) {
        .title-style {
            font-size: 2rem;
        }
    }

    /* Button Style */
    .btn-style {
        background-color:rgb(131, 133, 134);
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 30px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    /* Hover Effect for Button */
    .btn-style:hover {
        background-color: rgb(131, 133, 134);
        transform: translateY(-3px);
    }

    /* Shadow effect on Button */
    .hover-shadow:hover {
        box-shadow: 0 8px 16px rgba(93, 94, 95, 0.5);
    }
</style>

<section class="w3l-about-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; About</p>
     </div>
  </div>
</section>
<!-- w3l-content-photo-5 -->
<div class="w3l-content-photo-5 py-5" id="about">
    <div class="content-main pt-lg-5 pt-md-3 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 content-photo">
                    <a href="#"><img src="assets/images/1704980572223.jpg" class="img-fluid" alt="content-photo"></a>
                </div>
                <div class="col-lg-7 content-left mt-lg-0 mt-5 pl-lg-5">
                    <h3>I'm Prathamesh Prakash Gatade</h3>
                    <p class="mb-3 text-black fs-sm-3">I am a skilled professional with a strong foundation in web development and software engineering. I successfully completed a 4-month internship at Wolfox Service Pvt Ltd, Kolhapur, where I conducted code reviews, designed high-performing landing pages, and managed development milestones. I also engineered efficient databases and applications for backend support.</p>
          <p class="mb-4 text-black">Proficient in MySQL, Bootstrap, HTML, CSS, PHP, Laravel PHP Framework, C Programming Language, and Software Testing, I am eager to leverage my skills and internship experience to secure opportunities in a dynamic and collaborative work environment.</p>
                    <a href="assets/document/prathamesh _gatade_Update2_034602.pdf" class="btn btn-success mt-lg-5 mt-4" download>Download CV</a>
                    <!-- <a href="services.html" class="btn-theme2 btn mt-lg-5 mt-4">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<section class="w3l-timeline-1 text-center py-5">
    <div class="container py-lg-5 py-4">
        <div class="mx-auto" style="max-width:800px">
            <!-- Section Heading -->
            <h3 class="title-style mb-4 display-4 font-weight-bold text-black">Why Hire Me for Your Next Project?</h3>

            <!-- Section Description -->
            <p class="mb-4 text-black">
            . Designed and constructed high-performing
landing pages using HTML and CSS, ensuring seamless integration and cross-browser compatibility. Engineered efficient
databases, applications, and servers to uphold backend support for websites

            </p>

            <!-- Learn More Button -->
            <a href="project.php" class="btn btn-success btn-lg mt-5 py-2 px-4 rounded-pill hover-shadow">
                Learn More
            </a>
        </div>
    </div>
</section>

<!--My Skills-->
<section class="w3l-about bg-light py-5">
    <!-- Technical Skills Section -->
    <div class="skills-bars">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h3 class="display-6 fw-bold">Technical Skills</h3>
                <p class="text-muted mx-auto w-75">
                    Skills are the foundation of success, enabling us to tackle challenges, seize opportunities, and achieve goals. These technical competencies showcase my expertise and commitment to professional growth.
                </p>
            </div>

            <!-- Frontend Skills -->
            <h4 class="fw-bold  mb-4">Frontend Skills</h4>
            <div class="row g-4">
                <!-- Skill 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">HTML</h5>
                            <div class="progress my-3" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small text-muted">Proficient in HTML for structuring webpages efficiently.</p>
                        </div>
                    </div>
                </div>

                <!-- Skill 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">CSS</h5>
                            <div class="progress my-3" style="height: 8px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small text-muted">Expert in styling websites with CSS and animations.</p>
                        </div>
                    </div>
                </div>

                <!-- Skill 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">Bootstrap</h5>
                            <div class="progress my-3" style="height: 8px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 80%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small text-muted">Skilled in building responsive designs with Bootstrap.</p>
                        </div>
                    </div>
                </div>

                <!-- Skill 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">JavaScript</h5>
                            <div class="progress my-3" style="height: 8px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small text-muted">Strong knowledge in dynamic scripting with JavaScript.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backend Skills -->
            <h4 class="fw-bold  mt-5 mb-4">Backend Skills</h4>
            <div class="row g-4">
                <!-- Skill 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">PHP</h5>
                            <div class="progress my-3" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small text-muted">Extensive experience in backend programming with PHP.</p>
                        </div>
                    </div>
                </div>

                <!-- Skill 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">MySQL</h5>
                            <div class="progress my-3" style="height: 8px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small text-muted">Proficient in database design and query optimization.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Framework Skills -->
            <h4 class="fw-bold  mt-5 mb-4">Framework</h4>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">Laravel</h5>
                            <div class="progress my-3" style="height: 8px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small text-muted">Experienced in building applications using Laravel framework.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Applied Skills -->
            <h4 class="fw-bold  mt-5 mb-4">Applied Skills</h4>
            <div class="row g-4">
                <!-- Skill 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">PHPMailer</h5>
                            <div class="progress my-3" style="height: 8px;">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 65%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small text-muted">Integrated email gateways using PHPMailer.</p>
                        </div>
                    </div>
                </div>

                <!-- Skill 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card shadow border-0 text-center">
                        <div class="card-body">
                            <h5 class="fw-bold">Payment Gateways</h5>
                            <div class="progress my-3" style="height: 8px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="small text-muted">Skilled in integrating payment solutions securely.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--My Skills end-->





 <!-- grids block 5 -->
<?php
include 'footer.php';
?>

