<!DOCTYPE html>
<html class="backend">
  <!-- START Head -->
  <head>
    <!-- START META SECTION -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mentors Hub - backend</title>
    <meta name="author" content="pampersdry.info">
    <meta name="description" content="Clearnizr is a clean and flat backend and frontend theme build with twitter bootstrap">
    <meta name="keywords" content="admin, admin template, admin themes, bootstrap, Bootstrap 3, bower, cms, dashboard, flat, grunt, html template, Jekyll, minimal, premium admin templates, responsive">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!--/ END META SECTION -->
    <!-- START STYLESHEETS -->
    <!-- Plugins stylesheet : optional -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/animatecss/css/animate.css">
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
    <!-- END STYLESHEETS -->
  </head>
  <!--/ END Head -->
  <!-- START Body -->
  <body data-baseurl="<?php echo base_url(); ?>">
    <!-- START Template Main -->
    <section id="main" role="main">
      <!-- START Template Container -->
      <div class="container">
        <!-- START row -->
        <div class="row">
          <div class="col-lg-4 col-lg-offset-4">
            <!-- Brand -->
            <div class="text-center" style="margin-bottom:40px;">
              <h3>Alumni Mentoring</h3>
              <h5 class="semibold text-muted mt-5">Welcome Admin. login to your account.</h5>
            </div>
            <!--/ Brand -->

            <!-- Login form -->
            <form class="panel" name="form-login" action="<?php echo base_url(); ?>admin/login" method="post">
              <div class="panel-body">
                <!-- Alert message -->
                <div class="alert alert-success">
                  <span class="semibold">Login to your account </span>
                </div>
                <!--/ Alert message -->
                <div class="form-group">
                  <div class="form-stack has-icon pull-right">
                    <input name="email" type="text" class="form-control input-lg" value="admin" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your username / email" data-parsley-required>
                    <i class="ico-user2 form-control-icon"></i>
                  </div>
                  <div class="form-stack has-icon pull-right">
                    <input name="password" type="password" class="form-control input-lg" placeholder="Password" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                    <i class="ico-lock2 form-control-icon"></i>
                  </div>
                </div>
                <!-- Error container -->
                <div id="" class="alert alert-danger"><?php if(isset($error)) echo $error; ?></div>
                <!--/ Error container -->
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="checkbox custom-checkbox">
                        <input type="checkbox" name="remember" id="remember" value="1">
                        <label for="remember">&nbsp;&nbsp;Remember me</label>
                      </div>
                    </div>
                    <div class="col-xs-6 text-right">
                      <a href="javascript:void(0);">Lost password?</a>
                    </div>
                  </div>
                </div>
                <div class="form-group nm">
                  <input type="submit" class="btn btn-block btn-success" value="Sign In"/>

                </div>
              </div>
            </form>
            <!--/ Login form -->
            </div>
        </div>
        <!--/ END row -->
      </div>
      <!--/ END Template Container -->
    </section>
    <!--/ END Template Main -->
    <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
    <!-- Application and vendor script : mandatory -->
    <script type="text/javascript">
      document.createElement('picture');
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>javascript/vendor.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>javascript/core.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>javascript/backend/app.js"></script>
    <!--/ Application and vendor script : mandatory -->
    <!-- Plugins and page level script : optional -->
    <script type="text/javascript" src="<?php echo base_url(); ?>plugins/parsley/js/parsley.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>javascript/backend/pages/login.js"></script>
    <!--/ Plugins and page level script : optional -->
  </body>
  <!--/ END Body -->
</html>
