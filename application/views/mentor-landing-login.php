<div class="container">
	<div class="row">
		<div class="">
			<div class="container search_mentor">
				<p>Search Mentors</p>
				<p>Note that you can only select mentors from your alma mater and current  university or school.</p>
				<div class="col-sm-6 col-md-6">
					<input
						type="text"
						class="school_location"
						placeholder="Enter state where school is located"
						id="searchLocated"
						onblur="()"
					/>
				</div>
				<div class="col-sm-6 col-md-6">
					<input type="text" class="school_name" placeholder="Type name of school" id="searchSchool">
					<button class="btn btn-default search_icon" name="submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				</div>
			</div>
		</div>
		<h4 style="margin-left:15px;"><?php echo $skul_1; ?></h4>
		<div class="container">
			<div class="row">
				<?php
					foreach($skul1 as $row) {
						//dont display users details
						if($row->userid === $this->session->userdata('id')) {} else {
							if($row->userid=='') {
								 echo "<div class='col-sm-12 col-md-12'>Currently, there is no mentors from this school</div>"; } else {
				 ?>

					<div class="col-sm-6 col-md-6">
						<div class="mentor">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 user_pic_area">
									<a href="#"><img class="img-responsive user_pic" src="<?php echo base_url(); ?>images/no_image_user.png" alt="profile-pic"></a>
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9 user_content_area">
									<a href="<?php echo base_url();?>my/viewprofile/<?php echo $row->userid; ?>" class="link_alumni">
										<p class="user_id"><?php echo strtoupper($this->db->get_where('am_users', array('id'=>$row->userid))->row()->fname) . " " . strtoupper($this->db->get_where('am_users', array('id'=>$row->userid))->row()->lname). "  (". $row->degree .")"; ?></p>
										<p class="user_detail"><span class="work">ALUMNI </span><span> - </span><span>
											<?php error_reporting(0);
											if($row->userid==0) { echo "no data"; } else {
											echo $row->school_name . " |" ; }?> </span></p>
										<p class="user_detail"><span class="work">WORK </span><span> - </span><span> <?php if($this->db->get_where('experience', array('userid'=>$row->userid))->row()->userid==0) { echo "no data"; } else {
										echo $this->db->get_where('experience', array('userid'=>$row->userid))->row()->company. " " ; }?> </span></p>
									</a>
									<?php
										$q = $this->db->get_where('mentor_list',array('menteeid'=>$this->session->userdata('id'), 'mentorid'=>$row->userid, 'disabled'=>1)); ?>
											<div class="row button_options">
												<div class="col-md-12" >
													<form>
														<?php if($q->num_rows()) { ?>
														<input id ="formButton" disabled type="submit"  value="Mentor Added" class="add_mentor">
													<?php } else { ?>
														<input id ="formButton" type="submit"  value="Add Mentor" class="add_mentor"
														onclick="confirmation(event,<?php echo $row->userid; ?>,<?php echo $this->session->userdata('isLoggedIn'); ?>,'<?php echo $row->type; ?>')" >
													<?php } ?>
													</form>
												</div>
											</div>
								</div>
							</div>
						</div>
					</div>
				<?php } } } ?>
			</div>
		</div>
			<!-- School 2 -->
			<h4 style="margin-left:15px;"><?php echo $skul_2; ?></h4>
			<div class="container">
				<div class="row">
					<?php
						foreach($skul2 as $row) {
							//dont display users details
							if($row->userid === $this->session->userdata('id')) {} else {
								if($row->userid=='' || $row->mentor != 1) { echo "<div class='col-sm-12 col-md-12'>Currently, there is no mentors from this school</div>"; } else {
					 ?>

						<div class="col-sm-6 col-md-6">
							<div class="mentor">
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 user_pic_area">
										<a href="#"><img class="img-responsive user_pic" src="<?php echo base_url(); ?>images/no_image_user.png" alt="profile-pic"></a>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 user_content_area">
										<a href="<?php echo base_url();?>my/viewprofile/<?php echo $row->userid; ?>" class="link_alumni">
											<p class="user_id"><?php echo strtoupper($this->db->get_where('am_users', array('id'=>$row->userid, 'mentor' => 1))->row()->fname) . " " . strtoupper($this->db->get_where('am_users', array('id'=>$row->userid))->row()->lname). "  (". $row->degree .")"; ?></p>
											<p class="user_detail"><span class="work">ALUMNI </span><span> - </span><span>
												<?php error_reporting(0);
												if($row->userid==0) { echo "no data"; } else {
												echo $row->school_name . " |" ; }?> </span></p>
											<p class="user_detail"><span class="work">WORK </span><span> - </span><span> <?php if($this->db->get_where('experience', array('userid'=>$row->userid))->row()->userid==0) { echo "no data"; } else {
											echo $this->db->get_where('experience', array('userid'=>$row->userid))->row()->company. " " ; }?> </span></p>
										</a>
										<?php
											$q = $this->db->get_where('mentor_list',array('menteeid'=>$this->session->userdata('id'), 'mentorid'=>$row->userid, 'disabled'=>1)); ?>
												<div class="row button_options">
													<div class="col-md-12" >
														<form>
															<?php if($q->num_rows()) { ?>
															<input id ="formButton" disabled type="submit"  value="Mentor Added" class="add_mentor">
														<?php } else { ?>
															<input id ="formButton" type="submit"  value="Add Mentor" class="add_mentor"
															onclick="confirmation(event,<?php echo $row->userid; ?>,<?php echo $this->session->userdata('isLoggedIn'); ?>,'<?php echo $row->type; ?>')" >
														<?php } ?>
														</form>
													</div>
												</div>
									</div>
								</div>
							</div>
						</div>
					<?php } } } ?>
				</div>
			</div>
			<!-- School3 -->
			<h4 style="margin-left:15px;"><?php echo $skul_3; ?></h4>
			<div class="container">
				<div class="row">
					<?php
						foreach($skul3 as $row) {
							//dont display users details
							if($row->userid === $this->session->userdata('id')) {} else {
								if($row->userid=='' || $row->mentor != 1) { echo "<div class='col-sm-12 col-md-12'>Currently, there is no mentors from this school</div>"; } else {
					 ?>

						<div class="col-sm-6 col-md-6">
							<div class="mentor">
								<div class="row">
									<div class="col-xs-3 col-sm-3 col-md-3 user_pic_area">
										<a href="#"><img class="img-responsive user_pic" src="<?php echo base_url(); ?>images/no_image_user.png" alt="profile-pic"></a>
									</div>
									<div class="col-xs-9 col-sm-9 col-md-9 user_content_area">
										<a href="<?php echo base_url();?>my/viewprofile/<?php echo $row->userid; ?>" class="link_alumni">
											<p class="user_id"><?php echo strtoupper($this->db->get_where('am_users', array('id'=>$row->userid, 'mentor' => 1))->row()->fname) . " " . strtoupper($this->db->get_where('am_users', array('id'=>$row->userid))->row()->lname). "  (". $row->degree .")"; ?></p>
											<p class="user_detail"><span class="work">ALUMNI </span><span> - </span><span>
												<?php error_reporting(0);
												if($row->userid==0) { echo "no data"; } else {
												echo $row->school_name . " |" ; }?> </span></p>
											<p class="user_detail"><span class="work">WORK </span><span> - </span><span> <?php if($this->db->get_where('experience', array('userid'=>$row->userid))->row()->userid==0) { echo "no data"; } else {
											echo $this->db->get_where('experience', array('userid'=>$row->userid))->row()->company. " " ; }?> </span></p>
										</a>
										<?php
											$q = $this->db->get_where('mentor_list',array('menteeid'=>$this->session->userdata('id'), 'mentorid'=>$row->userid, 'disabled'=>1)); ?>
												<div class="row button_options">
													<div class="col-md-12" >
														<form>
															<?php if($q->num_rows()) { ?>
															<input id ="formButton" disabled type="submit"  value="Mentor Added" class="add_mentor">
														<?php } else { ?>
															<input id ="formButton" type="submit"  value="Add Mentor" class="add_mentor"
															onclick="confirmation(event,<?php echo $row->userid; ?>,<?php echo $this->session->userdata('isLoggedIn'); ?>,'<?php echo $row->type; ?>')" >
														<?php } ?>
														</form>
													</div>
												</div>
									</div>
								</div>
							</div>
						</div>
					<?php } } } ?>
				</div>
			</div>
	</div>
</div>
