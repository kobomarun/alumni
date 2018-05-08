<div class="container">
	<div class="row">
		<div class="col-md-9 profile_container">

			<div class="col-md-12">
				<div class="profile_area text-center">
					<div class=""> <?php echo $this->session->flashdata('success'); ?></div>
					 <small class="error"><?php if(isset($pic_error)) echo $pic_error; ?></small>
					<?php if(!empty($profile['img'])) { ?>
						<a href="#profile_image" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>
						<a href="#">
							<img class="img-responsive profile_pic" src="<?php echo base_url(); ?>uploads/profile/<?php echo $profile['img']; ?>" alt="user1"></a>

							<?php } else { ?>
					<a href="#profile_image" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>
					<a href="#"><img class="img-responsive profile_pic" src="<?php echo base_url(); ?>images/no_image_user.png" alt="user1"></a>
				<?php } ?>
					<p class="my_name"><?php echo $this->session->userdata('fname') ." " .$this->session->userdata('lname'); ?></p>
					<p class="profile_intro">
						<?php foreach($edu as $row)  { echo $row->school_name . " | "; }?>
					</p>
				</div><br />
				<?php foreach($summary as $row)  { ?>
				<div class="main_area">
					<p class="profile_header">Personal Summary</p>
					<a href="#pSummary" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>
					<p class="personal_summary"><?php echo $row->summary; ?></p>
					<div class="input_img_cont">
						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-1 summary_soc_icon">
								<img src="<?php echo base_url(); ?>images/01followlinkedin.png" class="input_sum_img">
							</div>
							<div class="col-xs-11 col-sm-11 col-md-11">
								<p class="personal_sum_soc"><a href="http://linkedin.com/<?php echo $row->linkedin; ?>"><?php echo $row->linkedin; ?></a></p>
							</div>
						</div>
					</div>

					<div class="input_img_cont">
						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-1 summary_soc_icon">
								<img src="<?php echo base_url(); ?>images/01followtwitter.png" class="input_sum_img">
							</div>
							<div class="col-xs-11 col-sm-11 col-md-11">
								<p class="personal_sum_soc"><a href="http://twitter.com/<?php echo $row->twitter; ?>"><?php echo $row->twitter; ?></a></p>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>

				<!-- Education -->
				<div class="main_area">
					<div>
						<p class="profile_header">Education</p>
					</div>
					<div><?php  if(!empty($sec)) {  ?>
						<p class="profile_header">Secondary School</p>
						<a href="#secondary" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>

					</div>
					<?php foreach($sec as $row) { ?>
					<div>
						<p class="subject_title"><a href="#"><?php echo $row->school_name; ?></a></p>
						<p class="personal_summary"><strong>Year:</strong> <?php echo $row->year; ?></p>
						<p class="personal_summary"><strong>Degree:</strong> <?php echo $row->degree; ?></p>
						<p class="personal_summary"><strong>Field of study:</strong> <?php echo $row->field; ?></p>
						<p class="personal_summary"><strong>Activities:</strong> <?php echo $row->activities; ?></p>
						<p class="personal_summary"><strong>Achievements/Awards:</strong> <?php echo $row->awards; ?></p>
						<!--<p class="personal_summary"><strong>Dissertation/Research papers:</strong> Improvement of inter-symbol interference in optical communications</p>
						<p class="see_more"><a href="#"><strong>... see more</strong></a></p>-->
						<a href="<?php echo base_url(); ?>profile/deleteSec/<?php echo $row->id;?>" ><p class="profile_edit_it"><i class="fa fa-close" aria-hidden="true"></i><span class="tooltiptext">Delete</span></p></a>

					</div>

					<hr class="profile_divider">
				<?php }} ?>
					<div><?php  if(!empty($ter)) {  ?>
						<p class="profile_header">Tertiary Education</p>
						<a href="#tertiary" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>
					</div>
					<?php foreach($ter as $row) { ?>
					<div>
						<p class="subject_title"><a href="#"><?php echo $row->school_name; ?></a></p>
						<p class="personal_summary"><strong>Year:</strong> <?php echo $row->year; ?></p>
						<p class="personal_summary"><strong>Degree:</strong> <?php echo $row->degree; ?></p>
						<p class="personal_summary"><strong>Field of study:</strong> <?php echo $row->field; ?></p>
						<p class="personal_summary"><strong>Activities:</strong> <?php echo $row->activities; ?></p>
						<p class="personal_summary"><strong>Achievements/Awards:</strong> <?php echo $row->awards; ?></p>
						<a href="<?php echo base_url(); ?>profile/deleteSec/<?php echo $row->id;?>" ><p class="profile_edit_it"><i class="fa fa-close" aria-hidden="true"></i><span class="tooltiptext">Delete</span></p></a>

					</div>

					<hr class="profile_divider">
				<?php } }?>
					<div><?php  if(!empty($mas)) {  ?>
						<p class="profile_header">Masters Degree</p>
						<a href="#master" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>

					</div>
					<?php foreach($mas as $row) { ?>
					<div>
						<p class="subject_title"><a href="#"><?php echo $row->school_name; ?></a></p>
						<p class="personal_summary"><strong>Year:</strong> <?php echo $row->year; ?></p>
						<p class="personal_summary"><strong>Degree:</strong> <?php echo $row->degree; ?></p>
						<p class="personal_summary"><strong>Field of study:</strong> <?php echo $row->field; ?></p>
						<p class="personal_summary"><strong>Activities:</strong> <?php echo $row->activities; ?></p>
						<p class="personal_summary"><strong>Achievements/Awards:</strong> <?php echo $row->awards; ?></p>
						<a href="<?php echo base_url(); ?>profile/deleteSec/<?php echo $row->id;?>" ><p class="profile_edit_it"><i class="fa fa-close" aria-hidden="true"></i><span class="tooltiptext">Delete</span></p></a>

					</div>

					<hr class="profile_divider">
				<?php } }?>

				<div><?php  if(!empty($dr)) {  ?>
					<p class="profile_header">Doctorate Degree </p>
					<a href="#doctor" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>

				</div>
				<?php foreach($dr as $row) { ?>
				<div>
					<p class="subject_title"><a href="#"><?php echo $row->school_name; ?></a></p>
					<p class="personal_summary"><strong>Year:</strong> <?php echo $row->year; ?></p>
					<p class="personal_summary"><strong>Degree:</strong> <?php echo $row->degree; ?></p>
					<p class="personal_summary"><strong>Field of study:</strong> <?php echo $row->field; ?></p>
					<p class="personal_summary"><strong>Activities:</strong> <?php echo $row->activities; ?></p>
					<p class="personal_summary"><strong>Achievements/Awards:</strong> <?php echo $row->awards; ?></p>
					<a href="<?php echo base_url(); ?>profile/deleteSec/<?php echo $row->id;?>" ><p class="profile_edit_it"><i class="fa fa-close" aria-hidden="true"></i><span class="tooltiptext">Delete</span></p></a>

				</div>

				<hr class="profile_divider">
			<?php } }?>

				</div>
<br /></div>

				<!-- Experience -->
				<div class="main_area">
					<div><?php if(!empty($exp)) { ?>
						<p class="profile_header">Experience</p>
						<a href="#experience" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>
					</div>
					<?php foreach($exp as $row) { ?>
					<div>
						<p class="subject_title"><a href=""><?php echo strtoupper($row->company); ?></a></p>
						<p class="personal_summary"><strong>Title:</strong> <?php echo $row->title; ?></p>
						<p class="personal_summary"><strong>Location:</strong> <?php echo $row->location; ?></p>
						<p class="personal_summary"><strong>Year:</strong> <?php echo $row->frm . " - " . $row->too; ?></p>
					</div>
					<a href="<?php echo base_url(); ?>profile/deleteExp/<?php echo $row->id;?>" ><p class="profile_edit_it"><i class="fa fa-close" aria-hidden="true"></i><span class="tooltiptext">Delete</span></p></a>

					<hr>
				<?php } }?>

			</div><br /><br />

				<!-- Certifications -->
				<?php if(!empty($cert)) { ?>
				<div class="cert_area">
					<div>
						<p class="profile_header">Certification</p>
						<a href="#cert" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>
					</div>
					<?php foreach($cert as $row) {  ?>
					<div>
						<p class="cert_title"><a href="#"><?php echo $row->authority; ?></a></p>

						<p class="personal_summary"><strong>Certification name:</strong> <?php echo $row->name; ?></p>
						<a href="<?php echo base_url(); ?>profile/deleteCert/<?php echo $row->id;?>" ><p class="profile_edit_it"><i class="fa fa-close" aria-hidden="true"></i><span class="tooltiptext">Delete</span></p></a>
						<hr />
					</div>
				<?php } ?>
				</div>
			<?php } ?>

			<div class="main_area">
				<div><?php  if(!empty($mem)) {  ?>
				<div style="margin-top:0px;">
					<p class="profile_header">Organisation Membership</p>
					<a href="#membership" data-toggle="modal"><p class="profile_edit_it"><i class="fa fa-pencil" aria-hidden="true"></i><span class="tooltiptext">Edit</span></p></a>
				</div>
				<?php foreach($mem as $row) {  ?>
				<div>
					<p class="cert_title"><a href="#"><?php echo $row->authority; ?></a></p>

					<p class="personal_summary"><strong>Organisation name:</strong> <?php echo $row->name; ?></p>
					<p class="personal_summary"><strong>Organisation Level:</strong> <?php echo $row->level; ?></p>
					<p class="personal_summary"><strong>Membership URL:</strong> <?php echo $row->url; ?></p>

				</div>
				<a href="<?php echo base_url(); ?>profile/deleteMembership/<?php echo $row->id;?>" ><p class="profile_edit_it"><i class="fa fa-close" aria-hidden="true"></i><span class="tooltiptext">Delete</span></p></a>
				<hr />
			<?php } ?>
			</div>
		<?php } ?>

			</div>
		</div>

		<div class="col-md-3">
			<div class="add_advert">
				<p>Advert</p>
			</div>
		</div>
	</div>
</div>

					</div> <!-- end push_fit -->
				</div> <!-- end container -->
			</div> <!-- end tabcontent -->


					</div> <!-- end push_fit -->
				</div> <!-- end container -->
			</div> <!-- end tabcontent -->


<!-- Personal Summary Modal -->
  <div class="modal fade" id="pSummary" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Personal Summary</h4>
        </div>
        <div class="modal-body">
					<div class="col-md-12">
				<?php foreach($summary as $summary) { ?>
				<div id="addSummary" style="display: block;">
					<form class="profile_report_form" action="<?php echo base_url(); ?>profile/editpersonalsummary" method="post">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Personal Summary:</p>
								<textarea name="personal_summary" class="textarea_text" placeholder="" required=""><?php echo $summary->summary; ?></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Personal LinkedIn url:</p>
								<input type="text" name="mylinkedin" class="input_text_logo" value="<?php echo $summary->linkedin; ?>">
								<img src="<?php echo base_url(); ?>images/01followlinkedin.png" class="input_img">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Personal Twitter url:</p>
								<input type="text" name="twitter" class="input_text_logo" value="<?php echo $summary->linkedin; ?>">
								<img src="<?php echo base_url(); ?>images/01followtwitter.png" class="input_img">
							</div>
						</div>

						<input type="submit" value="Update Personal Summary" class="profile_report_submit">
					</form>
				</div>
				<?php } ?>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
		</div>
	</div>
	<!--end of personal summary-->

	<!-- Seconday Education -->

	<div class="modal fade" id="secondary" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Secondary School Information</h4>
        </div>
        <div class="modal-body">
					<div class="col-md-12">
				<?php foreach($sec as $row) { ?>
				<div id="addSummary" style="display: block;">
					<form class="profile_report_form" action="<?php echo base_url(); ?>profile/editEducation" method="post">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">School/Institution:</p>
								<input type="text" name="schoolName" class="input_text" placeholder="" value="<?php echo $row->school_name; ?>" required />
								<input type="hidden" name="mentor" class="input_text" value="<?php echo $this->session->userdata('mentor'); ?>">
								<input type="hidden" name="type" class="input_text" value="<?php echo $row->type; ?>">
								<input type="hidden" name="id" class="input_text" value="<?php echo $row->id; ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Degree/Qualification:</p>
								<input type="text" name="degree" class="input_text" placeholder="Ex: SSCE" value="<?php echo $row->degree; ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Field of study:</p>
								<input type="text" name="field" class="input_text" placeholder="Ex: Science, Commercial, Art" value="<?php echo $row->field; ?>">
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Year:</p>
								<select class="select_text" name="from">
									<?php
									$split = explode(" ", $row->year);
									?>
									<option value="<?php echo $split[0]; ?>"><?php echo $split[0]; ?></option>

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
								<select class="select_text" name="to">
									<option value="<?php echo $split[2]; ?>"><?php echo $split[2]; ?></option>
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
								<textarea name="activities" class="textarea_text" placeholder="Football, Sport Club"><?php echo $row->activities; ?></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Achievements/Awards:</p>
								<textarea name="award" class="textarea_text" placeholder="Ex: Fine Art Award"><?php echo $row->awards; ?></textarea>
							</div>
						</div>
						<div class="row" style="display:none" id="loadEdu">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Update and Submit" class="profile_report_submit">
							</div>
						</div>
					</form>
				</div>
				<?php } ?>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
		</div>
	</div>
	<!--end of Education -->

	<!-- Tertiary Education -->
	<div class="modal fade" id="tertiary" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Tertiary School Information</h4>
        </div>
        <div class="modal-body">
					<div class="col-md-12">
				<?php foreach($ter as $row) { ?>
				<div id="addSummary" style="display: block;">
					<form class="profile_report_form" action="<?php echo base_url(); ?>profile/editEducation" method="post">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">School/Institution:</p>
								<input type="text" name="schoolName" class="input_text" placeholder="" value="<?php echo $row->school_name; ?>" required />
								<input type="hidden" name="mentor" class="input_text" value="<?php echo $this->session->userdata('mentor'); ?>">
								<input type="hidden" name="type" class="input_text" value="<?php echo $row->type; ?>">
								<input type="hidden" name="id" class="input_text" value="<?php echo $row->id; ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Degree/Qualification:</p>
								<input type="text" name="degree" class="input_text" placeholder="Ex: SSCE" value="<?php echo $row->degree; ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Field of study:</p>
								<input type="text" name="field" class="input_text" placeholder="Ex: Science, Commercial, Art" value="<?php echo $row->field; ?>">
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Year:</p>
								<select class="select_text" name="from">
									<?php
									$split = explode(" ", $row->year);
									?>
									<option value="<?php echo $split[0]; ?>"><?php echo $split[0]; ?></option>
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
								<select class="select_text" name="to">
									<option value="<?php echo $split[2]; ?>"><?php echo $split[2]; ?></option>
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
								<textarea name="activities" class="textarea_text" placeholder="Football, Sport Club"><?php echo $row->activities; ?></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Achievements/Awards:</p>
								<textarea name="award" class="textarea_text" placeholder="Ex: Fine Art Award"><?php echo $row->awards; ?></textarea>
							</div>
						</div>
						<div class="row" style="display:none" id="loadEdu">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Update and Submit" class="profile_report_submit">
							</div>
						</div>
					</form>
				</div>
				<?php } ?>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
		</div>
	</div>
	<!--Tertiary of Education -->

	<!-- Masters Education -->
	<div class="modal fade" id="master" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Masters Information</h4>
        </div>
        <div class="modal-body">
					<div class="col-md-12">
				<?php foreach($mas as $row) { ?>
				<div id="addSummary" style="display: block;">
					<form class="profile_report_form" action="<?php echo base_url(); ?>profile/editEducation" method="post">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">School/Institution:</p>
								<input type="text" name="schoolName" class="input_text" placeholder="" value="<?php echo $row->school_name; ?>" required />
								<input type="hidden" name="mentor" class="input_text" value="<?php echo $this->session->userdata('mentor'); ?>">
								<input type="hidden" name="type" class="input_text" value="<?php echo $row->type; ?>">
								<input type="hidden" name="id" class="input_text" value="<?php echo $row->id; ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Degree/Qualification:</p>
								<input type="text" name="degree" class="input_text" placeholder="Ex: SSCE" value="<?php echo $row->degree; ?>" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Field of study:</p>
								<input type="text" name="field" class="input_text" placeholder="Ex: Science, Commercial, Art" value="<?php echo $row->field; ?>"required/>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Year:</p>
								<select class="select_text" name="from">
									<?php
									$split = explode(" ", $row->year);
									?>
									<option value="<?php echo $split[0]; ?>"><?php echo $split[0]; ?></option>
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
								<select class="select_text" name="to">
									<option value="<?php echo $split[2]; ?>"><?php echo $split[2]; ?></option>
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
								<textarea name="activities" class="textarea_text" placeholder="Football, Sport Club"><?php echo $row->activities; ?></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Achievements/Awards:</p>
								<textarea name="award" class="textarea_text" placeholder="Ex: Fine Art Award" ><?php echo $row->awards; ?></textarea>
							</div>
						</div>
						<div class="row" style="display:none" id="loadEdu">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Update and Submit" class="profile_report_submit">
							</div>
						</div>
					</form>
				</div>
				<?php } ?>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
		</div>
	</div>
	<!--end  of Masters  Education -->
	<div class="modal fade" id="doctor" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Edit Doctorate School Information</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
				<?php foreach($dr as $row) { ?>
				<div id="addSummary" style="display: block;">
					<form class="profile_report_form" action="<?php echo base_url(); ?>profile/editEducation" method="post">
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">School/Institution:</p>
								<input type="text" name="schoolName" class="input_text" placeholder="" value="<?php echo $row->school_name; ?>" required />
								<input type="hidden" name="mentor" class="input_text" value="<?php echo $this->session->userdata('mentor'); ?>">
								<input type="hidden" name="type" class="input_text" value="<?php echo $row->type; ?>">
								<input type="hidden" name="id" class="input_text" value="<?php echo $row->id; ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Degree/Qualification:</p>
								<input type="text" name="degree" class="input_text" placeholder="Ex: SSCE" value="<?php echo $row->degree; ?>" required/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Field of study:</p>
								<input type="text" name="field" class="input_text" placeholder="Ex: Science, Commercial, Art" value="<?php echo $row->field; ?>"required/>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
							<p class="form_text">From Year:</p>
								<select class="select_text" name="from">
									<?php
									$split = explode(" ", $row->year);
									?>
									<option value="<?php echo $split[0]; ?>"><?php echo $split[0]; ?></option>
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
								<select class="select_text" name="to">
									<option value="<?php echo $split[2]; ?>"><?php echo $split[2]; ?></option>
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
								<textarea name="activities" class="textarea_text" placeholder="Football, Sport Club"><?php echo $row->activities; ?></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="form_text">Achievements/Awards:</p>
								<textarea name="award" class="textarea_text" placeholder="Ex: Fine Art Award"  ><?php echo $row->awards; ?></textarea>
							</div>
						</div>
						<div class="row" style="display:none" id="loadEdu">
							<div class="col-md-12 text-center">
								<div class="alert alert-success">Saving your form......</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" value="Update and Submit" class="profile_report_submit">
							</div>
						</div>
					</form>
				</div>
				<?php } ?>
			</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


<!--ed of Doctorate education-->
	<!-- Experience Modal -->
	  <div class="modal fade" id="experience" role="dialog">
	    <div class="modal-dialog">

	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Edit Personal Summary</h4>
	        </div>
	        <div class="modal-body">
						<div class="col-md-12">
					<?php foreach($exp as $exp) { ?>
						<form class="profile_report_form" action="<?php echo base_url(); ?>profile/editExperience" method="post">

							<div class="row">
								<div class="col-md-12">
									<p class="form_text">Title:</p>
									<input type="text" name="title" class="input_text" placeholder="Ex: Doctor" value="<?php echo $exp->title; ?>" required/>
									<input type="hidden" name="id"  value="<?php echo $exp->id; ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p class="form_text">Company Name:</p>
									<input type="text" name="company" class="input_text" placeholder="" value="<?php echo $exp->company; ?>"  required/>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<p class="form_text">Location:</p>
									<input type="text" name="location" class="input_text" placeholder="Ex: Lagos" value="<?php echo $exp->location; ?>"  required/>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
								<p class="form_text">From Year:</p>
									<select class="select_text" name="e_from" required/>
										<option value="<?php echo $exp->frm; ?>"><?php echo $exp->frm; ?></option>
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
									<select class="select_text" name="e_to">
										<option value="<?php echo $exp->frm; ?>"><?php echo $exp->frm; ?></option>
										<option value="<?php echo 'Present'; ?>"><?php echo 'Present'; ?></option>
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
									<input type="submit" value="Update and Submit" class="profile_report_submit" id="recent_submit">
								</div>
							</div>
						</form>

					<?php } ?>
				</div>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
			</div>
		</div>
		<!--end of Expperience modal-->


		<!-- Certificate Modal -->
		  <div class="modal fade" id="cert" role="dialog">
		    <div class="modal-dialog">

		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Edit Certification </h4>
		        </div>
		        <div class="modal-body">
							<div class="col-md-12">
						<?php foreach($cert as $cert) { ?>
						<div id="addSummary" style="display: block;">
							<form class="profile_report_form" action="<?php echo base_url(); ?>profile/editCertificate" method="post">

								<div class="row">
									<div class="col-md-12">
										<p class="form_text">1. Certification Name:</p>
										<input type="text" name="name" class="input_text" placeholder="Ex: PRINCE2" value="<?php echo $cert->name; ?>" required/>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p class="form_text">Certification Authority:</p>
										<input type="text" name="authority" class="input_text" placeholder="Ex: AXELOS" value="<?php echo $cert->authority; ?>"  required/>
										<input type="hidden" name="id" class="input_text"  value="<?php echo $cert->id; ?>">
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
						<?php } ?>
					</div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		      </div>
				</div>
			</div>
			<!--end of Certificate modal-->

			<!-- Profile Image Modal -->
				<div class="modal fade" id="profile_image" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Profile Image</h4>
							</div>
							<div class="modal-body">
								<div class="col-md-12">
							<div id="addSummary" style="display: block;">
								<form class="form-horizontal panel panel-default" action="profile/do_upload" method="post" enctype="multipart/form-data">
										<div class="panel-heading">
											<h3 class="panel-title">Add Profile Image</h3>
										</div>
										<div class="panel-body">
											<div class="form-group">
												<label class="col-sm-2">Image</label>
												<div class="col-sm-10">
													<input name="userfile" type="file" class="form-control" />
													 <small class="error"><?php if(isset($pic_error)) echo $pic_error; ?></small>
												</div>
											</div>
										</div>

										<div class="panel-footer">
											<button type="submit" class="btn btn-primary">Upload Profile Image</button>

										</div>
									</form>

							</div>
						</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!--end of Profile Image modal-->
				<div class="modal fade" id="membership" role="dialog">
					<div class="modal-dialog">


						      <!--Membership  Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Edit Membership Level </h4>
						        </div>
						        <div class="modal-body">
											<div class="col-md-12">
										<?php foreach($mem as $cert) { ?>
										<div id="addSummary" style="display: block;">
											<form class="profile_report_form" action="<?php echo base_url(); ?>profile/editMembership" method="post">

												<div class="row">
													<div class="col-md-12">
														<p class="form_text">Memership Name:</p>
														<input type="text" name="name" class="input_text" placeholder="Ex: PRINCE2" value="<?php echo $cert->name; ?>" required/>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<p class="form_text">Memership URL:</p>
														<input type="text" name="url" class="input_text" placeholder="Ex: PRINCE2" value="<?php echo $cert->url; ?>" required/>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<p class="form_text">Memership Level:</p>
														<input type="text" name="level" class="input_text" placeholder="Ex: AXELOS" value="<?php echo $cert->level; ?>"  required/>
														<input type="hidden" name="id" class="input_text"  value="<?php echo $cert->id; ?>">
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
										<?php } ?>
									</div>
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        </div>
						      </div>
								</div>
							</div>
							<!--end of Membership modal-->
