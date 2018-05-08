<div class="container">
	<div class="row">
		<div class="">
			<div class="container search_mentor">
				<p>Search Mentors</p>
				<p>Note that you can only select mentors from your alma mater and current  university or school.</p>
				<div class="col-sm-12 col-md-12">
					<input type="text" class="school_name2" placeholder="Type name of school" id="search" onChange="search()">
					<button class="btn btn-default search_icon" name="submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row"  id="result">

				<?php
					foreach($mentors as $row) {				 ?>

					<div class="col-sm-6 col-md-6" >
						<div class="mentor">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 user_pic_area">
									<a href="#"><img class="img-responsive user_pic" src="<?php echo base_url(); ?>images/no_image_user.png" alt="profile-pic"></a>
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9 user_content_area">
									<a onclick="alert('Please Login/Signup to view mentor’s profile')" href="" class="link_alumni">
										<p class="user_id"><?php echo strtoupper($row->fname) . " " . strtoupper($row->lname); ?></p>
										<p class="user_detail"><span class="work">ALUMNI </span><span> - </span><span>
											<?php error_reporting(0);

										$edu = $this->db->get_where('education', array('userid'=>$row->id))->result();  foreach($edu as $row)  { echo $row->school_name . " | "; } ?> </span></p>
										<p class="user_detail"><span class="work">WORK </span><span> - </span><span> <?php if($this->db->get_where('experience', array('userid'=>$row->userid))->row()->userid==0) { echo "Not Completed"; } else {
										echo $this->db->get_where('experience', array('userid'=>$row->userid))->row()->company. " " ; }?> </span></p>
									</a>
									<?php
										$q = $this->db->get_where('mentor_list', array('menteeid'=>$this->session->userdata('id')));
										if($q->num_rows()) {
											?>
											<div class="row button_options">
												<div class="col-md-12" >
													<form>
														<input type="submit" disabled value="Mentor added" class="add_mentor" onclick="confirmation(event,<?php echo $row->id; ?>, <?php echo $this->session->userdata('isLoggedIn'); ?>)" >
													</form>
												</div>
											</div>
										<?php } else { ?>
											<div class="row button_options">
												<div class="col-md-12" >
													<form>
														<input id="formButton" type="submit"  value="Add Mentor" class="add_mentor" onclick="confirmation(event,<?php echo $row->id; ?>, <?php echo $this->session->userdata('isLoggedIn'); ?>)" >
													</form>
												</div>
											</div>
										<?php } ?>
								</div>
							</div>
						</div>
					</div>
				<?php  } ?>
			</div>
		</div>
	</div>
</div>
