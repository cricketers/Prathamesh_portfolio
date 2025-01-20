<?php
include 'header.php';
?>

      <section class="w3l-service-breadcrum">
        <div class="breadcrum-bg">
          <div class="container py-5">
            <p><a href="index.php">Home</a> &nbsp; / &nbsp; <a href="project.php">Project</a></p>
            </div>
        </div>
      </section>
      <!-- project detail -->
<section>
<div class="container mt-5">
        <!-- Project Header -->
        <div class="row">
            <div class="col-12">
                <img src="assets/images/blog_project.jpg" alt="Project Main Image" class="img-fluid main-image">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h1 class="project-title">Blog Mangement System</h1>
            </div>
        </div>

        <!-- Project Details -->
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12">
                <p class="project-description text-capitalize fs-4">
                I am developing a blog management system in PHP, focusing on both frontend and backend. The frontend is built using HTML, CSS, and the Bootstrap framework for a responsive and user-friendly design. On the backend, core PHP handles functionality such as post management and database operations. Additionally, I have integrated a third-party application to implement a pure chat contact form, enhancing user interaction and support capabilities. This system is designed to ensure efficiency, scalability, and ease of use, allowing seamless management of blog posts while providing a modern and engaging user experience. </p>
                <!-- <p class="project-description">
                    या योजनेचा लाभ घेण्यासाठी शेतकऱ्यांनी निर्धारित अर्ज प्रक्रियेद्वारे नावनोंदणी करणे आवश्यक आहे. सरकारच्या या उपक्रमामुळे शेतकऱ्यांचे आत्मविश्वास वाढेल, कर्जमुक्तीमुळे त्यांची आर्थिक स्थिती सुधारेल आणि शेती क्षेत्रात नवे तंत्रज्ञान व सुधारणा आणण्यासाठी भांडवल उपलब्ध होईल.
                </p> -->
            </div>
        </div>

        <!-- Comments Section -->
        <!-- <div class="row mt-5">
            <div class="col-12">
                <h3>टिप्पण्या</h3>
                <div class="comment-box">
                    <p><strong>Steven Rich</strong> <span class="text-muted">(Dec 26, 2019)</span></p>
                    <p>On the other hand, we denounce with righteous indignation dislike men which toil and some great pleasure.</p>
                </div>
                <div class="comment-box">
                    <p><strong>William Cobus</strong> <span class="text-muted">(Dec 19, 2019)</span></p>
                    <p>Our power of choice is untrammelled and when nothing some of our being to except to obtain some advantage.</p>
                </div>
            </div>
        </div> -->

        <!-- Leave a Comment -->
        <!-- <div class="row mt-5">
            <div class="col-12">
                <h3>तुमची प्रतिक्रिया</h3>
                <form>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="तुमची टिप्पणी"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="तुमचे नाव" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" placeholder="तुमचा ईमेल" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">सबमिट करा</button>
                </form>
            </div>
        </div> -->

        <!-- Related Projects -->
        <div class="container mt-5 related-projects">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h3>Related Projects</h3>
        </div>
    </div>
    <div class="row g-4">
        <!-- Project 1 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card h-100 shadow">
                <img src="assets/images/project_details2.jpg" class="card-img-top" alt="EV Charging System" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="text-capitalize fs-5">EV Charging System</h5>
                    <a href="#" class="btn btn-secondary btn-md mt-auto">Read More</a>
                </div>
            </div>
        </div>
        <!-- Project 2 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card h-100 shadow">
                <img src="assets/images/project_details3.jpg" class="card-img-top" alt="Naturopathy Project" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="text-capitalize fs-5">Dr. Chandru's Prakritik Chikitsa</h5>
                    <a href="#" class="btn btn-secondary btn-md mt-auto">Read More</a>
                </div>
            </div>
        </div>
        <!-- Project 3 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card h-100 shadow">
                <img src="assets/images/project_details4.jpg" class="card-img-top" alt="Nisarg Resort" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="text-capitalize fs-5">District political Institute CMS Aplications</h5>
                    <a href="#" class="btn btn-secondary btn-md mt-auto">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
<?php
include 'footer.php';
?>