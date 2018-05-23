<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
    <!-- Page Header -->
    <div class="page-header page-header-block">
      <div class="page-header-section">
        <h4 class="title semibold">New Career Guilde Post</h4>
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
          <form class="form-horizontal panel panel-default" action="insertCareer" method="post" enctype="multipart/form-data">
              <div class="panel-heading">
                <h3 class="panel-title">Add Career</h3>
              </div>
              <div class="panel-body">
                <div class="form-group inline">
                  <label class="col-sm-2">Category</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="category" required="">
                      <option>Select Category</option>
                      <?php foreach($view as $row) { ?>
                      <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group inline">
                  <label class="col-sm-2">Title</label>
                  <div class="col-sm-10">
                    <input name="title" type="text" class="form-control" required/>
                  </div>
                </div>

                <div class="form-group inline">
                  <label class="col-sm-2">Description</label>
                  <div class="col-sm-10">
                    <textarea name="description"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2">Upload Image</label>
                  <div class="col-sm-10">
                    <input name="userfile" type="file" class="form-control" />
                     <small class="error"><?php if(isset($pic_error)) echo $pic_error; ?></small>
                  </div>
                </div>

              <div class="panel-group" id="accordion1">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="component-tabsaccordion.html#collapseOne" class="collapsed" aria-expanded="false">
                        <span class="arrow mr5"></span> Tab 1
                      </a>
                    </h4>
                  </div>

                  <div id="collapseOne" class="panel-collapse collapse container" aria-expanded="false" style="height: 0px;">
                    <br />
                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 1 Title</label>
                      <div class="col-sm-8">
                        <input name="title1" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 1 Content</label>
                      <div class="col-sm-8">
                        <textarea name="content1"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="component-tabsaccordion.html#collapseTwo" class="collapsed" aria-expanded="false">
                        <span class="arrow mr5"></span> Tab 2
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse container" aria-expanded="false">
                    <br />
                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 2 Title</label>
                      <div class="col-sm-8">
                        <input name="title2" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 2 Content</label>
                      <div class="col-sm-8">
                        <textarea name="content2"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="component-tabsaccordion.html#collapseThree" class="collapsed" aria-expanded="false">
                        <span class="arrow mr5"></span> Tab 3
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse container" aria-expanded="false">
                    <br /><div class="form-group inline">
                      <label class="col-sm-1">Tab 3 Title</label>
                      <div class="col-sm-8">
                        <input name="title3" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 3 Content</label>
                      <div class="col-sm-8">
                        <textarea name="content3"></textarea>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="component-tabsaccordion.html#collapse4" class="collapsed" aria-expanded="false">
                        <span class="arrow mr5"></span> Tab 4
                      </a>
                    </h4>
                  </div>

                  <div id="collapse4" class="panel-collapse collapse container" aria-expanded="false" style="height: 0px;">
                    <br />
                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 4 Title</label>
                      <div class="col-sm-8">
                        <input name="title4" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 4 Content</label>
                      <div class="col-sm-8">
                        <textarea name="content4"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="component-tabsaccordion.html#collapse5" class="collapsed" aria-expanded="false">
                        <span class="arrow mr5"></span> Tab 5
                      </a>
                    </h4>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse container" aria-expanded="false">
                    <br />
                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 5 Title</label>
                      <div class="col-sm-8">
                        <input name="title5" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 5 Content</label>
                      <div class="col-sm-8">
                        <textarea name="content5"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="component-tabsaccordion.html#collapse6" class="collapsed" aria-expanded="false">
                        <span class="arrow mr5"></span> Tab 6
                      </a>
                    </h4>
                  </div>
                  <div id="collapse6" class="panel-collapse collapse container" aria-expanded="false">
                    <br /><div class="form-group inline">
                      <label class="col-sm-1">Tab 6 Title</label>
                      <div class="col-sm-8">
                        <input name="title6" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 6 Content</label>
                      <div class="col-sm-8">
                        <textarea name="content6"></textarea>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="component-tabsaccordion.html#collapse7" class="collapsed" aria-expanded="false">
                        <span class="arrow mr5"></span> Tab 7
                      </a>
                    </h4>
                  </div>

                  <div id="collapse7" class="panel-collapse collapse container" aria-expanded="false" style="height: 0px;">
                    <br />
                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 7 Title</label>
                      <div class="col-sm-8">
                        <input name="title7" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 7 Content</label>
                      <div class="col-sm-8">
                        <textarea name="content7"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="component-tabsaccordion.html#collapse8" class="collapsed" aria-expanded="false">
                        <span class="arrow mr5"></span> Tab 8
                      </a>
                    </h4>
                  </div>
                  <div id="collapse8" class="panel-collapse collapse container" aria-expanded="false">
                    <br />
                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 8 Title</label>
                      <div class="col-sm-8">
                        <input name="title8" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 8 Content</label>
                      <div class="col-sm-8">
                        <textarea name="content8"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion1" href="component-tabsaccordion.html#collapse9" class="collapsed" aria-expanded="false">
                        <span class="arrow mr5"></span> Tab 9
                      </a>
                    </h4>
                  </div>
                  <div id="collapse9" class="panel-collapse collapse container" aria-expanded="false">
                    <br /><div class="form-group inline">
                      <label class="col-sm-1">Tab 9 Title</label>
                      <div class="col-sm-8">
                        <input name="title9" type="text" class="form-control">
                      </div>
                    </div>

                    <div class="form-group inline">
                      <label class="col-sm-1">Tab 9 Content</label>
                      <div class="col-sm-8">
                        <textarea name="content9"></textarea>
                      </div>
                    </div>

                  </div>
                </div>

              </div>

              </div>

              <div class="panel-footer">
                <input type="submit" class="btn btn-primary" value="Add New Career"/>

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
