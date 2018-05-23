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
          <form class="form-horizontal panel panel-default" action="insert" method="post">
              <div class="panel-heading">
                <h3 class="panel-title">Social Links</h3>
              </div>
              <div class="panel-body">
                <?php foreach($view as $view ) { ?>
                <div class="form-group inline">
                  <label class="col-sm-2"><?php echo $view->name; ?></label>
                  <div class="col-sm-10">
                    <input name="name[]" type="text" class="form-control" value="<?php echo $view->name; ?>">
                    <input name="id[]" type="hidden" class="form-control" value="<?php echo $view->id; ?>">

                  </div>
                </div>
                <div class="form-group inline">
                  <label class="col-sm-2">Link</label>
                  <div class="col-sm-10">
                    <input  type="text" class="form-control" value="<?php echo $view->link; ?>" name="field[]">
                  </div>
                </div>
                <hr />
                <?php } ?>
               </div>
              <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Update</button>

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
