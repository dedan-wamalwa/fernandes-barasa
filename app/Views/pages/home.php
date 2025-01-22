<?php echo view('pages/includes/header') ?>
<?php echo view('pages/includes/navbar') ?>

<!-- Start of body section -->
<div class="site-blocks-cover" id="home-section">
    <div class="img-wrap">
        <div class="owl-carousel slide-one-item hero-slider">
            <?php 
            $files = glob("assets/images/slider/*.*");
            for ($i = 0; $i < count($files); $i++) {
                $image = $files[$i];
                echo '<div class="slide"><img src="' . $image . '" alt="Image" /></div>' ;           
            }
            ?>
        </div>
    </div>
    <style>
    @media (max-width: 767px) {    #hiddencontent{
    display:none;
    }
    }
    </style>
    <div class="container" id="hiddencontent">
        <div class="row">
            <div class="col-md-6 ml-auto align-self-center">
                <div class="intro">
                    <!-- <div class="heading">
                        <h1><small>Fernandes</small></h1>
                    </div> -->
                    <div class="text">
                        <h1><small>Fernandes</small></h1>
                        <h1>Barasa</h1>
                        <p class="sub-text mb-5" style="color:#000080">#Maendeleo na Usawa.</p>
                        <p><a href="/manifesto" target="_blank" class="btn btn-outline-primary btn-md">View Manifesto</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About me -->
<div class="site-section" id="about-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- <div class="col-lg-6 mb-5">
                <img src="assets/images/Barasa.jpg" alt="Image" class="img-fluid">
            </div> -->
            <div class="col-lg-12 ml-auto section-title testimonial bg-white h-100 ">
                <!-- <span class="sub-title mb-2 d-block">Acquaint Us</span> -->
                <label for=""><h2 class="title text-primary mb-3">About Hon. Fernandes Barasa</h2></label>

                <p>
                    <a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=CfYPCx7lx80" > <span> <button style="font-size:24px">Play Video <i class="fa fa-youtube-play"></i></button></span></a>    
                   
                </p>
                <p class="mb-4">
                    My name is Fernandes Barasa. I am married to Prof. Janet Kasilly Barasa. We are blessed with four children. 
                    I was born and raised in Khabondi village, Mumias East constituency in Kakamega County. 
                    I attended Naitiri High School and proceeded to Kenyatta University for Bachelor of Commerce, Master of Business Administration, and Ph.D. in Accounting and Finance degrees.
                </p>
                <p class="mb-4">
                    I am a Fellow of Chartered Professional Accountants (FCPA) and former Chairman of the prestigious Institute of Certified Public Accountants of Kenya (2015 – 2017).
                </p>
                <p class="mb-4">
                     During my service as the Managing Director (MD) and Chief Executive Officer (CEO) at Kenya Electricity Transmission Company Limited (KETRACO),
                     I was conferred The Order of Grand Warrior (OGW) award in recognition of my outstanding and distinguished service to the nation in various capacities.
                </p>
               
                <p class="mb-4">
                    In my personal capacity, I am involved in community development initiatives which have greatly transformed livelihoods in Kakamega County.
                </p>

                <blockquote class="mb-3">
                    <p><b style="color:#ff6900">Personal Attributes</b> 
                        <ol>
                            <li>Integrity</li>
                            <li>Honest</li>
                            <li>Servant leadership</li>
                            <li>Result-oriented</li>
                            <li>Experienced leadership skills</li>
                        </ol> 
                        <!-- &ldquo;<strong>Maendeleo na Usawa</strong>&ldquo; -->
                    </p>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<!-- About me end -->

<!-- Start of footer section -->
<?php echo view('pages/includes/footer2') ?>