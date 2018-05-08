<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header page-header-block">
      <div class="page-header-section">
        <h4 class="title semibold">Add Blog Post</h4>
      </div>
      <div class="row">
          <form class="form-horizontal panel panel-default" action="do_upload" method="post" enctype="multipart/form-data">
              <div class="panel-heading">
                <h3 class="panel-title">Add Post</h3>
              </div>
              <div class="panel-body">
                <div class="form-group inline">
                  <label class="col-sm-2">Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="catid">
                      <option>Select Post Category</option>
                      <?php foreach($cat as $cats) { ?>
                        <option value="<?php echo $cats->id; ?>"><?php echo $cats->name; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group inline">
                  <label class="col-sm-2">Title</label>
                  <div class="col-sm-10">
                    <input name="title" type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Content</label>
                  <div class="col-sm-10">
                    <textarea name="content" rows="8" cols="80" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Feature Image</label>
                  <div class="col-sm-10">
                    <input name="userfile" type="file" class="form-control" />
                     <small class="error"><?php if(isset($pic_error)) echo $pic_error; ?></small>
                  </div>
                </div>
              </div>

              <div class="panel-footer">
                <button type="submit" class="btn btn-primary">Add Post</button>

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
