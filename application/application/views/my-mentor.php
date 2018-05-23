<div class="container">
	<div class="row mentor_page text-center">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<a href="#" onclick="getMentors(<?php echo $this->session->userdata('id'); ?>)" class="my_mentors" style="background: #555; color: #fff;" id="bmentor">MY MENTORS <span class="">&nbsp;(<?php echo $countMentors; ?>)</span></a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<a href="#" onclick="getMentees(<?php echo $this->session->userdata('id'); ?>)" class="my_mentees" id="bmentee">MY MENTEES <span class="">&nbsp;(<?php echo $countMentees; ?>)</span></a>
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

<div class="container">
 <div class="row" id="filterTab">
	 <?php foreach($myMentors as $row) { ?>
		<div class="col-sm-6 col-md-6">
			<div class="mentor">
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 user_pic_area">
						<a href="#"><img class="img-responsive user_pic" src="<?php echo base_url(); ?>images/rasheed.jpg" alt="user1"></a>
					</div>
					<div class="col-xs-9 col-sm-9 col-md-9 user_content_area">
						<a href="<?php echo base_url();?>my/viewprofile/<?php echo $row->mentorid; ?>" class="link_alumni">
							<p class="user_id">
								<?php echo $this->db->get_where('am_users', array('id'=>$row->mentorid))->row()->fname; ?>
								<?php echo $this->db->get_where('am_users', array('id'=>$row->mentorid))->row()->lname; ?></p>
							<p class="user_detail"><span class="work">ALUMNI </span><span> - </span><span>GCI | </span><span>LAUTECH | </span><span>City, Univ. of London UK</span></p>
							<p class="user_detail"><span class="work">WORK </span><span> - </span><span> Founder/CEO DigiAfrik Tech. Ltd. UK |</span><span> MultiLinks Nig.</span></p>
						</a>
						<div class="row button_options">
							<div class="col-md-12">
								<?php if($row->disabled == 1) { ?>
									<a ><input type="button" value="Waiting for Confimation" class="add_mentor"></a>
								<?php } else { ?>
								<a ><input type="button" value="Message" class="add_mentor" data-toggle="modal" data-target="#<?php echo $row->mentorid; ?>"></a>
							<?php } ?>
								<a href="<?php echo base_url(); ?>my/removeFromList/<?php echo $row->mentorid; ?>/mentor_list/mentorid"><button class="add_mentor"> Remove </button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- modal -->
<div id="<?php echo $row->mentorid; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">
					Send Message to
					<?php echo $this->db->get_where('am_users', array('id'=>$row->mentorid))->row()->fname; ?>
				<?php echo $this->db->get_where('am_users', array('id'=>$row->mentorid))->row()->lname; ?>
			</h4>
      </div>
      <div class="modal-body">
				<form action="sendMessage" method="post">
			  <div class="form-group">
			    <label for="msg">Message:</label>
			    <textarea class="form-control" name="message" rows="5"></textarea>
					<input type="hidden" name="id" value="<?php echo $row->mentorid; ?>"/>
					<input type="hidden" name="senttime" value="" id ="time"/>
			  </div>
			  <button type="submit" class="btn btn-default">Send Message</button>
			</form>
			</div>
			<div id="result"></div>
	 </div>
  </div>
</div>
<?php } ?>
 </div>
		<!-- Pagination
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="listpagination centerpagination">
					  <a href="#">«</a>
					  <a href="#">1</a>
					  <a class="active" href="#">2</a>
					  <a href="#">3</a>
					  <a href="#">4</a>
					  <a href="#">»</a>
					</div>
				</div>
			</div>
		</div>
-->
	</div>
</div>
<script>
 document.getElementById("time").innerHTML = moment().format('LL');
	function saveMessage(id) {
		message = document.getElementById("message").value;
		var form_data = {
			'message' : message,
			'id' : id,
			'senttime': moment().format('LL')
		}

		console.log("saveMsg", form_data);

		$.ajax({
	    type: "post",
	    url: "sendMessage",
	    data: form_data,
	    success: function(response) {
				console.log("response",response);
				message = " ";
		  }
	  });
	}
</script>
