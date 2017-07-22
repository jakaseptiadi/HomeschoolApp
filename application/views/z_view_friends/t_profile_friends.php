<!-- Page Content -->
<div class="container">

<br><br>

    <div class="row">
       
      <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <?php 
                foreach($profile_data as $row){
            ?>

            <div class="widget-user-header bg-black" style="background: url('<?php echo base_url('asset/dist/img/photo1.png'); ?>') center center;">
              <h3 class="widget-user-username"><?php echo $row->username; ?></h3>
              <h5 class="widget-user-desc"><?php echo $row->profession; ?></h5>
                <div class="form-group">
                  <div class="col-sm-offset-10 col-sm-10">
            <?php
                }
            ?>          
                  </div>
                </div>
            </div>

            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <?php 
                      //echo $id;
                        foreach($data as $row){
                    ?>

                    <h5>Want to add friend?</h5>
                    <?php 
                      if($status == 1){ 
                        //echo $status;
                    ?>
                     <a type="button" class="btn btn-primary" href="<?php echo base_url();?>z_friends/unfollow/<?php echo $row->tutor_id;?>/<?php echo $row->type_id ?>">Unfriend</a>
                    <?php
                      }else if($status == 2){ ?>
                      
                      <a type="button" class="btn btn-default" href="<?php echo base_url();?>z_friends/follow/<?php echo $row->tutor_id;?>/<?php echo $row->type_id ?>">Accept Request</a>
                    <?php
                      }else{
                     ?>   
                     <a type="button" class="btn btn-primary" href="<?php echo base_url();?>z_friends/follow/<?php echo $row->tutor_id;?>/<?php echo $row->type_id ?>">Add Friend <i class="fa fa-user-plus margin-r-0"></i> </a>
                    <?php
                      }
                    ?>
                  </div>
                  <!-- /.description-block -->
                  <?php
                      }
                  ?>
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
                    <h5>Want to message?</h5>
                    <a type="button" class="btn btn-success" href="javascript:;" data-friend="<?php echo $row->tutor_id;?>">Message</a>
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
              <?php 
                foreach($profile_data as $row){
              ?>
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
              <?php 
                }
              ?>
          </div>
      </div>
      
      
     
        <!-- /.col -->
        <div class="col-md-6">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Logbook</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
      
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               
               <!-- Post -->
                <?php 
                  $i = 0;
                  foreach($status_data as $row){
                    $id[$i] = $row->id_status;
                ?>
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url('asset/dist/img/user4-128x128.jpg'); ?>" alt="user image">
                        <span class="username"><?php echo $row->tutor_id ;?> 
                          <a href="#"></a>
                          <?php echo $row->id_status ;?>
                        </span>
                    <span class="description" id="date_post"><abbr class="timeago" title="<?php echo $row->date_create; ?>"><?php echo $row->date_create; ?></abbr></span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    <?php echo $row->status_description ;?>
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments(<?php echo $this->z_model_status->count_comment_status('id_status', $id[$i]);?>)</a></li>
                  </ul>
                  <!-- input class="form-control input-sm" type="text" placeholder="Type a comment" -->
                  <div class="box-footer">
                      <img class="img-responsive img-circle img-sm" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="user image">
                      <div class="img-push">
                        <input type="text" comment-id="<?php echo $id[$i];?>" class="form-control input-sm comment" placeholder="Type to post comment" required><br>
                        <button type="submit" class="btn btn-info pull-right comment-btn" value="<?php echo $id[$i];?>">Comment</button>
                      </div>
                  </div >
                </div>
                <!-- /.post -->
                <?php
                  }
                ?>
              
              </div>
        
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
      
               
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
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

<!-- TEMPLATE CHAT -->
<div id="wgt-container-template" style="display: none">
    <div class="msg-wgt-container">
        <div class="msg-wgt-header">
            <a href="javascript:;" class="online"></a>
            <a href="javascript:;" class="name"></a>
            <a href="javascript:;" class="close">x</a>
        </div>
        <div class="msg-wgt-message-container">
            <table width="100%" class="msg-wgt-message-list">
            </table>
        </div>
        <div class="msg-wgt-message-form">
            <textarea name="message" placeholder="Type your message. Press Shift + Enter for newline"></textarea>
        </div>
    </div>
</div>