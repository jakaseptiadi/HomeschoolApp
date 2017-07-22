<!-- Page Content -->
<div class="container">

<br>

   <?php 
      if($profile_data->num_rows() > 0){
         foreach($profile_data->result() as $row){
   ?>
    <div class="row">
       
      <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->

            <div class="widget-user-header bg-black" style="background: url('<?php echo base_url('asset/dist/img/photo1.png'); ?>') center center;">
              <h3 class="widget-user-username"><?php echo $row->username; ?></h3>
              <h5 class="widget-user-desc"><?php echo $row->profession; ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
    
     <div class="col-md-3">
     <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-map-marker margin-r-5"></i> Religion</strong>
              <p class="text-muted"><?php echo $row->religion; ?> </p>
              <hr>

              <strong><i class="fa fa-mars margin-r-5"></i> Gender</strong>
              <p class="text-muted"><?php echo $row->gender; ?> </p>
              <hr>

              <strong><i class="fa fa-graduation-cap margin-r-5"></i>Last Education</strong>
              <p class="text-muted"><?php echo $row->last_education; ?></p>
              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Profession</strong>
              <p class="text-muted"><?php echo $row->profession; ?></p>
              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted"><?php echo $row->location; ?> </p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> About</strong>
              <p class="text-muted"><?php echo $row->about; ?> </p>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      
      <?php
            }
          }
      ?>
     
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="tab-content">
              <div class="active tab-pane">
               
                <!-- Post -->
                <div class="post">
                  
                  <div class="col-md-1">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="<?php echo base_url('asset/dist/img/user4-128x128.jpg'); ?>" alt="user image">
                    </div>
                  </div>

                  <div class="col-md-11">
                    <form class="form-horizontal">
                      <div class="box-body">
                        
                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" id="status_title" name="title" placeholder="Status Title">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-12">
                              <textarea class="form-control" rows="4" id="status_description" name="description" placeholder="Enter status description ..."></textarea>
                            </div>
                        </div>

                        <!--div class="form-group">
                          <div class="col-sm-12">
                            <select class="form-control" id="status_tag" name="tag_topic" required="">
                              <option value="" disabled selected hidden>Select Topic...</option>
                              <option value="Math">Math</option>
                              <option value="Social">Social</option>
                              <option value="Arts">Arts</option>
                              <option value="Language">Language</option>
                              <option value="Science">Science</option>
                              <option value="Homeschooling Activity">Homeschooling Activity</option>
                            </select>
                          </div>
                        </div-->


                      </div>
                       <div class="box-footer">
                         <input type="file" id="file_post" name="resource">
                          <a class="btn btn">
                            <i class="fa fa-edit"></i> Resource
                          </a>
                          <button type="submit" id="id_post_btn" class="btn btn-info pull-right">Post</button>
                       </div>
                    <!-- /.box-footer -->

                    </form>
                  </div>

                   <form class="form-horizontal">
                      <div class="box-body">
                      </div>
                  </form>

                </div>
                <!-- end post-->
              </div>
            </div>
          </div>


        <span id="post_box">


          
          <?php 
            if($status_data->num_rows() > 0){
                foreach($status_data->result() as $row){
          ?>
          <div class="box">
            <div class="tab-content">
              <div class="active tab-pane">
               
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url('asset/dist/img/user4-128x128.jpg'); ?>" alt="user image">
                        <span class="username">
                          <a href="#"><?php echo $_SESSION['tutor_name']; ?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                  </div>
                  <p>
                    <?php echo $row->status_title; ?><br/>
                    <?php echo $row->status_description; ?>
                  </p>
                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
              
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
          
          <?php
              }
            }
          ?>

          </span>
        </div>
        <!-- /.col -->
        

          <!-- Friends Box -->
          <div class="col-md-3">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Friends</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <p>
                    Teman yang mengikuti anda
                </p>
              </div>
              <!-- /.box-body -->
            </div>
        </div>

      </div>
      <!-- /.row -->
</div>
<!-- /.container -->

