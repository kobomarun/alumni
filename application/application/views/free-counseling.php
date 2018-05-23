<div class="container">
	<div class="row forum_top_ad_sec">
		<div class="col-md-12">
			<a href="#"><img class="img-responsive blog_top_ad_banner" src="<?php echo base_url(); ?>images/GTB-Ad.jpg" alt="user1"></a>
			<p class="sponsored_by">The free counselling is sponsored by Guarantee Trust Bank Plc.</p>
		</div>
	</div>
</div>
<?php if($this->session->flashdata('success')) { ?>
<div class="container">
	<div class="alert alert-success">
	  <span class="close_alert_btn" onclick="this.parentElement.style.display='none';">×</span>
	  <?php echo $this->session->flashdata('success'); ?>
	</div>
</div>
<?php } ?>


<div class="container main_container_div">
	<div class="row">
		<!-- Center Content -->
		<div class="col-md-8">
			<div class="col-md-12">
				<div class="leftside_area form">
					<div>
						<p class="counsel_title_free">Contact us for free counselling</p>
						<p class="counsel_title_alert">Need counselling support? Request a free counselling by completing the form below and one of our Counsellors will contact you. Our counselling programme is designed for students up to postgraduate level and parents, carers, and guardians of students are free to ontact us on their behalf.</p>

						<p class="counsel_title_alert">Whenever you decide to use our free counselling service, you can be rest assured of getting the best support from our professional, non-jugemental, and experienced counsellors. You are also assured that your information will be held in strict confidence.</p>

						<p class="counsel_title_alert">We offer free career counselling, educational and school counselling, and youth and adolescent counselling. Some of the several areas students can receive help are listed below.</p>

						<ul style="list-style-type:square;">
							<li><p class="counsel_title_ul">Students having educational concerns</p></li>
							<li><p class="counsel_title_ul">Students who need academic and career guidance</p></li>
							<li><p class="counsel_title_ul">Students going through any form of emotional distress or meltdown</p></li>
							<li><p class="counsel_title_ul">Students struggling with personal challenging behaviour or problem</p></li>
							<li><p class="counsel_title_ul">Students who are palnning to travel abroad for study</p></li>
						</ul>

						<p class="counsel_title_alert">Our trained and experienced counsellor are conversant with global academic and career trends and how these can be used to your advantage in deciding your career or addressing any challenges you might be facing. They are here to help you with all your needs whatever they may be and we do hope that you will take advantage of them.</p>

						<p class="counsel_title_advice">For your attention, some of the common counselling questions asked by people have been included on this page. We strongly advice that you take your time and read through all of them before contacting us.</p>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="leftside_area form">
					<form class="know_question_form" method="post" action="postFree">
						<!-- ON BEHALF OF YOURSELF -->
						<div>
							<p class="counsel_title_me">Your details</p>
							<hr>
						</div>

						<div class="row">
							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Your Name (<span>required</span>)</p>
							<input class="know_input_text" type="text" name="name" placeholder="Full name including title">
							</div>

							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Email Address (<span>required</span>)</p>
								<input class="know_input_text" type="email" name="email" placeholder="Email address">
							</div>
						</div>


						<div class="row">
							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Phone Number (<span>required</span>)</p>
								<input class="know_input_text" type="tel" name="phone" placeholder="Phone number">
							</div>

							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">When can we call? (<span>required</span>)</p>
								<div class="know_category_terms">
									<select name="call" id="event-type" required="required">
										<option value="morning on weekdays" selected="">Morning on weekdays</option>
										<option value="afternoon on weekday">Afternoon on weekdays</option>
										<option value="evening on weekdays">Evening on weekdays</option>
										<option value="morningwend">Morning on weekends</option>
										<option value="afternoon on weekends">Afternoon on weekends</option>
										<option value="evening on weekends">Evening on weekends</option>
										<option value="anytime">Any time</option>
									</select>
								</div>
							</div>
						</div>

						<!-- ON BEHALF OF SOMEONE ELSE -->

						<div>
							<p class="counsel_title_sb">If you are not the actual person in need of counselling, kindly give us the details of the other person below:</p>
							<hr>
						</div>

						<div class="row">
							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Their Name</p>
							<input class="know_input_text" type="text" name="tname" placeholder="Pls. tell us their full name">
							</div>

							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Relationship</p>
							<input class="know_input_text" type="text" name="relationship" placeholder="Pls. tell us how you are related to them">
							</div>
						</div>


						<div class="row">
							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Their Email Address</p>
								<input class="know_input_text" type="email" name="temail" placeholder="Their email address">
							</div>

							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Their Phone Number</p>
								<input class="know_input_text" type="tel" name="tphone" placeholder="Their phone number">
							</div>
						</div>


						<!-- OTHER DETAILS -->
						<div>
							<p class="counsel_title_sb">The following information are details of the actual person in need of counselling</p>
							<hr>
						</div>

						<div class="row">
							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Education/Employment (<span>required</span>)</p>
								<div class="know_category_terms">
									<select name="position" id="event-type" required="required">
										<option value="primary" selected="">Primary School</option>
										<option value="juniorsec">Junior Secondary</option>
										<option value="seniorsec">Senior Secondary</option>
										<option value="university">University</option>
										<option value="polytechnic">Polytechnics</option>
										<option value="colleges">Colleges of Education</option>
										<option value="vocational">Vocational Institutioons</option>
										<option value="employed">Employed</option>
										<option value="selfemployed">Self-employed</option>
									</select>
								</div>
							</div>

							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Age Group (<span>required</span>)</p>
								<div class="know_category_terms">
									<select name="age" id="event-type" required="required">
										<option value="Lagos" selected=""> Under 15 years</option>
										<option value="Lagos"> 15-24 years</option>
										<option value="Abuja"> 25-34 years</option>
										<option value="Abia"> 35-44 years</option>
										<option value="Adamawa"> 45-54 years</option>
										<option value="Anambra"> 55+ years</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">Type of Counselling (<span>required</span>)</p>
								<div class="know_category_terms">
									<select name="type" id="event-type" required="required">
										<option value="career" selected="">Career Counselling</option>
										<option value="educational">Educational &amp; School Counselling</option>
										<option value="youth">Youth &amp; Adolescent Counselling</option>
									</select>
								</div>
							</div>

							<div class="col-sm-6 col-md-6">
								<p class="counsel_instruction">State of Origin (<span>required</span>)</p>
								<div class="know_category_terms">
									<select name="state" id="event-type" required="required">
										<option value="Lagos" selected=""> Lagos</option>
										<option value="Abuja"> Federal Capital Territory</option>
										<option value="Abia"> Abia</option>
										<option value="Adamawa"> Adamawaoption</option>
										<option value="Anambra"> Anambra</option>
										<option value="Akwa Ibom"> Akwa Ibom</option>
										<option value="Bauchi"> Bauchi</option>
										<option value="Bayelsa"> Bayelsa</option>
										<option value="Benue"> Benue </option>
										<option value="Borno"> Borno </option>
										<option value="Cross River"> Cross River</option>
										<option value="Delta"> Delta</option>
										<option value="Ebonyi"> Ebonyi</option>
										<option value="Enugu"> Enugu</option>
										<option value="Edo"> Edo</option>
										<option value="Ekiti"> Ekiti</option>
										<option value="Gombe"> Gombe</option>
										<option value="Imo"> Imo</option>
										<option value="Jigawa"> Jigawa</option>
										<option value="Kaduna"> Kaduna</option>
										<option value="Kano"> Kano</option>
										<option value="Katsina"> Katsina</option>
										<option value="Kebbi"> Kebbi</option>
										<option value="Kogi"> Kogi</option>
										<option value="Kwara"> Kwara</option>
										<option value="Nasarawa"> Nasarawa</option>
										<option value="Niger"> Niger</option>
										<option value="Ogun"> Ogun</option>
										<option value="Ondo"> Ondo</option>
										<option value="Osun"> Osun</option>
										<option value="Oyo"> Oyo</option>
										<option value="Plateau"> Plateau</option>
										<option value="Rivers"> Rivers</option>
										<option value="Sokoto"> Sokoto</option>
										<option value="Taraba"> Taraba</option>
										<option value="Yobe"> Yobe</option>
										<option value="Zamfara"> Zamfara</option>
									</select>
								</div>
							</div>
						</div>

						<div class="counsel_instruction">
							Sex (<span>required</span>)  &nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="gender" value="male"> Male <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
							<input type="radio" name="gender" value="female"> Female
						</div>

						<div>
							<p class="counsel_instruction">Comment <span>(required)</span></p>
							<textarea class="know_textarea_text" name="comment" placeholder="To help you with your request, please give us a brief about your need."></textarea>
						</div>

						<div>
							<input class="post_button" type="submit" value="Post Comment">
						</div>
					</form>
				</div>
			</div>



			<!-- Career Counselling FAQ -->
			<div class="col-md-12">
				<div class="leftside_area">
						<div class="post_main_content">
							<p class="faq_title">Career Counselling FAQ</p>
							<hr>

							<div class="accordion_cont">
								<button class="accordion">How do you protect mentors and mentees from malicious users on your platform?</button>
								<div class="panel" style="">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 2</button>
								<div class="panel" style="">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 3</button>
								<div class="panel">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 4</button>
								<div class="panel">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 5</button>
								<div class="panel">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
						</div>
				</div>
			</div>

			<!-- Educational & School Counselling FAQ -->
			<div class="col-md-12">
				<div class="leftside_area">
						<div class="post_main_content">
							<p class="faq_title">Educational &amp; School Counselling FAQ</p>
							<hr>

							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 1</button>
								<div class="panel" style="">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 2</button>
								<div class="panel">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 3</button>
								<div class="panel">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
						</div>
				</div>
			</div>

			<!-- Youth & Adolescent Counselling FAQ -->
			<div class="col-md-12">
				<div class="leftside_area">
						<div class="post_main_content">
							<p class="faq_title">Youth &amp; Adolescent Counselling FAQ</p>
							<hr>

							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 1</button>
								<div class="panel">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 2</button>
								<div class="panel">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
							<div class="accordion_cont">
								<button class="accordion">Frequently Asked Question 3</button>
								<div class="panel">
									<p class="content_in_accordion">Civil engineers need a bachelor’s degree (BSc or BEng). Master’s degree (MSc or MEng) is usually not required but preferred. You could also study for an ND or HND before proceeding to complete bachelor’s degree at the university through direct entry.</p>
									<p class="content_in_accordion">1. Also, you may receive additional payments for working overtime and for lodgings.</p>
									<p class="content_in_accordion">2. You might also earn additional benefits such as a bonus, a company car or car allowance, life insurance, overtime pay and medical care.</p>
									<hr>
									<!-- AD BANNER 1 -->
										<div class="accordion_inner_ad">
											<p>-Advertisement-</p>
											<a>
												<img class="img-responsive" src="<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
											</a>
										</div>
									<!-- END AD BANNER -->
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>



		<!-- Right Sidebar -->
		<div class="col-md-4 position_hide">
			<!-- Share Posts -->
			<div class="col-md-12">
				<div class="rightside_area">
					<p class = "popular_post">SHARE POST</p>
					<hr />
					<div class="text-center">
						<div class="social_share_icon">
							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url();?>pages/<?php echo  url_title('free_counselling'); ?>"><img class="img-responsive" src="<?php echo base_url(); ?>images/sharefacebook.png" alt="Lights"></a>
						</div>
						<div class="social_share_icon">
							<a href="https://plus.google.com/share?url={<?php echo base_url();?>pages/<?php echo  url_title('free_counselling'); ?>}"><img class="img-responsive" src="<?php echo base_url(); ?>images/sharegoogleplus.png" alt="Lights"></a>
						</div>
						<div class="social_share_icon">
							<a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>images/sharetwitter.png" alt="Lights"></a>
						</div>
						<div class="social_share_icon">
							<a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>images/sharelinkedin.png" alt="Lights"></a>
						</div>
						<div class="social_share_icon">
							<a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>images/shareemail.png" alt="Lights"></a>
						</div>
					</div>
				</div>
			</div>

			<!-- AD BANNER -->
			<div class="col-md-12">
				<div class="advert_banner">
					<img class="" src="<?php echo base_url(); ?>images/course-career-related-ad.png" alt="Lights">
				</div>
			</div>

			<div class="col-md-12">
				<div class="rightside_area">
					<p class = "popular_post">OTHER CAREER POSTS</p>
					<?php foreach($random as $rand) { ?>
					<div class="row popular_career">
						<a href="<?php echo base_url() . "career_guide/read/" .$rand->id ."/". url_title($rand->title); ?>">
							<div class="col-xs-4 col-sm-3 col-md-4 similar_post_image_area">
								<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo $rand->img; ?>" alt="image">
							</div>
							<div class="col-xs-8 col-sm-9 col-md-8 similar_post_text_area">
								<p class = ""><?php echo $rand->title; ?></p>
							</div>
						</a>
					</div>
					<hr />
					<?php } ?>

				</div>
			</div>

			<!-- AD BANNER -->
			<div class="col-md-12">
				<div class="advert_banner">
					<img class="img-responsive" src="<?php echo base_url(); ?>images/advertise300x250.jpg" alt="Lights">
				</div>
			</div>

			<!-- FOLLOW US -->
			<div class="col-md-12">
				<div class="rightside_area">
					<p class = "popular_post">FOLLOW US</p>
					<hr />
					<div class = "text-center">
						<div class="social_share_icon">
							<a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>images/01followfacebook.png" alt="Lights"></a>
						</div>
						<div class="social_share_icon">
							<a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>images/01followgoogle-plus.png" alt="Lights"></a>
						</div>
						<div class="social_share_icon">
							<a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>images/01followtwitter.png" alt="Lights"></a>
						</div>
						<div class="social_share_icon">
							<a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>images/01followyoutube.png" alt="Lights"></a>
						</div>
						<div class="social_share_icon">
							<a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>images/01followlinkedin.png" alt="Lights"></a>
						</div>
					</div>
				</div>
			</div>

			<!-- NEWSLETTER -->
			<div class="col-md-12">
				<div class="newsletter_container">
					<p class = "newsletter_post">SUBSCRIBE TO NEWSLETTER</p>
						<input class="newsletter_email" type="email" name="useremail" placeholder="Your Email Address">
						<input  class="newsletter_button"type="submit" value="Sign up">
				</div>
			</div>

			<div class="col-md-12">
				<div class="rightside_area">
					<p class = "popular_post">COURSE GUIDE POSTS</p>
					<?php foreach($course as $course) { ?>
					<div class="row popular_career">
						<a href="#">
							<div class="col-xs-4 col-sm-3 col-md-4 similar_post_image_area">
								<img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo $course->img; ?>" alt="Lights">
							</div>
							<div class="col-xs-8 col-sm-9 col-md-8 similar_post_text_area">
								<p class = ""><?php echo $course->title; ?></p>
							</div>
						</a>
					</div>
					<hr />
					<?php } ?>
				</div>
			</div>

			<!-- AD BANNER -->
			<div class="col-md-12">
				<div class="advert_banner">
						<img class="img-responsive" src="<?php echo base_url(); ?>images/300X600banner.jpg" alt="Lights">
				</div>
			</div>

			<!-- AD BANNER 1 -->
				<div class="wide_billboard">
					<a>
						<img class="img-responsive" src="<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
					</a>
				</div>
			<!-- END AD BANNER -->

			<!-- AD BANNER -->
			<div class="col-md-12">
				<div class="advert_banner">
						<img class="img-responsive" src="<?php echo base_url(); ?>images/advertise300x250.jpg" alt="Lights">
				</div>
			</div>

			<!-- AD BANNER 1 -->
				<div class="wide_billboard">
					<a>
						<img class="img-responsive" src="<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
					</a>
				</div>
			<!-- END AD BANNER -->
		</div>

	</div>
</div>
