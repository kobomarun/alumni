<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header page-header-block">
      <div class="page-header-section">
        <h4 class="title semibold">Edit Category</h4>
      </div>
      <div class="row">
        <div class="col-xs-12">

          <form class="form-horizontal panel panel-default" action="<?php echo base_url(); ?>admin/category/updatecategory" method="post">
              <div class="panel-heading">
                <h3 class="panel-title">Edit Category</h3>
              </div>
              <?php foreach($edit as $row): ?>
              <div class="panel-body">
                <div class="form-group inline">
                  <label class="col-sm-2">Name</label>
                  <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" value="<?php echo $row->name; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Description</label>
                  <div class="col-sm-10">
                    <input name="description" type="text" class="form-control" value="<?php echo $row->description; ?>">
                    <input type="hidden" value="<?php echo $row->id; ?>" name="id"/>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
              <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Update Category</button>

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
