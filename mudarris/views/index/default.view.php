<!-- Start Overlay Loadong -->
<section class="overlay-loading">
    <div class="spinner">
    <div class="cube1"></div>
    <div class="cube2"></div>
    </div>
</section>      
<!-- End Overlay Loadong -->


<!-- Start Scroll up -->
    <div class="scroll-top">
        <i class="fas fa-angle-up"></i>
    </div>
<!-- End Scroll up -->


<!-- Start nav -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <div class="logo">
        <a href="#"><img src="./images/logo_<?= $_SESSION['lang'];?>.svg"></a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><?= @$l_home; ?><span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><?= @$l_about; ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><?= @$l_how; ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><?= @$l_techer;?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><?= @$l_contact; ?></a>
                </li>

            </ul>

            <div class="lang">
                <a href='/lang'><?= @$l_change_lange;?></a>
            </div>
        </div>
    </div>

</nav>
<!-- End nav -->


<!-- Start Header -->
<header>
    <div class="overlay">
        <div class="container">
            <!-- Start typed -->
            <!-- <div class="the-typed">
                <div class="typedone">
                    <span class="typeme-one"></span>
                    <span class="typeme-one-plus"></span>
                </div>

                <div class="typedtwo">
                    <span class="typeme-two"></span>
                </div>
            </div> -->

            <div class="the-down text-center">
                <i class="fas fa-angle-double-down"></i>
            </div>

            <div class="haeder-text text-center">
                <h1><?= @$l_welcome_to; ?> <span><?= @$l_muddaris_net; ?></span> </h1>
                <p><?= @$ask_for_a_private_teacher_now; ?></p>
            </div>
            

            <div class="header-btn">
                <button class="log"><?= @$l_login; ?></button>
                <button class="sign"><?= @$l_signup; ?></button>
            </div>

        </div>
    </div>

</header>
<!-- End Header -->


<!-- Start Why Us -->
<section class="why-us text-center">
    <div class="container">
        <h2 class="h1"><?= @$l_why; ?></h2>
        <div class="row">

            <div class="col-md-6 col-lg-4">
                <div class="why-box ottom-right wow fadeInDown" data-wow-offset="300" data-wow-duration="1.5s">
                    <i class="fas fa-book-reader fa-5x"></i>
                    <h3><?= @$l_subjects; ?></h3>
                    <p><?= @$l_lorem; ?></p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="why-box ottom-right wow fadeInDown" data-wow-offset="300" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <i class="fas fa-user-cog fa-5x"></i>
                    <h3><?= @$l_follow_system; ?></h3>
                    <p><?= @$l_lorem; ?></p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="why-box last-box ottom-right wow fadeInDown" data-wow-offset="300" data-wow-duration="1.5s" data-wow-delay="0.8s">
                    <i class="far fa-address-card fa-5x"></i>
                    <h3><?= @$l_best_techers; ?></h3>
                    <p><?= @$l_lorem; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Us -->

<!-- Start Testimonials -->
<section class="testimonials text-center">
    <div class="overlay">
        <div class="container">

            <h2 class="h1"><?= @$l_students_say; ?></h2>

            <div id="myTestimonials" class="carousel slide  wow fadeInLeft" data-ride="carousel" data-wow-duration="1s" data-wow-offset="400">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <p class='lead'><?= @$l_lorem; ?></p>
                        <span><?= @$l_student; ?> #1</span>
                    </div>
                    <div class="carousel-item">
                        <p class='lead'><?= @$l_lorem; ?></p>
                        <span><?= @$l_student; ?> #2</span>
                    </div>
                    <div class="carousel-item">
                        <p class='lead'><?= @$l_lorem; ?></p>
                        <span><?= @$l_student; ?> #3</span>
                    </div>
                </div>



                <a class="carousel-control-prev" href="#myTestimonials" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only left">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myTestimonials" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only right">Next</span>
                </a>


            </div>
        </div>
    </div>
</section>
<!-- End Testimonials -->


<!-- Start Our Success -->
<section class="our-success text-center">

    <div class="container">
        <h2><?= @$l_our_success; ?></h2>

        <div class="row">

            <div class="col-lg-4 col-sm-6">
                <div class="success-box">
                    <!-- <div class="success-border"></div> -->
                    <img src="./images/suc_1.png" alt="Students">
                    <span class="count" data-count="14">0</span>
                    <p><?= @$l_students; ?></p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="success-box">
                    <!-- <div class="success-border"></div> -->
                    <img src="./images/suc_2.jpg" alt="Teachers">
                    <span class="count" data-count="7">0</span>
                    <p><?= @$l_techers; ?></p>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-6">
                <div class="success-box last-box">
                    <!-- <div class="success-border"></div> -->
                    <img src="./images/suc_3.png" alt="Classes">
                    <span class="count" data-count="4">0</span>
                    <p><?= @$l_classes; ?></p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Our Success -->


<!-- Start Register -->
<section class="register text-center">
    <div class="container">
        <h2><?= @$l_register;?></h2>
        <p><?= @$l_lorem; ?></p>
    </div>
</section>
<!-- End Register -->


<!-- Start Links -->
<section class="links">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-4">
                <div class="link-box one">
                    <a href="#"><img src="./images/logo_<?= $_SESSION['lang'];?>.svg"></a>
                    <p class="lead"><?= @$l_lorem; ?></p>
                    <i class="fas fa-cog"></i> <a href="#">privacy policy</a>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 offset-1">
                <div class="link-box two">
                    <h2><?= @$l_usfel_links; ?></h2>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-paperclip"></i> <a href="#"><?= @$l_home; ?></a></li>
                        <li><i class="fas fa-paperclip"></i> <a href="#"><?= @$l_about; ?></a> <br></li>
                        <li><i class="fas fa-paperclip"></i> <a href="#"><?= @$l_how; ?></a><br></li>
                        <li><i class="fas fa-paperclip"></i> <a href="#"><?= @$l_techer;?></a><br></li>
                        <li><i class="fas fa-paperclip"></i> <a href="#"><?= @$l_login; ?></a><br></li>
                        <li><i class="fas fa-paperclip"></i> <a href="#"><?= @$l_contact; ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 offset-1">
                <div class="link-box three">
                    <h2><?= @$l_last_classes; ?></h2>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-paperclip"></i> <a href="#">Arabic</a></li>
                        <li><i class="fas fa-paperclip"></i> <a href="#">Math</a></li>
                        <li><i class="fas fa-paperclip"></i> <a href="#">History</a></li>
                        <li><i class="fas fa-paperclip"></i> <a href="#">English</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Links -->


<!-- Start Footer -->
<footer class="text-center">
    <?= @$l_copyright; ?> <a href="#"><?= @$l_mudarris;?></a>
</footer>
<!-- End Footer -->