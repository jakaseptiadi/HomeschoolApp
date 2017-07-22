<!-- Page Content -->
<div class="container">

<br>

    <div class="row">
        <div class="col-md-3">
        
        </div>
  
  
        <!-- /.col -->
        <div class="col-md-6">
        
        <!--POST AJAX RESPONSE-->
        <span id="post_box">
          <?php 
            if($fetch_message->num_rows() > 0){
              $i = 0;
                foreach($fetch_message->result() as $row){
                   $id[$i] =  $row->id_target; 
                  //print_r($row);
                  //echo "<hr>";
          ?>

          <div class="box box-widget box-status" id="<?php echo  $id[$i];?>">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="<?php echo base_url($_SESSION['photo_profile']); ?>" alt="user image">
                <span class="username"> <?php echo $row->tutor_name;?>
                 
                  <?php //echo $id[$i]; ?>
                </span>
              </div>
            </div>

            <span class="cb" cb-id="<?php echo  $id[$i];?>">
            
            <!-- box-comment -->
            <div class="box-footer box-comments">
              <div class="box-comment">
                <img class="img-circle img-sm" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="User Image">
                <div class="comment-text">
                      <span class="username">
                        <?php //echo $row->tutor_name ;?>
                        
                      </span>
                  <?php echo $row->message ;?>
                </div>
              </div>
            </div>
             
            </span>

            <div class="box-footer">
                <img class="img-responsive img-circle img-sm" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="user image">
                <div class="img-push">
                  <input type="text" comment-id="<?php echo $id[$i];?>" class="form-control input-sm comment" placeholder="Type to post comment" required><br>
                  <button type="submit" class="btn btn-info pull-right message-btn" value="<?php echo $id[$i];?>">Send</button>
                </div>
            </div>
        
          </div>

          <?php 
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
            
          </div>

      </div>
      <!-- /.row -->
</div>
<!-- /.container -->

