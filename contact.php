<?php
include 'header.php';
?>
  <section class="w3l-contact-breadcrum">
    <div class="breadcrum-bg">
      <div class="container py-5">
        <p><a href="index.php">Home</a> &nbsp; / &nbsp; Contact</p>
      </div>
    </div>
  </section>
  <!-- contact -->
  <section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
      <div class="container py-md-3">

        <div class="row cont-main-top">
          <!-- contact form -->
          <div class="contacts12-main col-lg-6 ">

            <form action="sendmailler.php" method="post" class="main-input">
              <div class="top-inputs d-grid">
                <input type="text" placeholder="Full Name" name="FName" id="FName" required="">

              </div>
              <input type="email" name="email" placeholder="Email" id="w3lSender" required="">

              <textarea placeholder="Message" name="Message" id="Message" required=""></textarea>
              <div class="text-right">
              <button type="submit" name="save_email" class="btn btn-success btn-lg px-4 py-2" value="send">Submit Now</button>
              </div>
            </form>
          </div>
          <!-- //contact form -->
          <!-- contact address -->
          <div class="contact col-lg-6 mt-lg-0 mt-5">
            <div class="cont-subs">
              <div class="cont-add">
                <div class="cont-add-lft">
                  <span class="fa fa-map-marker" aria-hidden="true"></span>
                </div>
                <div class="cont-add-rgt">
                  <p class="contact-text-sub"> At/Post- Ingali, Tal/ Hatkangle Dist- Kolhapur
                    Maharashtra - 416202</p>
                </div>

              </div>
              <div class="cont-add add-2">
                <div class="cont-add-lft">
                  <span class="fa fa-envelope" aria-hidden="true"></span>
                </div>
                <div class="cont-add-rgt">
                  <a href="mailto:gatadeprathamesh999@gmail.com">
                    <p class="contact-text">gatadeprathamesh999@gmail.com</p>
                  </a>
                </div>

              </div>
              <div class="cont-add">
                <div class="cont-add-lft">
                  <span class="fa fa-phone" aria-hidden="true"></span>
                </div>
                <div class="cont-add-rgt">
                  <a href="tel:+91-942-2020-700">
                    <p class="contact-text">+91-942-2020-700</p>
                  </a>
                </div>
              </div>
              <div class="cont-add add-3" style="background-color: #5fcf1c;">
                <div class="cont-add-lft">
                  <span class="fa fa-file-pdf-o" aria-hidden="true" style="color: white;"></span>
                </div>
                <div class="cont-add-rgt" style="background-color: #5fcf1c;">
                  <a href="Prathamesh Gatade Resume .pdf">
                    <p class="contact-text-sub" style="color: white;">Download Resume</p>
                  </a>
                </div>

              </div>
            </div>
          </div>
          <!-- //contact address -->

        </div>
      </div>
  


      <!-- map -->
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.193494688548!2d74.39749307510826!3d16.667198023152782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0fd3648165813%3A0x785b1ae93b7133d9!2sNadivesh%20Rd%2C%20Maharashtra%20416202!5e0!3m2!1sen!2sin!4v1713372382319!5m2!1sen!2sin"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!-- //map -->
    </div>
  </section>
  <!-- //contact -->

  <!-- grids block 5 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    // Retrieve the message from PHP session
    var messageText = "<?php echo $_SESSION['status'] ?? ''; ?>";

    // Check if there's a message to display
    if (messageText !== '') {
        // Display the SweetAlert modal
        Swal.fire({
            title: "Thank You!",
            text: messageText,
            icon: "success"
        });

        // Unset the session status using PHP
        <?php unset($_SESSION['status']); ?>
    }
</script>
<?php
include 'footer.php';
?>