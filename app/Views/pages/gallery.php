<?php echo view('pages/includes/header') ?>
<?php echo view('pages/includes/navbar') ?>
<?php echo view('pages/includes/banner') ?>

<!-- Start of body section -->
<div class="site-section " id="studio-section ">
    <div class="container ">
        <div class="row mb-5 ">
            <div class="col-md-7 section-title text-center mx-auto ">
                <span class="sub-title mb-2 d-block ">Photos</span>
                <h2 class="title text-primary mb-3 ">Studio Gallery</h2>
            </div>
        </div>
        <div id="posts " class="row no-gutter ">
            <?php 
                $files = glob("assets/images/gallery-photos/*.*");
                for ($i = 0; $i < count($files); $i++) {
                    $image = $files[$i];
                    echo '<div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4 ">
                            <a href="'.$image .'" class="item-wrap " data-fancybox="gal ">
                                <span class="icon-search2 "></span>
                                <img class="img-fluid " src="' . $image . '" alt="Image" />
                            </a>
                        </div>';         
                }
            ?>
        </div>
    </div>
</div>

<!-- Start of footer section -->
<?php echo view('pages/includes/footer2') ?>