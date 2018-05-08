<div class="container">
	<div class="row">
		<?php if($this->session->flashdata('complete')) { ?>
		<div class="container">
			<div class="alert alert-success">
			  <span class="close_alert_btn" onclick="this.parentElement.style.display='none';">×</span>
			  <?php echo "Note! You must add your profile picture and secondary education before you can add mentors and mentees."; ?>
			</div>
		</div>
		<?php } ?>

		<div class="col-md-9 profile_container">

			<div class="col-md-12">
				<div class="profile_area text-center">
					<?php if(!empty($profile['img'])) { ?>
						<a href="#"><img class="img-responsive profile_pic" src="<?php echo base_url(); ?>uploads/profile/<?php echo $profile['img']; ?>" alt="user1"></a>
 				<?php } else { ?>
					<a href="#"><img class="img-responsive profile_pic" src="<?php echo base_url(); ?>images/no_image_user.png" alt="user1"></a>
				<?php } ?>
					<p class="my_name">Welcome <?php echo $this->session->userdata('fname') . "  " . $this->session->userdata('lname'); ?></p>
					<p class="welcome_msg">Please use the form below to add details about your education, professional experience, certification, and organisation membership. <span style="color:red;">PLEASE NOTE: Without adding your profile picture and secondary school education, you will not be able to add mentors and accept mentees.</span></p>
				</div>
			</div>

			<div class="col-md-12">
				<p class="profile_form_header">ADD PERSONAL SUMMARY</p>
				<div class="profile_report_post">
					<button onclick="addSummary()">Personal Summary</button>
				</div>

				<div id="addSummary">
					<form class="profile_report_form" onsubmit="personalSummary(event)">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Personal Summary:</p>
								<textarea id="personal_summary" class="textarea_text" placeholder="" required></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Personal LinkedIn url:</p>
								<input type="text" id="mylinkedin" class="input_text_logo" placeholder="Enter your linkedin public profile url">
								<img src="<?php echo base_url() ?>images/01followlinkedin.png" class="input_img">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Personal Twitter url:</p>
								<input type="text" id="twitter" class="input_text_logo" placeholder="Enter your twitter url">
								<img src="<?php echo base_url() ?>images/01followtwitter.png" class="input_img">
							</div>
						</div>
						<div class="row" style="display:none" id="ploading">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<input type="submit" value="Save Summary" class="profile_report_submit">
					</form>
				</div>
			</div>
			<!--END OF ADD PERSONAL SUMMARY -->

			<!-- ADD EDUCATION -->
			<div class="col-md-12">
				<p class="profile_form_header">ADD EDUCATION</p>
				<div class="profile_report_post">
					<button onclick="addEducation1()">Secondary Education</button>
				</div>

				<div id="addEducation1">
					<form class="profile_report_form" onsubmit="addSecondarySchool(event)">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">School/Institution:</p>
								<input type="text" id="s_name" class="input_text" placeholder="" autocomplete="off" onkeyup="ajaxSearch();" required/>
								<input type="hidden" id="s_mentor" class="input_text" value="<?php echo $this->session->userdata('mentor'); ?>" >
							</div>
							<div id="secondary" class="suggestion"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Degree/Qualification:</p>
								<input type="text" id="s_degree" class="input_text" placeholder="Ex: SSCE" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Field of study:</p>
								<input type="text" id="s_field" class="input_text" placeholder="Ex: Science, Commercial, Art" required/>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Years:</p>
								<select class="select_text" id="s_from" required>
									<option value="">Year</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php

											echo $newDate;

										?>
									</option>
								<?php } ?>
								</select>
							</div>
							<div class="col-md-6">
							<p class="form_text">To Year (or expected):</p>
								<select class="select_text" id="s_to" required>
									<option value="">Year</option>
									<option value="<?php echo date('Y'); ?>">Present</option>

								<?php
								$oldDate = 1919;
								//$newDate = date("Y");
								for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
								?>
								<option value="<?php echo $newDate; ?>">
									<?php


										echo $newDate;

									?>
								</option>
							<?php } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Activities:</p>
								<textarea id="s_activities" class="textarea_text" placeholder="Football, Sport Club"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Achievements/Awards:</p>
								<textarea id="s_award" class="textarea_text" placeholder="Ex: Fine Art Award"></textarea>
							</div>
						</div>
						<div class="row" style="display:none" id="loadEdu">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Save and Submit" class="profile_report_submit">
							</div>
						</div>
					</form>
				</div>


				<div class="profile_report_post">
					<button onclick="addEducation2()">Tertiary Education</button>
				</div>

				<div id="addEducation2">
					<form class="profile_report_form" onsubmit="addUni(event)">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">School/Institution:</p>
								<input type="text" id="t_name" class="input_text" placeholder="" autocomplete="off" onkeyup="uniSearch();" required/>
								<input type="hidden" id="t_mentor" class="input_text" value="<?php echo $this->session->userdata('mentor'); ?>">
								<div id="suggestions" class="suggestion"></div>

							</div>
							<div id="suggestions" class="suggestion"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Degree/Qualification:</p>
								<input type="text" id="t_degree" class="input_text" placeholder="Ex: BSc." required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Field of study:</p>
								<input type="text" id="t_field" class="input_text" placeholder="Ex: Medicine" required/>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Year:</p>
								<select class="select_text" id="t_from" required>
									<option value="">Year</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php echo $newDate;
										?>
									</option>
								<?php } ?>
								</select>
							</div>
							<div class="col-md-6">
							<p class="form_text">To Year (or expected):</p>
								<select class="select_text" id="t_to" required>
									<option value="">Year</option>
									<option value="<?php echo date("Y"); ?>">Present</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php
											echo $newDate;

										?>
									</option>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Activities:</p>
								<textarea id="t_activities" class="textarea_text" placeholder="Football, Sport Club"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Achievements/Awards:</p>
								<textarea id="t_award" class="textarea_text" placeholder="Ex. Fine Art Award"></textarea>
							</div>
						</div>
						<div class="row" style="display:none" id="loadTer">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Save and Submit" class="profile_report_submit" id="ter_submit">
							</div>
						</div>
					</form>
				</div>


				<div class="profile_report_post">
					<button onclick="addEducation3()">Master's Degree</button>
				</div>

				<div id="addEducation3">
					<form class="profile_report_form" onsubmit="addMaster(event)">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">School/Institution:</p>
								<input type="text" id="m_name" class="input_text" placeholder="" required/>
								<input type="hidden" id="m_mentor" class="input_text" value="<?php echo $this->session->userdata('mentor'); ?>">

							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Degree/Qualification:</p>
								<input type="text" id="m_degree" class="input_text" placeholder="" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Field of study:</p>
								<input type="text" id="m_field" class="input_text" placeholder="">
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Year:</p>
								<select class="select_text" id="m_from" required>
									<option value="">Year</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php
											echo $newDate;

										?>
									</option>
								<?php } ?>
								</select>
							</div>
							<div class="col-md-6">
							<p class="form_text">To Year (or expected):</p>
								<select class="select_text" id="m_to" required>
									<option value="">Year</option>
									<option value="<?php echo date('Y'); ?>">Present</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php
											echo $newDate;
										?>
									</option>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Activities:</p>
								<textarea id="m_activities" class="textarea_text" placeholder="Football, Sport Club"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Achievements/Awards:</p>
								<textarea id="m_award" class="textarea_text" placeholder="Ex. Fine Art Award"></textarea>
							</div>
						</div>
						<div class="row" style="display:none" id="loadMas">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Save and Submit" class="profile_report_submit" id="mas_submit">
							</div>
						</div>
					</form>
				</div>

				<div class="profile_report_post">
					<button onclick="addEducation4()">Doctoral Degree</button>
				</div>

				<div id="addEducation4">
					<form class="profile_report_form" onsubmit="addDegree(event)">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">School/Institution:</p>
								<input type="text" id="d_name" class="input_text" placeholder="" required/>
								<input type="hidden" id="d_mentor" class="input_text" value="<?php echo $this->session->userdata('mentor'); ?>">

							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Degree/Qualification:</p>
								<input type="text" id="d_degree" class="input_text" placeholder="" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Field of study:</p>
								<input type="text" id="d_field" class="input_text" placeholder="" required/>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Year:</p>
								<select class="select_text" id="d_from" required>
									<option value="">Year</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php
											echo $newDate;

										?>
								</option>

							<?php } ?>
								</select>
							</div>
							<div class="col-md-6">
							<p class="form_text">To Year (or expected):</p>
								<select class="select_text" id="d_to" required>
									<option value="">Year</option>
									<option value="<?php echo date('Y'); ?>">Present</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php
											echo $newDate;
											?>

									</option>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Activities:</p>
								<textarea id="d_activities" class="textarea_text" placeholder="Football, Sport Club"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Achievements/Awards:</p>
								<textarea id="d_award" class="textarea_text" placeholder="Ex. Fine Art Award"></textarea>
							</div>
						</div>
						<div class="row" style="display:none" id="loadDeg">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Save and Submit" class="profile_report_submit" id="degree_submit">
							</div>
						</div>
					</form>
				</div>
			</div>



			<!-- ADD EXPERIENCE -->
			<div class="col-md-12">
				<p class="profile_form_header">ADD EXPERIENCE</p>
				<div class="profile_report_post">
					<button onclick="addExperience1()">Recent Experience</button>
				</div>

				<div id="addExperience1">
					<form class="profile_report_form" onsubmit="addRecentExperience(event)">

						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Title:</p>
								<input type="text" id="title" class="input_text" placeholder="Ex: Doctor" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Company Name:</p>
								<input type="text" id="company" class="input_text" placeholder="" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Location:</p>
								<input type="text" id="state" class="input_text" placeholder="Ex: Lagos" required/>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Year:</p>
								<select class="select_text" id="e_from" required>
									<option value="">Year</option>
									<?php
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php
											echo $newDate;

										?>
									</option>
								<?php } ?>

								</select>
							</div>
							<div class="col-md-6">
							<p class="form_text">To Year (or expected):</p>
								<select class="select_text" id="e_to" required>
									<option value="">Year</option>
									<option value="<?php echo date("Y"); ?>">Present</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php
											echo $newDate;

										?>
									</option>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="row" style="display:none" id="loadExp">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Save and Submit" class="profile_report_submit" id="recent_submit">
							</div>
						</div>
					</form>
				</div>

				<div class="profile_report_post">
					<button onclick="addExperience2()">Previous Experience</button>
				</div>

				<div id="addExperience2">
					<form class="profile_report_form" onsubmit="addPreviousExperience(event)">

						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Title:</p>
								<input type="text" id="p_title" class="input_text" placeholder="Ex: Doctor" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Company Name:</p>
								<input type="text" id="p_company" class="input_text" placeholder="" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Location:</p>
								<input type="text" id="p_state" class="input_text" placeholder="Ex: Lagos" required/>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Year:</p>
								<select class="select_text" id="p_from" required/>
									<option value="">Year</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php
											echo $newDate;

										?>
									</option>
								<?php } ?>
								</select>
							</div>
							<div class="col-md-6">
							<p class="form_text">To Year (or expected):</p>
								<select class="select_text" id="p_to" required/>
									<option value="">Year</option>
									<option value="<?php echo date('Y'); ?>">Present</option>
									<?php
									$oldDate = 1919;
									//$newDate = date("Y");
									for($newDate = date("Y"); $newDate >= $oldDate; $newDate--) {
									?>
									<option value="<?php echo $newDate; ?>">
										<?php
										echo $newDate;
										?>
									</option>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="row" style="display:none" id="loadPrev">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Save and Submit" class="profile_report_submit" id="prev_submit">
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-md-12">
				<p class="profile_form_header">ADD CERTIFICATION</p>
				<div class="profile_report_post">
					<button onclick="addCertification()">Certification</button>
				</div>

				<div id="addCertification">
					<form class="profile_report_form" onsubmit="submitCertificate(event)">
					<p style="color: #ff7361;">You can add up to 5 certifications</p>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">1. Certification Name:</p>
								<input type="text" id="cname" class="input_text" placeholder="Ex: PRINCE2" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Certification Authority:</p>
								<input type="text" id="cauthority" class="input_text" placeholder="Ex: AXELOS" required/>
							</div>
						</div><br/>
						<div class="row" style="display:none" id="loadCert">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Save and Submit" class="profile_report_submit">
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-md-12">
				<p class="profile_form_header">ADD MEMBERSHIP</p>
				<div class="profile_report_post">
					<button onclick="addMembership()">Organisation Membership</button>
				</div>

				<div id="addMembership">
					<form class="profile_report_form" onsubmit="submitMembership(event)">
					<p style="color: #ff7361;">You can add up to 5 different memberships</p>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">1. Organisation Name:</p>
								<input type="text" id="orgName1" class="input_text" placeholder="" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Membership Level:</p>
								<input type="text" id="level1" class="input_text" placeholder="Ex: Associate" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Organisation url:</p>
								<input type="text" id="url1" class="input_text" placeholder="">
							</div>
						</div><br />

						<div class="row" style="display:none" id="loadMem">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Save and Submit" class="profile_report_submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="add_advert">
				<p>Advert</p>
			</div>
		</div>
	</div>
</div>
