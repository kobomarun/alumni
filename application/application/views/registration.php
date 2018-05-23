<?php if(validation_errors()==true) { ?>
  <div class="container">
  	<div class="alert">
  	  <span class="close_alert_btn" onclick="this.parentElement.style.display='none';">×</span>
  	  <?php echo validation_errors(); ?>
  	</div>
  </div>
  <?php } ?>
<?php if($this->session->flashdata('success')) { ?>
<div class="container">
	<div class="alert alert-success">
	  <span class="close_alert_btn" onclick="this.parentElement.style.display='none';">×</span>
	  <?php echo $this->session->flashdata('success'); ?>
	</div>
</div>
<?php } ?>
<div class="container">

<!-- SIGN UP -->
		<div id="signup" class="tabcontent" style="display: block;">
			<div class="container">
			  <div class="col-sm-offset-3 col-sm-6">
				<h1 class="signin_text">Sign up</h1>
				<hr class="signup_hr">
			  </div>
			</div>

			<div class="container">
			  <form class="form-horizontal" action="<?php echo base_url(); ?>registration/saveuser" method="post">
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
              <label style="margin-right:px;"> Select your title</label><br />
              <select class="" name="title" style="height:50px; width:100%; border-radius:5px;" required />

                <option value="Mr">Mr</option>
                <option value="Mr2">Mrs</option>
                <option value="Master">Master</option>
                <option value="Miss">Miss</option>
                <option value="Ms">Ms</option>
                <option value="Dr">Dr</option>
                <option value="1">Prof</option>
                <option value="Prof">Honourable</option>
                <option value="Honourable">Iman</option>
                <option value="Shaykh">Shaykh</option>
                <option value="Alhaj">Alhaj</option>
                <option value="Alhaja">Alhaja</option>
                <option value="Pastor">Pastor</option>
                <option value="Elder">Elder</option>
                <option value="Revrend">Revrend</option>
                <option value="Father">Father</option>
                <option value="Sister">Sister</option>
              </select>
  <!--          <label for="yes" class="radio-inline">  <input type="radio" name="mentor" value="1" style="width: 20px;border: 5px solid #0DFF92;"/>Yes</label>
              <label for="no" class="radio-inline"><input type="radio" name="mentor"  value="0" style="width: 20px;"/> No</label>-->
            </div>
          </div>
        <div class="form-group">
				  <label class="sr-only control-label col-sm-2" for="surname">Surname:</label>
				  <div class="col-sm-offset-3 col-sm-6">
					<input
            type="text"
            class="form-control extra"
            id="surname"
            placeholder="Enter your surname"
            name="surname"
            value="<?php echo set_value('surname'); ?>"
            required
            />
				  </div>
				</div>
				<div class="form-group">
				  <label class="sr-only control-label col-sm-2" for="firstname">First Name:</label>
				  <div class="col-sm-offset-3 col-sm-6">
					<input
            type="text"
            class="form-control extra"
            id="ftname"
            placeholder="Enter your first name"
            name="fname"
            value="<?php echo set_value('fname'); ?>"
            required
          />
				  </div>
				</div>
				<div class="form-group">
				  <label class="sr-only control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-offset-3 col-sm-6">
					<input
            type="email"
            class="form-control extra"
            id="email"
            placeholder="Enter your email"
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
				  <label class="sr-only control-label col-sm-2" for="pwd">Confirm Password:</label>
				  <div class="col-sm-offset-3 col-sm-6">
					<input
          type="password"
          class="form-control extra"
          id="cpassword"
          placeholder="Confirm password"
          name="cpassword"
          required
         />
				  </div>
				</div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-6">
            <label style="margin-right:px;"> Please, select how you would like to register </label><br />
            <select class="" name="mentor" style="height:50px; width:100%; border-radius:5px;" required>

              <option value="1">As a Mentor</option>
              <option value="2">As a Mentee</option>
              <option value="3">As a Mentor and Mentee</option>
            </select>
<!--          <label for="yes" class="radio-inline">  <input type="radio" name="mentor" value="1" style="width: 20px;border: 5px solid #0DFF92;"/>Yes</label>
            <label for="no" class="radio-inline"><input type="radio" name="mentor"  value="0" style="width: 20px;"/> No</label>-->
          </div>
        </div>
				<div class="form-group">
				  <div class="col-sm-offset-3 col-sm-6">
					<div class="checkbox">
					  <label><input type="checkbox" name="check" id="check" required/>I agree to Alumni Mentoring's <a href="#" class="terms_policy">terms of service</a>, <a href="#" class="terms_policy">privacy policy</a> and <a href="#" class="terms_policy">community guidelines</a> and consent to receiving marketing communications.</label>
					</div>
				  </div>
				</div>
				<div class="form-group">
				  <div class="col-sm-offset-3 col-sm-6">
					<input type="submit" class="btn btn-info signin_btn" name="submit" value="Register" />
				  </div>
				</div>
				<div class="form-group text-center">
					<div class="col-sm-offset-3 col-sm-6 social-login">
					<h3>...or sign up with:</h3>
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
<script type="text/javascript">
  var password = document.getElementById("password");
  var confirm_password = document.getElementById("cpassword");
  var check = document.getElementById("check");

  function validatePassword(){
    if(password.value != confirm_password.value ) {
      confirm_password.setCustomValidity("Passwords Don't Match");
    } elseif(check.value != checked) {
      check.setCustomValidity("Agree to terms and condition");
    }
    else {
      confirm_password.setCustomValidity('');
    }
  }

  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
</script>
