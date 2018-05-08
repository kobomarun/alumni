<!-- Carousel
================================================== -->
<div class="hide_carousel">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php foreach($slide as $slide) { ?>
    <div class="item <?php echo $slide->classname; ?>">
      <img class="first-slide" src="<?php echo base_url(); ?>uploads/slider/<?php echo $slide->img; ?>" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1><?php echo $slide->title; ?></h1>
      	  <p><?php echo $slide->description; ?></p>
          <?php if($slide->cta!='')  {?>
      	  <p><a class="btn btn-lg btn-success" href="<?php echo $slide->link; ?>" role="button"><?php echo $slide->cta; ?></a></p>
        <?php } ?>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->
</div>


<div class="container">
<div class="row home_search_page">
<div class="col-md-12">
  <img class="img-responsive" src="<?php echo base_url(); ?>images/post-banner-1050x300.jpg" alt="user1">
</div>
</div>
</div>

  <!-- About Section -->
<div>
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>ABOUT ALUMNI MENTORING</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
          <?php foreach($about as $about) { ?>
   <div class="col-lg-12">
     <?php echo "<p class='aboutus_heading'>" . $about->title . "</p>"; ?>
    <p class='aboutus_content'>  <?php echo $about->content; ?> </p>
    </div>
    <?php } ?>
      <?php foreach($mentee as $mentee) { ?>
           <div class="col-lg-6">
             <?php echo "<p class='aboutus_heading'>" . $mentee->title . "</p>"; ?>
             <p class='aboutus_content'>  <?php echo $mentee->content; ?> </p>
            </div>
            <?php } ?>

            <?php foreach($mentor as $mentor) { ?>
                 <div class="col-lg-6">
                   <?php echo "<p class='aboutus_heading'>" . $mentor->title . "</p>"; ?>
                   <p class='aboutus_content'>  <?php echo $mentor->content; ?> </p>
                  </div>
                  <?php } ?>

</section>
</div>

<!-- Portfolio Grid Section -->
<div>
<section id="portfolio" class="bg-light-gray am_features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">ESSENTIAL FEATURES OF A.M.</h2>
                <h3 class="section-subheading text-muted">Some of the wide-ranging benefits students can derive from the Alumni Mentoring website are highlighted below.</h3>
            </div>
        </div>
        <div class="row">
          <?php foreach($feature as $f) { ?>
            <a href="<?php echo $f->link; ?>"">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <p class="portfolio-link">
                  <img src="<?php echo base_url(); ?>images/<?php echo $f->img; ?>" class="img-responsive" alt="<?php echo $f->title; ?>">
                </p>
                <div class="portfolio-caption">
                    <h4><?php echo $f->title; ?></h4>
                    <p class="text-muted"><?php echo $f->text; ?></p>
                </div>
            </div>
          </a>
            <?php } ?>
        </div>
    </div>
</section>
</div>

<section class="bg-darkest-gray careeradvice" style="margin-bottom: -75px;">
<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="section_heading_white">CAREER ADVICE</h2>
    <h3 class="section-subheading text-muted">From mentoring support to career networking and free counselling, below are some of the benefits the site has to offer.</h3>
  </div>
</div>
<div class="row post">
  <?php foreach($career as $advice) { ?>
  <div class="col-sm-4 col-md-4 position_l_r">
    <div class="blog_gallery">
      <a target="_blank" href="#">
        <img src="<?php echo base_url(); ?>images/<?php echo $advice->img; ?>" alt="Electrical Enigineer">
      </a>
      <div>
        <p class="blog_cate_p"><a href="#" class="blog_cate_a a_tech">TECHNOLOGY</a></p>
      </div>
      <div class="blog_desc_sec">
        <p><a href="#" class="blog_desc_a"><?php echo $advice->title; ?></a></p>
      </div>
      <div class="the_post_detail">
        <img class="img-responsive writer_pic" src="<?php echo base_url(); ?>images/rasheed.jpg" alt="user1">
        <p class="the_author_name"><a href="#" class="the_author_name_a"><?php echo $advice->postby; ?></a></p>
        <p class="the_author_date"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $advice->date; ?></p>
        <p class="the_author_date"><i class="fa fa-eye" aria-hidden="true"></i> 1317</p>
      </div>
      <div class="blog_desc_snippet">
        <p><?php echo word_limiter($advice->description, 35); ?></p>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
</div>
</section>
