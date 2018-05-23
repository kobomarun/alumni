<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header page-header-block">
      <div class="page-header-section">
        <h4 class="title semibold">Edit Slider</h4>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <?php if(isset($error)) { ?>
          <div class="alert alert-danger">
            <?php if(isset($error))echo $error; ?>
          </div>
          <?php } ?>

          <?php if($this->session->flashdata('success')) { ?>
          <div class="alert alert-success">
            <?php ($this->session->flashdata('success')) ?>
          </div>
            <?php }  foreach ($edit as $edit) { ?>
          <form class="form-horizontal panel panel-default" action="/admin/homepage/processSlider" method="post">
              <div class="panel-heading">
                <h3 class="panel-title">Edit Slider</h3>
              </div>

              <div class="panel-body">
                <div class="form-group inline">
                  <label class="col-sm-2">Title</label>
                  <div class="col-sm-10">
                    <input name="title" type="text" class="form-control" value="<?php echo $edit->title; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Description</label>
                  <div class="col-sm-10">
                    <input name="description" type="text" class="form-control" value="<?php echo $edit->description; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Call to Action</label>
                  <div class="col-sm-10">
                    <input name="cta" type="text" class="form-control" value="<?php echo $edit->cta; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Link</label>
                  <div class="col-sm-10">
                    <input name="link" type="text" class="form-control" value="<?php echo $edit->link; ?>">
                    <input type="hidden" value="<?php echo $edit->id; ?>" name="id"/>
                  </div>
                </div>

              </div>

              <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Upload Slider</button>
              </div>
            </form>
              <?php } ?>
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
