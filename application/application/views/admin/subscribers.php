<section id="main" role="main">
  <!-- START Template Container -->
  <div class="container-fluid">
    <div class="row">
          <div class="col-md-12">
            <?php if($this->session->flashdata("success")) { ?>
            <div class="alert alert-danger">
              <?php echo $this->session->flashdata("success"); ?>
            </div>
            <?php } ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">All Email Subscribers</h3>
              </div>
              <div id="zero-configuration_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="zero-configuration_length"><label>Show <select name="zero-configuration_length" aria-controls="zero-configuration" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="zero-configuration_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="zero-configuration"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="zero-configuration" role="grid" aria-describedby="zero-configuration_info">
                <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">S/N</th>
                    <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 211px;">Emails</th>
                    <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 211px;">Action</th>

                    </tr>
                </thead>
                <tbody>

                  <?php
                  $i=1;
                    foreach($email as $row) {
                    ?>
                <tr role="row" class="odd">
                    <td class="sorting_1"><?php echo $i++; ?></td>
                    <td><?php echo $row->content; ?></td>
                    <td><a href="<?php echo base_url(); ?>admin/subscribers/edit/<?php echo $row->id; ?>">Edit</a>
                    | <a href="<?php echo base_url(); ?>admin/subscribers/delete/<?php echo $row->id; ?>">Delete</a></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">All Phone Subscribers</h3>
            </div>
            <div id="zero-configuration_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="zero-configuration_length"><label>Show <select name="zero-configuration_length" aria-controls="zero-configuration" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="zero-configuration_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="zero-configuration"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="zero-configuration" role="grid" aria-describedby="zero-configuration_info">
              <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 20px;">S/N</th>
                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 211px;">Phone Numbers</th>
                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 211px;">Action</th>

                  </tr>
              </thead>
              <tbody>

                <?php
                $i=1;
                  foreach($phone as $row) {
                  ?>
              <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $i++; ?></td>
                  <td><?php echo $row->content; ?></td>
                  <td><a href="<?php echo base_url(); ?>admin/subscribers/edit/<?php echo $row->id; ?>">Edit</a>
                   | <a href="<?php echo base_url(); ?>admin/subscribers/delete/<?php echo $row->id; ?>">Delete</a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        </div>
        </div>
        </div>
  </div>
  <!--/ END Template Container -->
  <!-- START To Top Scroller -->
  <a href="page-starter.html#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%">
    <i class="ico-angle-up"></i>
  </a>
  <!--/ END To Top Scroller -->
</section>
