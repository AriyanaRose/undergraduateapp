<div class="container-fluid p-0 pb-3">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1501.955287399682!2d-61.45178359103497!3d10.435953035352108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c35f11d827f2a5b%3A0xd74c879d15b51ed2!2zMTDCsDI2JzEyLjkiTiA2McKwMjcnMDguMyJX!5e0!3m2!1sen!2stt!4v1649516408239!5m2!1sen!2stt" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
</div>

<style>
    .contact_info_item {
        width: calc((100% - 60px) / 3);
        height: 100px;
        border: solid 1px #e8e8e8;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
        padding-left: 32px;
        padding-right: 15px
    }

    .contact_info_image {
        width: 35px;
        height: 35px;
        text-align: center
    }

    .contact_info_image img {
        max-width: 100%
    }

    .contact_info_content {
        padding-left: 17px
    }

    .contact_info_title {
        font-weight: 500
    }

    .contact_info_text {
        font-size: 12px;
        color: rgba(0, 0, 0, 0.5)
    }

    body {
        color: #333;
        background: #fafafa;
        font-family: "Patua One", sans-serif;
    }

    .contact-form {
        padding: 50px;
        margin: 30px 0;
    }

    .contact-form h1 {
        color: #000000;
        font-weight: bold;
        margin: 0 0 15px;
    }

    .contact-form .form-control,
    .contact-form .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .contact-form .form-control:focus {
        border-color: #000000;
    }

    .contact-form .btn-primary,
    .contact-form .btn-primary:active {
        color: #fff;
        min-width: 150px;
        font-size: 16px;
        background: #f44336 !important;
        border: none;
    }

    .contact-form .btn-primary:hover {
        background: #15a487 !important;
    }

    .contact-form .btn i {
        margin-right: 5px;
    }

    .contact-form label {
        opacity: 0.7;
    }

    .contact-form textarea {
        resize: vertical;
    }

    .hint-text {
        font-size: 15px;
        padding-bottom: 20px;
        opacity: 0.6;
    }
</style>

<!--	URL: https://bbbootstrap.com/snippets/responsive-contact-info-contact-us-form-23298430
                Bootstrap 4 Responsive Contact info with contact us form
                Author:  BBBootstrap Team
            -->

<!--	URL: https://www.tutorialrepublic.com/snippets/preview.php?topic=bootstrap&file=elegant-contact-form
                Bootstrap Elegant Contact Form
                Author:  Tutorial Republic 
            -->

<body>

    <div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">
                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/office/24/000000/iphone.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Phone</div>
                                <div class="contact_info_text">+ 1 868 267 8895</div>
                            </div>
                        </div> <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/filled-message.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text">quillsandpages@mail.com</div>
                            </div>
                        </div> <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><img src="https://img.icons8.com/ultraviolet/24/000000/map-marker.png" alt=""></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Address</div>
                                <div class="contact_info_text">McBean, Couva, Trinidad </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form -->
    <div class="container-lg">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <form action="" method="post">
                    <div class="contact-form">
                        <h1>Contact Us</h1>
                        <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query or question.</p>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputName">First Name</label>
                                    <input name="first_name" type="text" class="form-control" id="inputName" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputName">Last Name</label>
                                    <input name="last_name" type="text" class="form-control" id="inputName" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input name="email" type="email" class="form-control" id="inputEmail" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea name="message_sent" class="form-control" id="inputMessage" rows="5" required></textarea>
                        </div>
                        <button name="contactus" type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>