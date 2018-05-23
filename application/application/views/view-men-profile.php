
<div class="container">
	<div class="row">
		<div class="col-md-9 profile_container">

			<div class="col-md-12">
				<div class="profile_area text-center">
					<a href="#"><img class="img-responsive profile_pic" src="<?php echo base_url(); ?>images/no_image_user.png" alt="user1"></a>
					<p class="my_name"><?php foreach($users as $user) { echo $user->fname ." " .$user->lname; } ?></p>
					<p class="profile_intro">
						<?php foreach($edu as $row)  { echo $row->school_name . ", "; }?>
					</p>
				</div>
				<?php foreach($summary as $row)  { ?>
				<div class="main_area">
					<p class="profile_header">Personal Summary</p>
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
					<?php foreach($edu as $row) { ?>
					<div>
						<p class="subject_title"><a href="#"><?php echo $row->school_name; ?></a></p>
						<p class="personal_summary"><strong>Year:</strong> <?php echo $row->year; ?></p>
						<p class="personal_summary"><strong>Degree:</strong> <?php echo $row->degree; ?></p>
						<p class="personal_summary"><strong>Field of study:</strong> <?php echo $row->field; ?></p>
						<p class="personal_summary"><strong>Activities:</strong> <?php echo $row->activities; ?></p>
						<p class="personal_summary"><strong>Achievements/Awards:</strong> <?php echo $row->awards; ?></p>
						<!--<p class="personal_summary"><strong>Dissertation/Research papers:</strong> Improvement of inter-symbol interference in optical communications</p>
						<p class="see_more"><a href="#"><strong>... see more</strong></a></p>-->
					</div>

					<hr class="profile_divider">
					<?php } ?>
				</div>


				<!-- Experience -->
				<div class="main_area">
					<div>
						<p class="profile_header">Experience</p>
					</div>
					<?php foreach($exp as $row) { ?>
					<div>
						<p class="subject_title"><a href="#"><?php echo strtoupper($row->company); ?></a></p>
						<p class="personal_summary"><strong>Title:</strong> <?php echo $row->title; ?></p>
						<p class="personal_summary"><strong>Year:</strong> <?php echo $row->frm . " - " . $row->too; ?></p>
					</div>

					<hr>
					<?php } ?>

				</div>

				<!-- Certifications -->
				<div class="cert_area">
					<div>
						<p class="profile_header">Certification</p>
					</div>
					<?php foreach($cert as $row) {  ?>
					<div>
						<p class="cert_title"><a href="#"><?php echo $row->authority; ?></a></p>

						<p class="personal_summary"><strong>Certification name:</strong> <?php echo $row->name; ?></p>


					</div>

					<hr>
					<?php } ?>

					<!--<div class="skill_training">
						<a href="#"><strong>Check Training Courses & Qualifications</strong></a>
					</div>-->
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

<!--<div class="container">
	<div class="row">
		<p class="lead">Recognise any fake IDs below? Help us identify them.</p>
		<p class="lead_note">The aim is to identify people with malicious intentions and also to ensure safety of lives of mentees and mentors.</p>
	</div>
</div>

<!--<div class="container">
	<div class="row verify_tab">

			<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'gci')" id="defaultOpen">GCI</button>
			  <button class="tablinks" onclick="openCity(event, 'mafogram')">MAFOGRAM</button>
			  <button class="tablinks" onclick="openCity(event, 'lautech')">LAUTECH</button>
			</div>

	<!-- GCI -->
			<!--<div id="gci" class="tabcontent_verify">
				<div class="container">
					<div class="row push_fit">
						<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
							<div class="MultiCarousel-inner">
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/1.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/rasheed.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/2.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/3.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/4.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/5.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/6.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/7.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/8.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/9.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/10.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/11.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/12.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/13.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/14.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/15.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/16.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
							</div> <!-- end MultiCarousel-inner
							<button class="btn btn-primary leftLst"><</button>
							<button class="btn btn-primary rightLst">></button>
						</div> <!-- end MultiCarousel -->
					</div> <!-- end push_fit -->
				</div> <!-- end container -->
			</div> <!-- end tabcontent -->

	<!-- MAFOGRAM
			<div id="mafogram" class="tabcontent_verify">
				<div class="container">
					<div class="row push_fit">
						<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
							<div class="MultiCarousel-inner">
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/rasheed.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/1.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/2.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/3.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/4.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/5.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/6.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/7.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/8.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/9.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/10.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/11.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/12.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/13.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/14.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/15.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
								<div class="item">
									<div class="">
										<div class=""><a href="#"><img src="images/16.jpg" class="img-responsive alum_img"></a></div>
										<p class="alum_name"><a href="#">Adesokan Rasheed</a></p>
										<p class="alum_name"><a href="#">GCI 97 Set</a></p>
										<button class="fake_alum">Report</button>
									</div>
								</div>
							</div> <!-- end MultiCarousel-inner
							<button class="btn btn-primary leftLst"><</button>
							<button class="btn btn-primary rightLst">></button>
						</div> <!-- end MultiCarousel -->
					</div> <!-- end push_fit -->
				</div> <!-- end container -->
			</div> <!-- end tabcontent -->


			<!-- LAUTECH
			<div id="lautech" class="tabcontent_verify">->
	</div>
</div>-->
