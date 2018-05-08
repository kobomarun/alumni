<div class="container">
	<div class="row search_mentor">
		<p>Advert</p>
	</div>
</div>

<div class="container back_arrow">
	<a href="#"><i class="fa  fa-arrow-circle-left" aria-hidden="true"></i>&nbsp; Back</a>
</div>


<div class="container mobile_container whole_container">
	<div class="row">
		<div class="col-sm-5 col-md-5 col-lg-4">

			<div class="ml_container hide_msg_list">
				<p class="ml_title">Messaging</p>
				<input type="text" placeholder="Search messages." id="msSearch" onkeyup="filterFunction()">

					<div class="all_users_container">
						<?php  foreach($messages as $m) {  ?>
						<a href="#" class="ml_message_link" onclick="getMessages(<?php echo $m->from_userid; ?>)">
							<div class="row ml_one_user">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<img class="img-responsive ml_pic" src="<?php echo base_url(); ?>images/<?php echo $m->img; ?>" alt="">
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9">
									<div class="row">
										<div class="col-xs-10 col-sm-10 col-md-9 col-lg-9 ml_sum_top">
											<p class="ml_name">
												<?php echo $fname = $this->db->get_where('am_users', array('id'=>$m->from_userid))->row()->fname; ?>
												<?php echo $lname = $this->db->get_where('am_users', array('id'=>$m->from_userid))->row()->lname; ?>
											</p>
										</div>
										<div class="col-xs-2 col-sm-2 col-md-3 col-lg-3 ml_sum_date">
											<p class="ml_date">Aug 23</p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-11 col-sm-10 col-md-10 col-lg-10 ml_sum_name">
											<p class="ml_msg_snippet"><?php echo $m->from_msg; ?></p>
										</div>
										<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 ml_sum_counter">
											<p class="ml_counter">0</p>
										</div>
									</div>
								</div>
							</div>
						</a>
					<?php $fromId = $m->from_userid; } ?>
					</div>
			</div>
		</div>

		<div class="col-sm-7 col-md-7 col-lg-5 ms_container hide_messaging">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-10 col-lg-10 ms_intro mb_intro">
					<p class="ms_name_box mb_name_box"><!--Adesokan Rasheed  (MSc.)--></p>
					<p class="ms_name_decribe mb_name_decribe"><!--Student at Government College Ibadan--></p><br /><br />
				</div>
				<div class="col-xs-3 col-sm-3 col-md-2 col-lg-2 ms_delete">
					<p class="ms_msg_delete mb_msg_delete"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>&nbsp; <a href="#">Delete</a></p>
					<p class="ms_msg_report mb_msg_report"><a href="#"><i class="fa fa-ban" aria-hidden="true"></i></a>&nbsp; <a href="#">Report</a><br /><br /></p>
				</div>
			</div>
			<div class="row">

				<div class="col-md-12 col-lg-12 message_area mb_message_area" id="messages">

					<div class="row me" style="" id="msg_sent" >
							<!--message sent here-->

					</div>
					<div class="row ms_them" style="" id="nn_msg" >
	<!-- new message -->

					</div>
				</div>

				<div class="col-md-12 col-lg-12 ms_send_box mb_send_box">
					<form onsubmit="messageSent(event, <?php echo $fromId; ?>)">
					  <textarea class="ms_compose_msg" id="message" rows="4" cols="51" placeholder="Type a message"></textarea>
					<span class="ms_doc_attach"><a href="#"><i class="fa fa-paperclip" aria-hidden="true"></i></a></span>
					<span class="ms_img_attach"><a href="#"><i class="fa fa-file-photo-o" aria-hidden="true"></i></a></span>
					<span class="ms_msg_send" style="float: right"><input type="submit" class="ms_msg_send" value="Send"/></span>
          </form>
				</div>
			</div>
		</div>



		<div class="col-sm-12 col-md-3 col-lg-3 hide_ad">
			<div class="ad_section">
				<div class="row">
					<a href="#" class="">
						<p class="ad_content">ADVERT</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
function refresh() {
	var theContent = "<div class='row them'>"+
	"<div class='col-md-12 col-lg-12'>"+
    "<p class='ms_date_sent'>"+moment().format('LLS')+"</p>"+
  "</div>"+
"<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>"+
	"<img class='img-responsive ms_pic' src='images/rasheed.jpg' alt='user1'>"+
"</div>"+
  "<div class='col-md-12 col-lg-8'>" +
	"<p>Message from "+<?php echo $this->db->get_where('am_users',array('id'=>$frm->from_userid))->row()->fname; ?>" </p>"+
    "<p class='ms_them'>helloooooo</p>"+
  "</div>"
	+"</div>";

	document.getElementById("msg_sent").innerHTML += theContent;
}

//refresh();

	setInterval(function() {
		getMessages(<?php echo $m->from_userid; ?>);
	}, 1000);
</script>
