<!DOCTYPE html>
<html class="backend">
  <!-- START Head -->
  <head>
    <!-- START META SECTION -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alumni Mentoring - backend</title>
    <meta name="author" content="pampersdry.info">
    <meta name="description" content="Clearnizr is a clean and flat backend and frontend theme build with twitter bootstrap">
    <meta name="keywords" content="admin, admin template, admin themes, bootstrap, Bootstrap 3, bower, cms, dashboard, flat, grunt, html template, Jekyll, minimal, premium admin templates, responsive">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- START STYLESHEETS -->
    <!-- Plugins stylesheet : optional -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/animatecss/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/flot/css/flot.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/owl/css/owl-carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datatables/css/datatables.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/jqvmap/css/jqvmap.css">
    <!--/ Plugins stylesheet : optional -->
    <!-- Application stylesheet : mandatory -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/layouts/layout.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>stylesheet/uielement.css">
    <!--/ Application stylesheet -->
    <!-- Theme stylesheet : optional -->
    <!--/ Theme stylesheet : optional -->
    <!-- modernizr script -->
    <script type="text/javascript" src="<?php echo base_url(); ?>plugins/modernizr/js/modernizr.js"></script>
    <!--/ modernizr script -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      height: 300,
      plugins: 'code table image media textcolor paste advlist colorpicker hr insertdatetime lists',

      style_formats: [
        { title: 'About us Content', block: 'p', styles: { fontSize: '16px', marginBottom: '19px',
    lineHeight: '29px', color: '#fff',
    fontFamily: 'Droid Serif' } },
    { title: 'Career Content', block: 'p', styles: { fontSize: '15px', marginBottom: '25px',
lineHeight: '27px', color: '#000',
fontFamily: 'Roboto Slab' } },
        { title: 'Table row 1', selector: 'tr', classes: 'tablerow1' }
      ],
      formats: {
        alignleft: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'left' },
        aligncenter: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'center' },
        alignright: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'right' },
        alignfull: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'full' },
        bold: { inline: 'span', 'classes': 'bold' },
        italic: { inline: 'span', 'classes': 'italic' },
        underline: { inline: 'span', 'classes': 'underline', exact: true },
        strikethrough: { inline: 'del' },
        customformat: { inline: 'span', styles: { color: '#00ff00', fontSize: '20px' }, attributes: { title: 'My custom format' }, classes: 'example1' },
      }
    });
    </script>

    </script>
    <!-- END STYLESHEETS -->
  </head>
  <!--/ END Head -->
  <!-- START Body -->
  <body data-baseurl="<?php echo base_url(); ?>">
    <!-- START Template Header -->
    <header id="header" class="navbar">
      <!-- START container fluid -->
      <div class="container-fluid">
        <!-- START navbar header -->
        <div class="navbar-header">
          <!-- Brand -->
          <a class="navbar-brand" href="javascript:void(0);">
            <h5>Alumni Mentoring Backend</h5>
          </a>
          <!--/ Brand -->
        </div>
        <!--/ END navbar header -->
        <!-- START Toolbar -->
        <div class="navbar-toolbar clearfix">
          <!-- START Left nav -->
          <ul class="nav navbar-nav navbar-left">
            <!-- Sidebar shrink -->
            <li class="hidden-xs hidden-sm">
              <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                <span class="meta">
                  <span class="icon"></span>
                </span>
              </a>
            </li>
            <!--/ Sidebar shrink -->
            <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <li class="navbar-main hidden-lg hidden-md hidden-sm">
              <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                <span class="meta">
                  <span class="icon">
                    <i class="ico-paragraph-justify3"></i>
                  </span>
                </span>
              </a>
            </li>
            <!--/ Offcanvas left -->
            <!-- Search form toggler  -->
            <li>
              <a href="javascript:void(0);" data-toggle="dropdown" data-target="#dropdown-form">
                <span class="meta">
                  <span class="icon">
                    <i class="ico-search"></i>
                  </span>
                </span>
              </a>
            </li>
            <!--/ Search form toggler -->
          </ul>
          <!--/ END Left nav -->
          <!-- START navbar form -->
          <div class="navbar-form navbar-left dropdown" id="dropdown-form">
            <form action="" role="search">
              <div class="has-icon">
                <input type="text" class="form-control" placeholder="Search application...">
                <i class="ico-search form-control-icon"></i>
              </div>
            </form>
          </div>
          <!-- START navbar form -->
          <!-- START Right nav -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Profile dropdown -->
            <li class="dropdown profile">
              <a href="javascript:void(0);" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                <span class="meta">
                  <span class="avatar">
                    <img src="<?php echo base_url(); ?>image/avatar/avatar7.jpg" class="img-circle" alt="" />
                  </span>
                  <span class="text hidden-xs hidden-sm pl5"><?php echo $this->session->userdata('fname') ." ". $this->session->userdata('lname'); ?></span>
                  <span class="caret"></span>
                </span>
              </a>
              <ul class="dropdown-menu" role="menu">

                <li>
                  <a href="javascript:void(0);">
                    <span class="icon">
                      <i class="ico-user-plus2"></i>
                    </span> My Accounts</a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <span class="icon">
                      <i class="ico-cog4"></i>
                    </span> Profile Setting</a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <span class="icon">
                      <i class="ico-question"></i>
                    </span> Help</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="<?php echo base_url(); ?>index.php/admin/login">
                    <span class="icon">
                      <i class="ico-exit"></i>
                    </span> Sign Out</a>
                </li>
              </ul>
            </li>
            <!-- Profile dropdown -->
            <!-- Offcanvas right This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <li class="navbar-main">
              <a href="javascript:void(0);" data-toggle="sidebar" data-direction="rtl" rel="tooltip" title="Feed / contact sidebar">
                <span class="meta">
                  <span class="icon">
                    <i class="ico-users3"></i>
                  </span>
                </span>
              </a>
            </li>
            <!--/ Offcanvas right -->
          </ul>
          <!--/ END Right nav -->
        </div>
        <!--/ END Toolbar -->
      </div>
      <!--/ END container fluid -->
    </header>
    <!-- START Template Sidebar (Left) -->
    <aside class="sidebar sidebar-left sidebar-menu">
      <!-- START Sidebar Content -->
      <section class="content slimscroll">
        <h5 class="heading">Main Menu</h5>
        <!-- START Template Navigation/Menu -->
        <ul class="topmenu topmenu-responsive" data-toggle="menu">
          <li class="active open">
            <a href="javascript:void(0);" data-target="#dashboard" data-toggle="submenu" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-dashboard2"></i>
              </span>
              <span class="text">Dashboard</span>
              <span class="arrow"></span>
            </a>

          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#blog" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Blog Post</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="blog" class="submenu collapse ">
              <li class="submenu-header ellipsis">Blog Post</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/blog/add">
                  <span class="text">Add New Post</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/blog">
                  <span class="text">View All Posts</span>
                </a>
              </li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#menu" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Menu Setting</span>
              <span class="arrow"></span>
            </a>
            <!-- slider -->
            <ul id="menu" class="submenu collapse ">
              <li class="submenu-header ellipsis">Menu Setting</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/menu/">
                  <span class="text">View All Menu</span>
                </a>
              </li>

            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#career" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Slider Settings</span>
              <span class="arrow"></span>
            </a>
            <!-- slider -->
            <ul id="career" class="submenu collapse ">
              <li class="submenu-header ellipsis">Slider Settings</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/homepage/viewslider">
                  <span class="text">View</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/homepage/addslider">
                  <span class="text">Add New</span>
                </a>
              </li>
            </ul>
          </li>
            <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#page" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-file6"></i>
              </span>
              <span class="text">Homepage</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="page" class="submenu collapse ">
              <li class="submenu-header ellipsis">Homepage</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/homepage/aboutus">
                  <span class="text">About us</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/homepage/mentorBenefit">
                  <span class="text">Benefit for Mentors</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/homepage/menteeBenefit">
                  <span class="text">Benefit for Mentees</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/homepage/addfeature">
                  <span class="text">Add New Feature</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/homepage/features">
                  <span class="text">View A.M Featurs</span>
                </a>
              </li>

            </ul>
            <!--/ END 2nd Level Menu -->
          </li>

          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#pages" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Pages</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="pages" class="submenu collapse ">
              <li class="submenu-header ellipsis">Pages</li>
              <li>
                <a href="">
                  <span class="text">Contact us</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="text">Support us</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="text">Free Counselling</span>
                </a>
              </li>
              <li>
                <a href="chart-flot.html">
                  <span class="text">View all Team members</span>
                </a>
              </li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#careers" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Career Guilde</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="careers" class="submenu collapse ">
              <li class="submenu-header ellipsis">Career Guide</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/career/add">
                  <span class="text">Add New Career Guide</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/career/viewAll">
                  <span class="text">View All Career Guide</span>
                </a>
              </li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#course" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Course Guide</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="course" class="submenu collapse ">
              <li class="submenu-header ellipsis">Course Guide</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/course/add">
                  <span class="text">Add New Course Guide</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/course/viewAll">
                  <span class="text">View All Course Guide</span>
                </a>
              </li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#mentorship" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Mentorship</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="mentorship" class="submenu collapse ">
              <li class="submenu-header ellipsis">Mentorship</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/mentorship/allmentors">
                  <span class="text">View All Mentors</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/mentorship/allmentees">
                  <span class="text">View All Mentee</span>
                </a>
              </li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#users" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-user"></i>
              </span>
              <span class="text">Users Management</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="users" class="submenu collapse ">
              <li class="submenu-header ellipsis">Users</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/users/allusers">
                  <span class="text">View All Users</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/mentorship/allmentees">
                  <span class="text"></span>
                </a>
              </li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#cate" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Category</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="cate" class="submenu collapse ">
              <li class="submenu-header ellipsis">Category</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/category/createcategory">
                  <span class="text">Create New Category</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/category">
                  <span class="text">View All Categories</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/mentorship/allmentees">
                  <span class="text"></span>
                </a>
              </li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#subscribers" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Subscribers List</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="subscribers" class="submenu collapse ">
              <li class="submenu-header ellipsis">Subscriber</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/Subscribers">
                  <span class="text">View All</span>
                </a><br /><br />
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/mentorship/allmentees">
                  <span class="text"></span>
                </a>
              </li>
              <li></li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#requests" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Free Requests</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="requests" class="submenu collapse ">
              <li class="submenu-header ellipsis">Free Requests</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/requests/freecounselling">
                  <span class="text">Free Counselling</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/requests/freecounselling">
                  <span class="text">Free Mentorship</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/mentorship/allmentees">
                  <span class="text"></span>
                </a>
              </li>
              <li></li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
          <li>
            <a href="javascript:void(0);" data-toggle="submenu" data-target="#social" data-parent=".topmenu">
              <span class="figure">
                <i class="ico-stats-up"></i>
              </span>
              <span class="text">Settings</span>
              <span class="arrow"></span>
            </a>
            <!-- START 2nd Level Menu -->
            <ul id="social" class="submenu collapse ">
              <li class="submenu-header ellipsis">Settings</li>
              <li>
                <a href="<?php echo base_url(); ?>admin/settings/socials">
                  <span class="text">Social Links</span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/requests/freecounselling">
                  <span class="text"></span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>admin/mentorship/allmentees">
                  <span class="text"></span>
                </a>
              </li>
              <li></li>
            </ul>
            <!--/ END 2nd Level Menu -->
          </li>
        </ul>
        <!--/ END Template Navigation/Menu -->
        <!-- START Sidebar summary -->

      </section>
      <!--/ END Sidebar Container -->
    </aside>
    <!--/ END Template Sidebar (Left) -->
    <!-- START Template Sidebar (right) -->
    <aside class="sidebar sidebar-right">
      <!-- START Offcanvas -->
      <div class="offcanvas-container" data-toggle="offcanvas" data-options='{"openerClass":"offcanvas-opener", "closerClass":"offcanvas-closer"}'>
        <!-- START Wrapper -->
        <div class="offcanvas-wrapper">
          <!-- Offcanvas Left -->
          <div class="offcanvas-left">
            <!-- Header -->
            <div class="header pl0 pr0">
              <ul class="list-table nm">
                <li style="width:50px;height:34px;" class="text-center">
                  <a href="javascript:void(0);" class="text-default offcanvas-closer">
                    <i class="ico-arrow-left6 fsize16"></i>
                  </a>
                </li>
                <li class="text-center">
                  <h5 class="semibold nm">Settings</h5>
                </li>
                <li style="width:50px;height:34px;" class="text-center">
                  <a href="javascript:void(0);" class="text-default">
                    <i class="ico-info22 fsize16"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!--/ Header -->
            <!-- Content -->
            <div class="content slimscroll">
              <h5 class="heading">News Feed</h5>
              <ul class="topmenu">
                <li>
                  <a href="javascript:void(0);">
                    <span class="figure">
                      <i class="ico-plus"></i>
                    </span>
                    <span class="text">Add &amp; Manage Source</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <span class="figure">
                      <i class="ico-google-plus"></i>
                    </span>
                    <span class="text">Google Reader</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <span class="figure">
                      <i class="ico-twitter2"></i>
                    </span>
                    <span class="text">Twitter Source</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
              <h5 class="heading">Friends</h5>
              <ul class="topmenu">
                <li>
                  <a href="javascript:void(0);">
                    <span class="figure">
                      <i class="ico-search22"></i>
                    </span>
                    <span class="text">Find Friends</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <span class="figure">
                      <i class="ico-user-plus2"></i>
                    </span>
                    <span class="text">Add Friends</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
              <h5 class="heading">Account</h5>
              <ul class="topmenu">
                <li>
                  <a href="javascript:void(0);">
                    <span class="figure">
                      <i class="ico-user2"></i>
                    </span>
                    <span class="text">Edit Account</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <span class="figure">
                      <i class="ico-envelop"></i>
                    </span>
                    <span class="text">Manage Subscription</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <span class="figure">
                      <i class="ico-location6"></i>
                    </span>
                    <span class="text">Location Service</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <span class="figure">
                      <i class="ico-switch"></i>
                    </span>
                    <span class="text">Logout</span>
                    <span class="arrow"></span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);" class="text-danger">
                    <span class="figure">
                      <i class="ico-minus-circle2"></i>
                    </span>
                    <span class="text">Deactivate</span>
                    <span class="arrow"></span>
                  </a>
                </li>
              </ul>
            </div>
            <!--/ Content -->
          </div>
          <!--/ Offcanvas Left -->
          <!-- Offcanvas Content -->
          <div class="offcanvas-content">
            <!-- Content -->
            <div class="content slimscroll">
              <!-- START profile -->
              <div class="panel nm">
                <!-- thumbnail -->
                <div class="thumbnail">
                  <!-- media -->
                  <div class="media">
                    <!-- indicator -->
                    <div class="indicator">
                      <span class="spinner"></span>
                    </div>
                    <!--/ indicator -->
                    <img data-toggle="unveil" src="../../image/background/400x250/placeholder.jpg" data-src="../../image/background/400x250/background3.jpg" alt="Cover" width="100%">
                  </div>
                  <!--/ media -->
                </div>
                <!--/ thumbnail -->
              </div>
              <div class="panel-body text-center" style="margin-top:-55px;z-index:11">
                <img class="img-circle mb5" src="../../image/avatar/avatar7.jpg" alt="" width="75">
                <h5 class="bold mt0 mb5">Erich Reyes</h5>
                <p>Administrator</p>
                <button type="button" class="btn btn-primary offcanvas-opener offcanvas-open-ltr">
                  <i class="ico-settings"></i> Settings</button>
              </div>
              <!--/ END profile -->
              <!-- START contact -->
              <div class="media-list media-list-contact">
                <h5 class="heading pa15 pb0">Family</h5>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar1.jpg" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-success mr5"></span> Autumn Barker</span>
                    <span class="media-meta ellipsis">Malaysia</span>
                  </span>
                </a>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar2.jpg" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-success mr5"></span> Giselle Horn</span>
                    <span class="media-meta ellipsis">Bolivia</span>
                  </span>
                </a>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar.png" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-danger mr5"></span> Austin Shields</span>
                    <span class="media-meta ellipsis">Timor-Leste</span>
                  </span>
                </a>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar.png" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-danger mr5"></span> Caryn Gibson</span>
                    <span class="media-meta ellipsis">Libya</span>
                  </span>
                </a>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar3.jpg" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-success mr5"></span> Nash Evans</span>
                    <span class="media-meta ellipsis">Honduras</span>
                  </span>
                </a>
                <h5 class="heading pa15 pb0">Friends</h5>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar4.jpg" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-default mr5"></span> Josiah Johnson</span>
                    <span class="media-meta ellipsis">Belgium</span>
                  </span>
                </a>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar.png" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-default mr5"></span> Philip Hewitt</span>
                    <span class="media-meta ellipsis">Bahrain</span>
                  </span>
                </a>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar5.jpg" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-default mr5"></span> Wilma Hunt</span>
                    <span class="media-meta ellipsis">Dominica</span>
                  </span>
                </a>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar6.jpg" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-success mr5"></span> Noah Gill</span>
                    <span class="media-meta ellipsis">Guatemala</span>
                  </span>
                </a>
                <h5 class="heading pa15 pb0">Others</h5>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar8.jpg" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-success mr5"></span> David Fisher</span>
                    <span class="media-meta ellipsis">French Guiana</span>
                  </span>
                </a>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar9.jpg" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-success mr5"></span> Samantha Avery</span>
                    <span class="media-meta ellipsis">Jersey</span>
                  </span>
                </a>
                <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                  <span class="media-left">
                    <img src="../../image/avatar/avatar.png" class="media-object img-circle" alt="">
                  </span>
                  <span class="media-body media-middle">
                    <span class="media-heading">
                      <span class="hasnotification hasnotification-success mr5"></span> Madaline Medina</span>
                    <span class="media-meta ellipsis">Finland</span>
                  </span>
                </a>
              </div>
              <!--/ END contact -->
            </div>
            <!--/ Content -->
          </div>
          <!--/ Offcanvas Content -->
          <!-- Offcanvas Right -->
          <div class="offcanvas-right">
            <!-- Header -->
            <div class="header pl0 pr0">
              <ul class="list-table nm">
                <li style="width:50px;height:34px;" class="text-center">
                  <a href="javascript:void(0);" class="text-default offcanvas-closer">
                    <i class="ico-arrow-left6 fsize16"></i>
                  </a>
                </li>
                <li class="text-center">
                  <h5 class="semibold nm">Autumn Barker</h5>
                </li>
                <li style="width:50px;height:34px;" class="text-center">
                  <a href="javascript:void(0);" class="text-default">
                    <i class="ico-info22 fsize16"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!--/ Header -->
            <!-- Footer -->
            <div class="footer">
              <div class="has-icon">
                <input type="text" class="form-control" placeholder="Type message...">
                <i class="ico-paper-plane form-control-icon"></i>
              </div>
            </div>
            <!--/ Footer -->
            <!-- Content -->
            <div class="content slimscroll">
              <!-- START chat -->
              <ul class="media-list media-list-bubble">
                <li class="media">
                  <div class="media-body media-middle">
                    <p class="media-text">eros non enim commodo hendrerit.</p>
                    <span class="clearfix"></span>
                    <p class="media-text">Suspendisse dui.</p>
                    <span class="clearfix"></span>
                    <p class="media-text">eu nulla at</p>
                    <!-- meta -->
                    <span class="clearfix"></span>
                    <!-- important: clearing floated media text -->
                    <p class="media-meta">Sun, Mar 02</p>
                  </div>
                  <div class="media-right">
                    <a href="javascript:void(0);" class="media-object">
                      <img src="../../image/avatar/avatar7.jpg" class="img-circle" alt="">
                    </a>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <a href="javascript:void(0);" class="media-object">
                      <img src="../../image/avatar/avatar6.jpg" class="img-circle" alt="">
                    </a>
                  </div>
                  <div class="media-body media-middle">
                    <p class="media-text">Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat.</p>
                    <span class="clearfix"></span>
                    <p class="media-text">faucibus ut, nulla. Cras eu tellus</p>
                    <!-- meta -->
                    <span class="clearfix"></span>
                    <!-- important: clearing floated media text -->
                    <p class="media-meta">Tue, Oct 01</p>
                  </div>
                </li>
                <li class="media">
                  <div class="media-body media-middle">
                    <p class="media-text">Duis a mi fringilla mi lacinia mattis. Integer</p>
                    <!-- meta -->
                    <span class="clearfix"></span>
                    <!-- important: clearing floated media text -->
                    <p class="media-meta">Fri, Sep 27</p>
                  </div>
                  <div class="media-right">
                    <a href="javascript:void(0);" class="media-object">
                      <img src="../../image/avatar/avatar7.jpg" class="img-circle" alt="">
                    </a>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <a href="javascript:void(0);" class="media-object">
                      <img src="../../image/avatar/avatar6.jpg" class="img-circle" alt="">
                    </a>
                  </div>
                  <div class="media-body media-middle">
                    <p class="media-text">Praesent interdum ligula eu enim. Etiam imperdiet dictum magna.</p>
                    <!-- meta -->
                    <span class="clearfix"></span>
                    <!-- important: clearing floated media text -->
                    <p class="media-meta">Wed, Aug 28</p>
                  </div>
                </li>
                <li class="media">
                  <div class="media-body media-middle">
                    <p class="media-text">Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna.</p>
                    <!-- meta -->
                    <span class="clearfix"></span>
                    <!-- important: clearing floated media text -->
                    <p class="media-meta">Sat, Sep 27</p>
                  </div>
                  <div class="media-right">
                    <a href="javascript:void(0);" class="media-object">
                      <img src="../../image/avatar/avatar7.jpg" class="img-circle" alt="">
                    </a>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <a href="javascript:void(0);" class="media-object">
                      <img src="../../image/avatar/avatar6.jpg" class="img-circle" alt="">
                    </a>
                  </div>
                  <div class="media-body media-middle">
                    <p class="media-text">Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac</p>
                    <span class="clearfix"></span>
                    <p class="media-text">Nam porttitor scelerisque neque</p>
                    <!-- meta -->
                    <span class="clearfix"></span>
                    <!-- important: clearing floated media text -->
                    <p class="media-meta">Sun, Feb 22</p>
                  </div>
                </li>
              </ul>
              <!--/ END chat -->
            </div>
            <!--/ Content -->
          </div>
          <!--/ Offcanvas Right -->
        </div>
        <!--/ END Wrapper -->
      </div>
      <!--/ END Offcanvas -->
    </aside>
    <!--/ END Template Sidebar (right) -->
