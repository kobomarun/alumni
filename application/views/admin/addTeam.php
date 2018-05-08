<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header page-header-block">
      <div class="page-header-section">
        <h4 class="title semibold">Add a Team Member</h4>
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
          <form class="form-horizontal panel panel-default" action="" method="post">
              <div class="panel-heading">
                <h3 class="panel-title">Add Member</h3>
              </div>
              <div class="panel-body">
                <div class="form-group inline">
                  <label class="col-sm-2">Full Name</label>
                  <div class="col-sm-10">
                    <input name="name" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Position</label>
                  <div class="col-sm-10">
                    <input name="position" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Facebook</label>
                  <div class="col-sm-10">
                    <input name="fb" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Twitter</label>
                  <div class="col-sm-10">
                    <input name="tw" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">GooglePlus</label>
                  <div class="col-sm-10">
                    <input name="gplus" type="text" class="form-control">
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
                <button type="submit" class="btn btn-primary">Add Member</button>

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
