</body>
<style>
  footer {

    background-color: #011F4B;
  }
</style>

<!--	URL: https://mdbootstrap.com/docs/standard/navigation/footer/
                Advanced example
                Author: MDBOOTSTRAP
            -->

<!-- Footer -->
<footer class="text-center text-lg-start text-light">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text fw-bold mb-4">
            Quills & Parchment
          </h6>
          <h6>
            "A bookworm's paradise"
          </h6>
          <p>
            We specialize in a wide range of new and used books and comics to meet the needs of every reader.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="<?php echo BASE_URL ?>store" class="text-reset">Books</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Comics</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Rare Books</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Collectibles</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="<?php echo BASE_URL ?>registration" class=" text-reset">Registration</a>
          </p>
          <p>
            <a href="<?php echo BASE_URL ?>login" class="text-reset">Log In</a>
          </p>
          <p>
            <a href="<?php echo BASE_URL ?>contactus" class=" text-reset">Contact Us</a>
          </p>
          <p>
            <a href="<?php echo BASE_URL ?>faqs" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Couva, Trinidad & Tobago</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            quillsandparchment@mail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 1 868 267 8895</p>
          <p><i class="fas fa-print me-3"></i> + 1 868 267 8978</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Section: Form -->
  <section class="">
    <form action="thankyousub" method="post">
      <!--Grid row-->
      <div class="row d-flex justify-content-center">
        <!--Grid column-->
        <div class="col-auto">
          <p class="pt-2">
            <strong>Sign up for our newsletter</strong>
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 col-12">
          <!-- Email input -->
          <div class="form-outline form-white mb-4">
            <input name="emailsub" type="email" id="form5Example21" class="form-control" />
            <label class="form-label" for="form5Example21"> Enter Email address</label>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-auto">
          <!-- Submit button -->
          <button name="email_sub_button" type="submit" class="btn btn-outline-light mb-4">
            Subscribe
          </button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </form>
  </section>
  <!-- Section: Form -->


  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="<?php echo BASE_URL ?>home">Quills & Parchment</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



</html>