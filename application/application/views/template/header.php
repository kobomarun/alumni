<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <link href='<?php echo base_url(); ?>css/bootstrap.min.css' rel="stylesheet">
    <link href='<?php echo base_url(); ?>css/custom.css' rel="stylesheet">
    <link href='<?php echo base_url(); ?>css/ma5slider.min.css' rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>

  	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <script type="text/javascript" src="https://momentjs.com/downloads/moment.min.js">

    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <!--  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
     <script>
       var OneSignal = window.OneSignal || [];
       OneSignal.push(["init", {
         appId: "2d5b9c03-954c-4d74-934c-173b85ee9b80",
         autoRegister: true, /* Set to true to automatically prompt visitors */
         httpPermissionRequest: {
           enable: true
         },
         notifyButton: {
             enable: true /* Set to false to hide */
         }
       }]);
     </script>
     <script src="<?php echo base_url(); ?>js/moment.min.js"></script>-->
  </head>
  <body class="am_home_page">
    <?php
    $id = $this->session->userdata('id');
    $this->db->group_by('mentorid');
    $this->db->select('*');
		$this->db->from('mentor_list');
		$this->db->where('menteeid', $id);
		$countMentor = $this->db->count_all_results();

    $this->db->group_by('menteeid');
    $this->db->select('*');
		$this->db->from('mentor_list');
		$this->db->where('mentorid', $id);
		$countMentee = $this->db->count_all_results();
    ?>
    <div class="navbar-wrapper">

    	<div class="container-fluid">
    		<!--<nav class="navbar navbar-inverse navbar-static-top">-->
    		<nav class="navbar navbar-default navbar-fixed-top navbar_back">
    			<div class="container-fluid">
    				<!-- AM Logo -->
    				<div class="logo_am">
    					<a href="<?php echo base_url(); ?>">
    						<p>.A.M.</p>
    					</a>
    				</div>

    				<span class="main_menu_icon" onclick="openNav()">&#9776;
                <?php if($this->session->userdata('isLoggedIn')) { ?>

              <em  id="notify" onload="auto_refresh()"></em>

              <?php } ?>
            </span>
            <!-- Menu Starts Here -->
  					<div id="mySidenav" class="sidenav">
  						<div class="closebtn closebut">
  							<a href="javascript:void(0)" class="closebut" onclick="closeNav()">&times;</a>
  						</div>

  						<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
              <a class="add_menu" href="/"><span class="icon_space"><i class="fa fa-home" aria-hidden="true"></i></span>&nbsp; Home</a>
              <?php if($this->session->userdata('isLoggedIn')) { ?>
              <ul class="accordion-menu">
							<li>
								<div class="dropdownlink"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Me
								<i class="fa fa-chevron-down" aria-hidden="true"></i>
								</div>
								<ul class="submenuItems" style="display: none;">
									<li><a href="/profile">Profile</a></li>
                  <li><a href="/profile/updateprofile">Edit Profile</a></li>
									<li><a href="/login/signout">Sign out</a></li>
								</ul>
							</li>
						</ul>
            <?php } ?>
              <ul class="accordion-menu">
                <?php
                  $query = $this->db->get_where('menu',array('url'=>''))->result();
                  foreach($query as $menu) {
                ?>
							<li>
								<div class="dropdownlink"><i class="fa fa-group" aria-hidden="true"></i>&nbsp; <?php echo $menu->name; ?>
								<i class="fa fa-chevron-down" aria-hidden="true"></i>
								</div>
                <?php
                  $check = $this->db->get_where('submenu', array('parentid'=>$menu->id))->result();
                  //var_dump($check);
                  if($check) {
                  ?>
                <ul class="submenuItems" style="display: none;">
                  <?php foreach($check as $sub) { ?>
									<li><a href="<?php echo $sub->url; ?>"><?php echo $sub->name; ?></a></li>
                  <?php } ?>
                  <?php if($this->session->userdata('isLoggedIn') AND $menu->name === "Mentorship") { ?>
                  <li><a href="my/mentors">My Mentors<span class="all_counter"><?php error_reporting(0); if($countMentor) { echo $countMentor; } else { echo 0; } ?></span></a></li>
                  <li><a href="my/mentors">My Mentees<span class="all_counter"><?php if(!empty($countMentee)) { echo $countMentee; } else { echo 0; } ?></span></a></li>
                  <li><a href="messaging<?php echo $this->uri->segment(3); ?>">Messaging<span class="all_counter">7</span></a></li>
                  <?php } ?>
                  </ul>
                <?php } }?>
							</li>
						</ul>
            <?php
            $this->db->where('url !=','');
              $q = $this->db->get('menu')->result();
              foreach($q as $m) {
            ?>
            <a class="add_menu" href="<?php echo $m->url; ?>"><span class="icon_space"><i class="fa fa-home" aria-hidden="true"></i></span>&nbsp; <?php echo $m->name; ?></a>

            <?php  } ?>


              <?php if(!$this->session->userdata('isLoggedIn')) { ?>
  						<a class="add_menu" href="/login"><span class="icon_space"><i class="fa fa-sign-in" aria-hidden="true"></i></span>&nbsp; Sign in</a>

  						<a class="add_menu" href="/registration"><span class="icon_space"><i class="fa fa-sign-out" aria-hidden="true"></i></span>&nbsp; Sign up</a>

              <?php } ?>
  					</div>
  					<!-- End of Menu -->

  				<!--<div class="optional_menu_left">
  					<a href="#">About us</a><span class="big_menu_separator">|</span>
  					<a href="/career_guide">Career guide</a><span class="big_menu_separator">|</span>
  					<a href="/course_guide">Course guide</a><span class="big_menu_separator">|</span>
  					<a href="/blog">Blog</a><span class="big_menu_separator">|</span>
            <?php if(!$this->session->userdata('isLoggedIn')) { ?>
  					<a href="/login">Sign in</a><span class="big_menu_separator">|</span>
  					<a href="/registration">Sign up</a>
            <?php } if($this->session->userdata('isLoggedIn')) { ?>
            <a href="<?php echo base_url(); ?>/login/signout">Signout</a>
            <?php } ?>
  				</div>-->
          <?php if($this->session->userdata('isLoggedIn')) { ?>
          <!--<div class="login_side">
					<p><img class="img-responsive user_menu_pic" src="<?php echo base_url(); ?>images/rasheed.jpg" alt="user1">&nbsp;Me</p>
        </div>-->
          <?php } ?>
    			</div>
    		</nav>
    	</div>
    </div>

      <?php  if(current_url() == base_url() ) { } else {?>
    <!-- BREADCRUMB --><br />
    <div class="container">
    	<div class="row">
    		<div class="row">
    			<div class="col-xs-12 col-sm-12 col-md-12">
    				<ul class="top_breadcrumb">
    				  <li><a href="#">Home</a></li>
    				  <li id="me">
                <?php
                if($this->uri->segment(1)=="my") {
                  echo $this->uri->segment(2);
                } else {
                  echo $this->uri->segment(1);
                }
                ?>
              </li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </div>
<?php } ?>
