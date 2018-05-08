<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header page-header-block">
      <div class="page-header-section">
        <h4 class="title semibold">Add A.M Features</h4>
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
          <?php } ?>
          <form class="form-horizontal panel panel-default" action="<?php echo base_url(); ?>admin/homepage/do_uploadfeatures" method="post" enctype="multipart/form-data">
              <div class="panel-heading">
                <h3 class="panel-title">Add A.M Feature</h3>
              </div>
              <div class="panel-body">
                <div class="form-group inline">
                  <label class="col-sm-2">Title</label>
                  <div class="col-sm-10">
                    <input name="title" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Text</label>
                  <div class="col-sm-10">
                    <input name="texx" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Link</label>
                  <div class="col-sm-10">
                    <input name="link" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Upload Image</label>
                  <div class="col-sm-10">
                    <input name="userfile" type="file" class="form-control" />
                     <small class="error"><?php if(isset($pic_error)) echo $pic_error; ?></small>
                  </div>
                </div>
              </div>

              <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Add Feature</button>

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
