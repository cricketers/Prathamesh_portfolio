<?php
include 'header.php';
include 'slider.php';
?>
<!--  Main banner section -->
<style>
  .card-img-top {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 0.5rem;
  }
  .card:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
  }
  .w3l-features-4 .icon {
    font-size: 3rem;
    display: inline-block;
}
.cardp:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease-in-out;
}
.bg-white:hover {
    transform: translateY(-5px);
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

    .hover-shadow:hover {
        transform: translateY(-10px);
        transition: all 0.3s ease-in-out;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    }

    .rounded-lg {
        border-radius: 15px !important;
    }
    .experience-top {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  .experience-top:hover {
    transform: translateY(-10px);
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.15);
  }

  h3 {
    font-size: 2rem;
    font-weight: 600;
  }

  .experience-top h4 {
    font-size: 1.2rem;
    font-weight: 500;
  }

  .experience-top h5 {
    font-size: 1rem;
    font-weight: 700;
  }

  .container {
    max-width: 1200px;
  }

  .py-5 {
    padding-top: 3rem;
    padding-bottom: 3rem;
  }
</style>
 <!--  //Main banner section -->
 <div class="w3l-content-photo-5 py-5" id="about" style="background-color: #f8f9fa;">
  <div class="content-main pt-lg-5 pt-md-3 pb-0">
    <div class="container">
      <div class="row align-items-center">
        
        <!-- Left Image Column -->
        <div class="col-lg-5 content-photo mb-4 mb-lg-0">
          <a href="#">
            <img src="assets/images/1704980572223.jpg" class="img-fluid rounded-circle shadow" alt="content-photo" />
          </a>
        </div>

        <!-- Right Content Column -->
        <div class="col-lg-7 content-left mt-lg-0 mt-5 pl-lg-5">
          <h3 class="display-5 text-dark">I'm Prathamesh Prakash Gatade</h3>
          <p class="mb-3 text-muted">I am a skilled professional with a strong foundation in web development and software engineering. I successfully completed a 4-month internship at Wolfox Service Pvt Ltd, Kolhapur, where I conducted code reviews, designed high-performing landing pages, and managed development milestones. I also engineered efficient databases and applications for backend support.</p>
          <p class="mb-4 text-muted">Proficient in MySQL, Bootstrap, HTML, CSS, PHP, Laravel PHP Framework, C Programming Language, and Software Testing, I am eager to leverage my skills and internship experience to secure opportunities in a dynamic and collaborative work environment.</p>
          
          <!-- Buttons -->
          <div class="d-flex flex-column flex-lg-row">
            <a href="about.php" class="btn btn-success  mb-3 mb-lg-0 me-lg-3">About Me</a>
            <a href="assets/document/prathamesh _gatade_Update2_034602.pdf" class="btn btn-success mb-3 mb-lg-0" download>Download CV</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
<section class="w3l-about bg-light py-2">
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
            <h4 class="fw-bold text-suceess mt-5 mb-4">Backend Skills</h4>
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
            <h4 class="fw-bold text-suceess mt-5 mb-4">Framework</h4>
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
            <h4 class="fw-bold text-suceess mt-5 mb-4">Applied Skills</h4>
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


<section class="w3l-features-4 " >
    <!-- Features Section -->
    <div class="features" id="services" style="background: linear-gradient(135deg,rgb(134, 241, 134),rgb(72, 248, 28));">
        <div class="container">
            <!-- Heading -->
            <div class="text-center mb-5">
                <h3 class="fw-bold display-6 text-dark">Live Projects</h3>
                <!-- <p class="text-muted mx-auto w-75">
                    I successfully completed a 4-month internship at Wolfox Service Pvt Ltd, Kolhapur. I worked under Bhagyashree Khot's guidance, conducted code reviews, debugged issues, and implemented necessary corrections. 
                    Designed and constructed high-performing landing pages using HTML and CSS, ensuring seamless integration.
                </p> -->
            </div>

            <!-- Live Project Section -->
            <!-- <div class="mt-5">
                <h3 class="text-center fw-bold mb-4 text-dark">Live Projects</h3>
            </div> -->

            <!-- Project Cards -->
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 bg-white rounded-lg hover-shadow">
                        <div class="card-body text-center">
                            <div class="icon text-primary mb-3">
                                <i class="fa fa-code fa-2x"></i>
                            </div>
                           <a href="project_details.php"> <h5 class="card-title fw-bold text-dark">Blog Management System</h5></a>
                            <p class="card-text text-muted">
                                HTML is the standard markup language for creating web pages and defining their structure. It provides the basic framework for web content by using tags to describe elements such as headings, paragraphs, images, links, and more.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 bg-white rounded-lg hover-shadow">
                        <div class="card-body text-center">
                            <div class="icon text-success mb-3">
                                <i class="fa fa-cogs fa-2x"></i>
                            </div>
                            <a href="project_details2.php"><h5 class="card-title fw-bold text-dark">EV Charging System</h5></a>
                            <p class="card-text text-muted">
                                I am developing an EV charging system in PHP, focusing on backend development. My work includes creating a master page for consistent layout, designing and managing the database, and integrating payment gateways for seamless transactions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 bg-white rounded-lg hover-shadow">
                        <div class="card-body text-center">
                            <div class="icon text-info mb-3">
                                <i class="fa fa-mobile fa-2x"></i>
                            </div>
                            <a href="project_details3.php"> <h5 class="card-title fw-bold text-dark">Dr. Chandru's Prakritik Chikitsa</h5></a>
                            <p class="card-text text-muted">
                                I am working on a project titled 'Dr. Chandru's Prakritik Chikitsa - Naturopathy,' focusing on the frontend. The design leverages HTML, CSS, and the Bootstrap framework for responsiveness, with integration of a third-party application for additional functionality.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0 bg-white rounded-lg hover-shadow">
                        <div class="card-body text-center">
                            <div class="icon text-info mb-3">
                                <i class="fa fa-mobile fa-2x"></i>
                            </div>
                            <a href="project_details4.php"> <h5 class="card-title fw-bold text-dark">District Political Institute CMS</h5></a>
                            <p class="card-text text-muted">
                            Created a dynamic and personalized website for Prasad Patil, focusing on showcasing his identity, political journey, and professional achievements. The website highlights his portfolio, political initiatives, and community service projects through a visually appealing and user-friendly design.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="w3l-feature-3" id="features">
	<div class="grid top-bottom">
		<div class="container">
			<div class="heading text-center mx-auto">
                <h3 class="head text-white">Project</h3>
                <p class="my-3 head text-white">  Web development involves creating websites and web applications for the internet or an intranet.
                  It encompasses a variety of tasks, including web design, front-end development, back-end development, and web server configuration.</p>
              </div>
			<div class="middle-section grid-column text-center mt-5 pt-3">
				<div class="three-grids-columns">
					<span class="fa fa-paint-brush"></span>
					<h4><a href="farm.html"  style="color: white;">Farm</a></h4>
					<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc</p>
					
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-shopping-bag"></span>
					<h4><a href="mobileshop.html"  style="color: white;">Mobile Shop</a></h4>
					<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc</p>
					
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-google-wallet"></span>
					<h4><a href="budget.html"  style="color: white;">Budget & Expanse Tracker</a></h4>
					<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc</p>
					
				</div>
			</div>
		</div>
	</div>
</section> -->
<div class="products-4" id="portfolio " style="background: linear-gradient(135deg, #e0f7fa, #e8f5e9);">
  <!-- Products4 block -->
  <div id="products4-block" class="text-center">
    <div class="container">
      <div class="heading text-center mx-auto mb-5">
        <h3 class="head">My Gallery</h3>
        <p class="my-3 head">"My Gallery" is a digital space designed to showcase and organize your collection of images, artwork, photographs, or any visual content that holds significance to you. It provides a personalized platform where you can curate, display, and share your creative works with others.</p>
      </div>
      <input id="tab1" type="radio" name="tabs" checked>
      <label class="tabtle btn btn-outline-primary me-2" for="tab1" data-filter="All">Projects</label>

      <input id="tab2" type="radio" name="tabs">
      <label class="tabtle btn btn-outline-primary me-2" for="tab2" data-filter="Web">Achievement</label>

      <input id="tab3" type="radio" name="tabs">
      <label class="tabtle btn btn-outline-primary" for="tab3" data-filter="Cric">Friend</label>

      <section id="content1" class="tab-content text-left mt-4">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/blog_project.jpg" data-lightbox="example-set">
                <img src="assets/images/blog_project.jpg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/project_details2.jpg" data-lightbox="example-set">
                <img src="assets/images/project_details2.jpg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/p3.jpg" data-lightbox="example-set">
                <img src="assets/images/project_details3.jpg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/project_details3.jpg" data-lightbox="example-set">
                <img src="assets/images/project_details3.jpg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <!-- Add more items as needed -->
        </div>
      </section>

      <section id="content2" class="tab-content text-left mt-4">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/CERTICATE.jpg" data-lightbox="example-set">
                <img src="assets/images/CERTICATE.jpg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/CERTICATE1.jpg" data-lightbox="example-set">
                <img src="assets/images/CERTICATE1.jpg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/CERTICATE2.jpg" data-lightbox="example-set">
                <img src="assets/images/CERTICATE2.jpg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <!-- Add more items as needed -->
        </div>
      </section>

      <section id="content3" class="tab-content text-left mt-4">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/sl4 (1).jpeg" data-lightbox="example-set">
                <img src="assets/images/sl4 (1).jpeg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/sl2.jpg" data-lightbox="example-set">
                <img src="assets/images/sl2.jpg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <a href="assets/images/sl1.jpeg" data-lightbox="example-set">
                <img src="assets/images/sl1.jpeg" class="card-img-top img-fluid" alt="">
              </a>
            </div>
          </div>
          <!-- Add more items as needed -->
        </div>
      </section>

    </div>
  </div>
</div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/lightbox-plus-jquery.min.js"></script>
<section class="services-12 " id="experience" style="background-color: #f8f9fa;">
  <div class="form-12-content">
    <div class="container">
      <div class="row g-4">
        
        <!-- Experiences Column -->
        <div class="col-lg-6">
          <h3 class="mb-5 text-white">Experiences</h3>
          <div class="experience-top  text-white p-4 rounded shadow-sm">
            <h5>March 2024 - July 2024</h5>
            <h4>Internship (Full Stack Developer in PHP)</h4>
            <p class="my-3  text-white">
              I successfully completed a 4-month internship at Wolfox Service Pvt Ltd, Kolhapur. I worked under Bhagyashree Khot's guidance, conducted code reviews, debugged issues, and implemented necessary corrections. 
              Designed and constructed high-performing landing pages using HTML and CSS, ensuring seamless integration.
            </p>
          </div>
        </div>
        
        <!-- Education Column -->
        <div class="col-lg-6">
          <h3 class="mb-5 text-white">Education</h3>
          
          <!-- Education Item 1 -->
          <div class="experience-top  text-white p-4 rounded shadow-sm mb-4">
            <h5>2024</h5>
            <h4>Chhatrapati Shahu Institute of Business Education And Research, Kolhapur</h4>
            <p class="my-3 text-white">Percentage: 63.76%</p>

          </div>
          
          <!-- Education Item 2 -->
          <div class="experience-top  text-white p-4 rounded shadow-sm mb-4">
            <h5>2019 - 2022</h5>
            <h4>Dattajirao Kadam Arts, Science and Commerce College, Ichalkaranji</h4>
            <p class="my-3 text-white">Percentage: 73.76%</p>
          </div>
          
          <!-- Education Item 3 -->
          <div class="experience-top  text-white p-4 rounded shadow-sm mb-4">
            <h5>2014 - 2016</h5>
            <h4>Vyankateshwara English School & Junior College, Ichalkaranji</h4>
            <p class="my-3 text-white">Percentage: 61.60%</p>
          </div>
          
          <!-- Education Item 4 -->
          <div class="experience-top  text-white p-4 rounded shadow-sm mb-4">
            <h5>2014</h5>
            <h4>Shri Mahadev Dadoba Gatade Vidyalay, Ingali</h4>
            <p class="my-3 text-white">Percentage: 69.60%</p>
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
