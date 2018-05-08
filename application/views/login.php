<?php if(validation_errors()==true) { ?>
  <div class="container">
  	<div class="alert">
  	  <span class="close_alert_btn" onclick="this.parentElement.style.display='none';">×</span>
  	  <?php echo validation_errors(); ?>
  	</div>
  </div>
  <?php } ?>
<?php if($this->session->flashdata('error')) { ?>
<div class="container">
	<div class="alert alert-success">
	  <span class="close_alert_btn" onclick="this.parentElement.style.display='none';">×</span>
	  <?php echo $this->session->flashdata('error'); ?>
	</div>
</div>
<?php } ?>

<div class="container">
<!-- SIGN IN -->
		<div  class="tabcontent" style="display: block;">
			<div class="container">
			  <div class="col-sm-offset-3 col-sm-6">
				<h1 class="signin_text">Sign in</h1>
				<hr class="signin_hr">
			  </div>
			</div>

			<div class="container">
			  <form class="form-horizontal" action="login/authenticate" method="post">
				<div class="form-group">
				  <label class="sr-only control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-offset-3 col-sm-6">
					<input
						type="email"
						class="form-control extra"
						id="email"
						placeholder="Enter email"
						name="email"
						value="<?php echo set_value('email'); ?>"
						required
					/>
				  </div>
				</div>
				<div class="form-group">
				  <label class="sr-only control-label col-sm-2" for="pwd">Password:</label>
				  <div class="col-sm-offset-3 col-sm-6">
					<input
						type="password"
						class="form-control extra"
						id="password"
						placeholder="Enter password"
						name="password"
						required
					/>
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-sm-offset-3 col-sm-6">
					<div class="checkbox">
					  <label><input type="checkbox" name="remember"> Remember me</label>
					</div>
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-sm-offset-3 col-sm-6">
					<input type="submit" class="btn btn-info signin_btn" name="submit" value="Sign in">
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-sm-offset-3 col-sm-6">
					  <a href="#" class="forgot_pass">Forgot your password?</a>
				  </div>
				</div>
				<div class="form-group text-center">
					<div class="col-sm-offset-3 col-sm-6 social-login">
					<h3>...or sign in with:</h3>
						<div class="social-login-buttons">
							<a class="btn btn-link-2" href="#">
								<i class="fa fa-facebook"></i> Facebook
							</a>
							<a class="btn btn-link-2" href="#">
								<i class="fa fa-linkedin"></i> LinkedIn
							</a>

						</div>
					</div>
				</div>
			  </form>
			</div>
		</div>
</div>
<style media="screen">
	.tabcontent {
		display: inline-block!important;
	}
</style>
