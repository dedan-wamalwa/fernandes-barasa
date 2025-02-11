<?php echo view('pages/includes/header') ?>
<?php echo view('pages/includes/navbar') ?>
<?php echo view('pages/includes/banner') ?>

<!-- Start of body section -->
<div class="site-section " id="contact-section ">
    <div class="container ">
        <form action="index.html " class="contact-form ">
            <div class="section-title text-center mb-5 ">
                <!-- <span class="sub-title mb-2 d-block ">Get In Touch</span> -->
                <h2 class="title text-primary ">Contact Us</h2>
            </div>
            <div class="row mb-4 ">
                <div class="col-md-6 mb-4 mb-md-0 ">
                    <input type="text " class="form-control " placeholder="First name ">
                </div>
                <div class="col-md-6 ">
                    <input type="text " class="form-control " placeholder="Last name ">
                </div>
            </div>
            <div class="row mb-4 ">
                <div class="col-12 ">
                    <input type="text " class="form-control " placeholder="Email ">
                </div>
            </div>
            <div class="row mb-4 ">
                <div class="col-12 ">
                    <textarea class="form-control " name=" " id=" " cols="30 " rows="10 " placeholder="Message "></textarea>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 ">
                    <button type="submit " class="btn btn-primary btn-md ">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Start of footer section -->
<?php echo view('pages/includes/footer') ?>