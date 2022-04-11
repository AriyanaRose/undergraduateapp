<style>
  #contatti a {
    color: #000000;
    text-decoration: none;
  }


  @media (max-width: 575.98px) {

    #contatti {
      padding-bottom: 800px;
    }

    #contatti .maps iframe {
      width: 100%;
      height: 450px;
    }
  }


  @media (min-width: 576px) {

    #contatti {
      padding-bottom: 800px;
    }

    #contatti .maps iframe {
      width: 100%;
      height: 450px;
    }
  }

  @media (min-width: 768px) {

    #contatti {
      padding-bottom: 350px;
    }

    #contatti .maps iframe {
      width: 100%;
      height: 850px;
    }
  }

  @media (min-width: 992px) {
    #contatti {
      padding-bottom: 200px;
    }

    #contatti .maps iframe {
      width: 100%;
      height: 700px;
    }
  }


  #author a {
    color: #000000;
    text-decoration: none;

  }

  .bg-cover {
    background-size: cover !important;
    opacity: 0.5
    }

  body {
    min-height: 100vh;
  }
</style>

<!--	URL: https://bootsnipp.com/snippets/N6bPx
                "maps google and form contact"
                Author:  PaoloF
            -->

<div style="background: url('images/bookself5.jpg')" class="jumbotron bg-cover text-white">
</div>



<div class="row" id="contatti">
  <div class="container mt-2">

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1501.955287399682!2d-61.45178359103497!3d10.435953035352108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c35f11d827f2a5b%3A0xd74c879d15b51ed2!2zMTDCsDI2JzEyLjkiTiA2McKwMjcnMDguMyJX!5e0!3m2!1sen!2stt!4v1649516408239!5m2!1sen!2stt" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text mt-3 font-weight-bold text-dark text-center">Contact Us</h2>
        <form action="" method="post">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input name="first_name" type="text" class="form-control mt-2" placeholder="First Name" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="last_name" type="text" class="form-control mt-2" placeholder="Last Name" required>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input name="email" type="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea name="message_sent" class="form-control" id="exampleFormControlTextarea1" placeholder="Type Message Here" rows="7" required></textarea>
              </div>
            </div>
            <div class="col-12">

            </div>
            <div class="col-12 text-center">
              <button name="contactus" class="btn btn-warning" type="submit">Submit</button>
            </div>
          </div>
        </form>
        <div class="text-dark">
          <h2 class="text mt-4 font-weight-bold text-center">Quills & Pages</h2>
          <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+1868) 267-8123</a><br>
          <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+1868) 636-9548</a><br>
          <i class="fa fa-envelope mt-3"></i> <a href="">quillsandpages@mail.com</a><br>
          <i class="fa fa-address-card mt-3"></i> McBean Village, Couva, Trinidad & Tobago<br>
        </div>
      </div>

    </div>
  </div>
</div>