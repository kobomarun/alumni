<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header page-header-block">
      <div class="page-header-section">
        <h4 class="title semibold">Mentors Benefits</h4>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <?php if($this->session->flashdata('success')) { ?>
          <div class="alert alert-success">
            <?php ($this->session->flashdata('success')) ?>
          </div>
          <?php } ?>
          <form class="form-horizontal panel panel-default" action="updateMentors" method="post">
              <div class="panel-heading">
                <h3 class="panel-title">Benefit for Mentors</h3>
              </div>
              <?php foreach($mentor as $row) { ?>
              <div class="panel-body">
                <div class="form-group inline">
                  <label class="col-sm-2">Title</label>
                  <div class="col-sm-10">
                    <input name="title" type="text" class="form-control" value="<?php echo $row->title; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Content</label>
                  <div class="col-sm-10">
                    <textarea name="content"><?php echo $row->content; ?></textarea>
                  </div>
                </div>
              </div>
              <?php } ?>
              <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Update </button>

              </div>
            </form>
        </div>
      </div>
    </div>
    <!-- Page Header -->
  </div>
  <!--/ END Template Container -->
  <!-- START To Top Scroller -->
  <a href="page-starter.html#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%">
    <i class="ico-angle-up"></i>
  </a>
  <!--/ END To Top Scroller -->
</section>
