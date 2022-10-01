 <?php 
  ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Area Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/welcome"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url() ?>/area">View area</a></li>
        <li class="active">Add Area</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Detail</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo site_url() ?>/area/addrow">
              <div class="box-body">
                <div class="form-group">
                  <label>Select City</label>
                  <select name="cityname" class="form-control">
                  <?php 
                  foreach ($list as $row) 
                  {
                    ?>
                    <option value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name'] ?></option>
                    <?php
                  }
                   ?>
                </select>

                  </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Area Name</label>
                  <input type="text" class="form-control" name="areaname" id="exampleInputEmail1" placeholder="Enter area name">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 