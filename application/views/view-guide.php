<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=224975207545166';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container" style="margin-top:5px;">
	<div class="row">
		<!-- Center Content -->
		<div class="col-md-8">
			<div class="col-md-12">
				<div class="leftside_area">
						<div class = "post_main_content">
							<p class = "career_type"><?php echo $view['title']; ?></p>
							<p class = "post_detail"><span><?php echo strtoupper($this->db->get_where('am_users', array('id'=>$view['postby']))->row()->fname); ?></span> / <span><?php echo strtoupper($view['type']); ?></span> / <span><?php echo strtoupper($view['date']); ?></span> <!--/ <span>33</span> COMMENTS / <span>199</span> VIEWS <span></span>--></p>
							<img class="img-responsive career_main_image" src="<?php echo base_url(); ?>images/<?php echo $view['img']; ?>" alt="Civil Engineers">
							<p class="paragraph_content"><?php echo $view['description']; ?><br /></p>
							<?php if($view['tab1'] !='') { ?>
							<div class="accordion_cont">
								<button class="accordion"><?php echo strtoupper($view['tab1']); ?></button>
								<div class="panel">
									<p class = "content_in_accordion">
										<?php echo $view['tab1_content'] ; ?>
									</p>
								</div>
							</div>
							<?php } ?>
							<?php if($view['tab2'] !='') { ?>
							<div class="accordion_cont">
								<button class="accordion"><?php echo strtoupper($view['tab2']); ?></button>
								<div class="panel">
									<p class = "content_in_accordion">
										<?php echo $view['tab2_content'] ; ?>
									</p>
								</div>
							</div>
							<?php } ?>
							<?php if($view['tab3'] !='') { ?>
							<div class="accordion_cont">
								<button class="accordion"><?php echo strtoupper($view['tab3']); ?></button>
								<div class="panel">
									<p class = "content_in_accordion">
										<?php echo $view['tab3_content'] ; ?>
									</p>
								</div>
							</div>
							<?php } ?>

							<!-- AD BANNER 1 -->
								<div>
									<a>
										<img class="img-responsive" src="<?php echo base_url(); ?>images/02.jpg" alt="Lights">
									</a>
								</div>
							<!-- END AD BANNER -->
							<?php if($view['tab4'] !='') { ?>
							<div class="accordion_cont">
								<button class="accordion"><?php echo strtoupper($view['tab4']); ?></button>
								<div class="panel">
									<p class = "content_in_accordion">
										<?php echo $view['tab4_content'] ; ?>
									</p>
								</div>
							</div>
							<?php } ?>
							<?php if($view['tab5'] !='') { ?>
							<div class="accordion_cont">
								<button class="accordion"><?php echo strtoupper($view['tab5']); ?></button>
								<div class="panel">
									<p class = "content_in_accordion">
										<?php echo $view['tab5_content'] ; ?>
									</p>
								</div>
							</div>
							<?php } ?>
							<?php if($view['tab6'] !='') { ?>
							<div class="accordion_cont">
								<button class="accordion"><?php echo strtoupper($view['tab6']); ?></button>
								<div class="panel">
									<p class = "content_in_accordion">
										<?php echo $view['tab6_content'] ; ?>
									</p>
								</div>
							</div>
							<?php } ?>
							<!-- AD BANNER 2 -->
								<div>
									<a>
										<img class="img-responsive" src="<?php echo base_url(); ?>images/Billboard-970x250.jpg" alt="Lights">
									</a>
								</div>
							<!-- END AD BANNER -->

							<?php if($view['tab7'] !='') { ?>
							<div class="accordion_cont">
								<button class="accordion"><?php echo strtoupper($view['tab7']); ?></button>
								<div class="panel">
									<p class = "content_in_accordion">
										<?php echo $view['tab7_content'] ; ?>
									</p>
								</div>
							</div>
							<?php } ?>
							<?php if($view['tab8'] !='') { ?>
							<div class="accordion_cont">
								<button class="accordion"><?php echo strtoupper($view['tab8']); ?></button>
								<div class="panel">
									<p class = "content_in_accordion">
										<?php echo $view['tab_content'] ; ?>
									</p>
								</div>
							</div>
							<?php } ?>
							<?php if($view['tab9'] !='') { ?>
							<div class="accordion_cont">
								<button class="accordion"><?php echo strtoupper($view['tab9']); ?></button>
								<div class="panel">
									<p class = "content_in_accordion">
										<?php echo $view['tab9_content'] ; ?>
									</p>
								</div>
							</div>
							<?php $title = $view['title'];
										$postid = $view['id'];
							} ?>
						</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="leftside_area form">
					<p class = "leave_comment_title form">LEAVE A COMMENT</p>
					<form action="">
					  <textarea class="leave_comment form" name="message" rows="7" cols="83" placeholder="Your comment..."></textarea>
					  <input class="leave_name form" type="text" name="username" size="83" placeholder="Name...">
					  <input class="leave_name form" type="email" name="useremail" size="83" placeholder="Email...">
					  <input  class="post_button"type="submit" value="Post Comment">
					</form>
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
							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url();?>career_guide/read/<?php echo $view['id'] ."/". url_title($view['title']); ?>"><img class="img-responsive" src="<?php echo base_url(); ?>images/sharefacebook.png" alt="Lights"></a>
						</div>
						<div class="social_share_icon">
							<a href="https://plus.google.com/share?url={<?php echo base_url();?>career_guide/read/<?php echo $view['id'] ."/". url_title($view['title']); ?>}"><img class="img-responsive" src="<?php echo base_url(); ?>images/sharegoogleplus.png" alt="Lights"></a>
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
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}
</script>
