<!-- SCROLL TO TOP -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<!-- END -->

<!-- FOOTER -->
<footer>
	<div class="container-fluid footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 menu text-center">
					<p>
						<?php $query = $this->db->get('footerMenu')->result();
						foreach($query as $f) {
						 ?>
						<a href="<?php echo $f->url; ?>"><?php echo $f->name; ?></a>
						<span> &nbsp;&nbsp; | &nbsp;&nbsp; </span>
					<?php } ?>
					</p>
				</div>
			</div>


			<!-- SECOND ROW OF FOOTER -->
			<div class="row newsletter_section">
				<div class="col-sm-6 col-md-6">
					<div class="subscription">
						<p>Join our mailing list for learning resources, career news, and educational events.</p>
						<div class="email_phone">
							<form>
							<input class="email" type="email" id="p-email" placeholder="Enter your email address" required>
							<input class="button" type="submit" value="SUBSCRIBE" onclick="mailList()">
						 </form>
						</div>
					</div>

					</div>
				<div class="col-sm-6 col-md-6">
					<div class="subscription">
						<p>Opt into our SMS list for career, scholarship, study abroad, and tuition-free news.</p>
						<div class="email_phone">
							<form>
							<input class="email" type="number" id="p-phone" placeholder="Enter your phone number" required/>
							<input class="button" type="submit" value="SUBSCRIBE" onclick="phoneList()">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="alert alert-success" id="success-alert" style="display:none;"></div>
			<?php
				$query = $this->db->get('socials')->result();
			?>
			<div class="row">
				<div class="col-md-12">
					<div class="followus">
						<p class="text">FOLLOW US ON</p>
						<hr class="divider">
						<div class="text-center">
						<?php foreach($query as $r) { ?>
						<div class="social_share_icon">
							<a href="<?php echo $r->link; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>images/<?php echo $r->img; ?>" alt="Lights"></a>
						</div>
					<?php } ?>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- END FOOTER -->
</div><!-- end of mentors-hub-wrapper -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>js/jquery-1.12.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>

<!-- Touch Event Support for jQuery UI -->
<script src="<?php echo base_url(); ?>js/jquery.ui.touch-punch.min.js"></script>
<script src="<?php echo base_url(); ?>js/ma5slider.min.js"></script>
<script src="<?php echo base_url(); ?>js/index.js"></script>
<script src="<?php echo base_url(); ?>js/functions.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

	<!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>



</body>
</html>
