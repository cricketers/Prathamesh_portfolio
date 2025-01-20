<?php
include 'header.php'
?>
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
</style>
<section class="w3l-about-breadcrum">
  <div class="breadcrum-bg">
    <div class="container py-5">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Gallery</p>
     </div>
  </div>
</section>
<!-- w3l-content-photo-5 -->
<!-- Slider -->
<!-- <section class="slider-section">
	<div id="carousel" class="carousel slide" data-ride="carousel">
		
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol> 

		
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active" style="background-image: url('assets/images/a5.jpg');">
				<div class="carousel-caption d-none d-md-block">
					<h3>Celebration</h3>
					<p>Winning Celebration for General Championship</p>
				</div>
			</div> 

			<div class="carousel-item" style="background-image: url('assets/images/sl1.jpeg');">
				<div class="carousel-caption d-none d-md-block">
					<h3>Sport Day</h3>
					<p>Friendship Forever</p>
				</div>
			</div> 

			<div class="carousel-item" style="background-image: url('assets/images/IMG-20230220-WA0129.jpg');">
				<div class="carousel-caption d-none d-md-block">
					<h3>Traditional Day</h3>
					<p> College Event enjoying with Friend</p>
				</div>
			</div> 
		</div> 

	
		<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
		<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only"></span>
		</a>
	</div> 
</section> End of Slider -->
<div class="products-4" id="portfolio">
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



 <!-- grids block 5 -->
<?php
include 'footer.php';
?>

