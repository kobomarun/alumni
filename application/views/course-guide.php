<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p class="career_guide">COURSE GUIDE</p>
			<p class="discretion">Use the filter below to search for different university courses offered in Nigeria universities. The information is meant as a guide only.</p>
			<p class="discretion2">Please note that the information below is meant as a guide only and your discretion is advised.</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-2 big_alpha">
			<div class="big_box" id="mainadd">
				A
			</div>
		</div>

		<div class="col-md-10 small_alpha">
			<div class="row">
				<div class="col-md-12">
					<div class="small_boxes">
						<li onclick="clickText(this.id)" id="A" class="f-active">A</li>
						<li onclick="clickText(this.id)" id="B">B</li>
						<li onclick="clickText(this.id)" id="C">C</li>
						<li onclick="clickText(this.id)" id="D">D</li>
						<li onclick="clickText(this.id)" id="E">E</li>
						<li onclick="clickText(this.id)" id="F">F</li>
						<li onclick="clickText(this.id)" id="G">G</li>
						<li onclick="clickText(this.id)" id="H">H</li>
						<li onclick="clickText(this.id)" id="I">I</li>
						<li onclick="clickText(this.id)" id="J">J</li>
						<li onclick="clickText(this.id)" id="K">K</li>
					</div>
				</div>
				<div class="col-md-12">
					<div class="small_boxes">
						<li onclick="clickText(this.id)" id="L">L</li>
						<li onclick="clickText(this.id)" id="M">M</li>
						<li onclick="clickText(this.id)" id="N">N</li>
						<li onclick="clickText(this.id)" id="O">O</li>
						<li onclick="clickText(this.id)" id="P">P</li>
						<li onclick="clickText(this.id)" id="Q">Q</li>
						<li onclick="clickText(this.id)" id="R">R</li>
						<li onclick="clickText(this.id)" id="S">S</li>
						<li onclick="clickText(this.id)" id="T">T</li>
						<li onclick="clickText(this.id)" id="U">U</li>
						<li onclick="clickText(this.id)" id="V">V</li>
					</div>
				</div>
				<div class="col-md-12">
					<div class="small_boxes">
						<li onclick="clickText(this.id)" id="W">W</li>
						<li onclick="clickText(this.id)" id="X">X</li>
						<li onclick="clickText(this.id)" id="Y">Y</li>
						<li onclick="clickText(this.id)" id="Z">Z</li>
						<li style="background:none; border:none;"><button onclick="clickText(this.id)" id="All" type="button" name="button" class="resetFilter">Refresh</button></li>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row course_guide position_l_r">
		<div class="container">
			<div class="row" id="result">
				<?php foreach($career as $row) : ?>
				<div class="col-sm-4 col-md-4">
					<div class="gallery">
						<a target="" href="<?php echo base_url()."course_guide/view/"; ?>">
							<img src="<?php echo base_url(); ?>images/<?php echo $row->img; ?>" alt="Electrical Enigineer">
						</a>
						<div class="desc"><?php echo $row->title; ?></div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
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
