<!-- Page Content -->
<div class="container">

<br>

    <div class="row">
        <div class="col-md-3">
            
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="panel-title">Friend Recomendation</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
            </div>
          </div>

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="panel-title">Discussion</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
               <?php
                if($discussion_data->num_rows() > 0){
                  $i = 0;
                    foreach($discussion_data->result() as $row){
                      $id[$i] =  $row->id_forum; 
                ?>
                <li class="item">
                  <!-- <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div> -->
                  <div class="">
                    <a href="javascript:void(0)" class="product-title"><?php echo $row->title; ?></a>
                        <span class="product-description" id="date_post" style="font-size:12px">
                          <abbr class="timeago" title="<?php echo $row->date_create; ?>"></abbr> , <?php echo $this->z_model_forum->count_comment_discussion('id_forum', $id[$i]);?> reply , by <h style="font-size:12px"><?php echo $row->tutor_name; ?></h>
                        </span>
                  </div>
                </li>
                <?php
                      }
                  }
                ?>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="<?php echo site_url('z_forum/forum'); ?>" class="uppercase">View All Discussions</a>
            </div>
            <!-- /.box-footer -->
          </div>
          
        </div>
  
  
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="tab-content">
              <div class="active tab-pane">
               
                <!-- Post -->
                <div class="post">
                  
                  <div class="col-md-1">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="user image">
                    </div>
                  </div>

                  <div class="col-md-11">
                    <form class="form-horizontal">
                      <div class="box-body">
                        
                        <div class="form-group">
                          <div class="col-sm-12">
                              <textarea class="form-control" rows="4" id="status_description" name="description" placeholder="Type your status description ..."></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" id="status_label" name="label" placeholder="Status Label">
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
                         <!-- <input type="file" id="file_post" name="resource">  -->
                          <!--a class="btn btn"><i class="fa fa-edit"></i> Resource</a-->
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

        <!--POST AJAX RESPONSE-->
        <span id="post_box">
          <?php 
            if($status_data->num_rows() > 0){
                $i = 0;
                foreach($status_data->result() as $row){
                  $id[$i] = $row->id_status;
          ?>
          <div class="box box-widget box-status" id="<?php echo  $id[$i];?>">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="<?php echo base_url($_SESSION['photo_profile']); ?>" alt="user image">
                <span class="username">
                  <a href="#"><?php echo $_SESSION['tutor_name']; ?></a>
                  <?php //echo $id[$i]; ?>
                </span>
                <span class="description" id="date_post"><abbr class="timeago" title="<?php echo $row->date_create; ?>"><?php echo $row->date_create; ?></abbr></span>
              </div>
            </div>
     
            <div class="box-body">
              <p>
                <?php echo $row->status_description; ?> <br>
                <span class="label label-default">#<?php echo $row->status_label; ?></span>   
              </p>
              <ul class="list-inline">
                <!-- <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li> -->
                <li>
                    <a onclick="javascript:savelike(<?php echo $row->id_status; ?>);" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i>
                       <span id="like_<?php echo $row->id_status; ?>">
                        <?php 
                          if($row->likes > 0){
                              echo $row->likes.' Likes';
                          }else{
                              echo 'Like';
                          } 
                        ?>
                       </span>
                    </a>
                </li>
                <li>
                  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (<?php echo $this->z_model_status->count_comment_status('id_status', $id[$i]);?>)</a></li>
              </ul>
            </div>

            <span class="cb" cb-id="<?php echo $id[$i] ;?>">
             <?php 
              if($comment_data->num_rows() > 0){
                  foreach($comment_data->result() as $row){
                    if($row->id_status == $id[$i]){
             ?>
            <!-- box-comment -->
            <div class="box-footer box-comments">
              <div class="box-comment">
                <img class="img-circle img-sm" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="User Image">
                <div class="comment-text">
                      <span class="username">
                        <?php echo $row->tutor_name ;?>
                        <span class="text-muted pull-right" id="date_post"><abbr class="timeago" title="<?php echo $row->date_create; ?>"><?php echo $row->date_create; ?></abbr></span>
                      </span>
                  <?php echo $row->comment ;?>
                </div>
              </div>
            </div>
              <?php
                    }
                  }
                }
              ?>
            </span>

            <div class="box-footer">
                <img class="img-responsive img-circle img-sm" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="user image">
                <div class="img-push">
                  <input type="text" comment-id="<?php echo $id[$i];?>" class="form-control input-sm comment" placeholder="Type to post comment" required><br>
                  <button type="submit" class="btn btn-info pull-right comment-btn" value="<?php echo $id[$i];?>">Comment</button>
                </div>
            </div>
        
          </div>

          <?php
                $i++;
              }
            }
          ?>
        </span>

        </div>
        <!-- /.col -->

        <!-- MODAL DELETE POST -->
          <div class="modal fade" id="deletepostmodal" tabindex="-1" role="dialog">
              <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Confirm Delete</h4>
                      </div>
                      <div class="modal-body">
                          Do you want to delete this status?
                      </div>
                      <div class="modal-footer">
                        <button type"button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type"submit" id="btnDeletePost" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
              </div>
          </div>
          <!-- END MODAL DELETE POST -->
        
          <div class="col-md-3">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="panel-title">Recently Resource</h3>
              </div>
              <div class="box-body">
                <ul class="products-list product-list-in-box">
                  <?php 
                    if($recent_resource->num_rows() > 0){
                        foreach($recent_resource->result() as $row){
                  ?>
                  <li class="item">
                    <div class="product-img">
                      <img src="<?php echo base_url('asset/img/math.jpg') ; ?>" alt="Product Image">
                    </div>
                    <div class="product-info">
                      <a href="<?php echo base_url();?>z_resource/detail_resource/<?php echo $row->id_resource;?>" class="product-title"><?php echo $row->title ?>
                        <span class="product-description" id="date_post" style="font-size:12px">
                          <abbr class="timeago" title="<?php echo $row->date_create; ?>"><?php echo $row->date_create; ?></abbr>   by <h style="font-size:12px"><?php echo $row->tutor_name; ?></h>
                        </span>
                         <?php
                    if($row->subject == "science"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/science') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a> 
                        <?php
                          if($row->grades == "1st"){ ?>
                          <a href="<?php echo base_url('z_resource/resource/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "2nd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "3rd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "4th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "5th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "6th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "7th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "8th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "9th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "10th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "11th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "12th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "Not Specific Grades"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }
                        ?>
                  <?php
                    }else if($row->subject == "math"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/math') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a>
                        <?php
                          if($row->grades == "1st"){ ?>
                          <a href="<?php echo base_url('z_resource/resource/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "2nd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "3rd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "4th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "5th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "6th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "7th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "8th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "9th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "10th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "11th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "12th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "Not Specific Grades"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }
                        ?>
                  <?php
                    }else if($row->subject == "language"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/language') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a>
                        <?php
                          if($row->grades == "1st"){ ?>
                          <a href="<?php echo base_url('z_resource/resource/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "2nd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "3rd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "4th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "5th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "6th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "7th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "8th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "9th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "10th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "11th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "12th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "Not Specific Grades"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }
                        ?>
                  <?php
                    }else if($row->subject == "social"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/social') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a>
                        <?php
                          if($row->grades == "1st"){ ?>
                          <a href="<?php echo base_url('z_resource/resource/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "2nd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "3rd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "4th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "5th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "6th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "7th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "8th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "9th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "10th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "11th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "12th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "Not Specific Grades"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }
                        ?>
                  <?php
                    }else if($row->subject == "arts"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/arts') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a>
                        <?php
                          if($row->grades == "1st"){ ?>
                          <a href="<?php echo base_url('z_resource/resource/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "2nd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "3rd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "4th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "5th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "6th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "7th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "8th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "9th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "10th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "11th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "12th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "Not Specific Grades"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }
                        ?>
                  <?php
                    }else if($row->subject == "religion"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/arts') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a>
                        <?php
                          if($row->grades == "1st"){ ?>
                          <a href="<?php echo base_url('z_resource/resource/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "2nd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "3rd"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "4th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "5th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "6th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "7th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "8th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "9th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "10th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "11th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "12th"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }else if($row->grades == "Not Specific Grades"){ ?>
                           <a href="<?php echo base_url('z_resource/resource/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                        <?php
                          }
                        ?>
                  <?php
                    }
                  ?>
                    </div>
                  </li>
                   <?php
                        }
                    }
                  ?>
                </ul>
              </div>
              <div class="box-footer text-center">
                <a href="<?php echo site_url('z_resource/resource'); ?>" class="uppercase">View All Resources</a>
              </div>
            </div>
          </div>

      </div>
      <!-- /.row -->
</div>
<!-- /.container -->

