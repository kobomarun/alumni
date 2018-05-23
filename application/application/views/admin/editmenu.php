<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header page-header-block">
      <div class="page-header-section">
        <h4 class="title semibold">Edit Menu</h4>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <?php if(isset($error)) { ?>
          <div class="alert alert-danger">
            <?php if(isset($error))echo $error; ?>
          </div>
          <?php } foreach($edit as $row) :?>

          <form class="form-horizontal panel panel-default" action="<?php echo base_url();?>admin/menu/updateMenu" method="post" >
              <div class="panel-heading">
                <h3 class="panel-title">Edit Menu</h3>
              </div>
              <div class="panel-body">
                <div class="form-group inline">
                  <label class="col-sm-2">Menu</label>
                  <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" value="<?php echo $row->name; ?>" required/>
                  </div>
                </div>


              </div>
                </div>

              </div>

              </div>

              <div class="panel-footer">
                <input type="hidden" value="<?php echo $row->id;?>" name='id' />
                <input type="submit" class="btn btn-primary" value="Save Menu "/>

              </div>
            </form>
          <?php endforeach; ?>
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
