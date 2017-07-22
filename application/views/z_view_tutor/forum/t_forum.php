
<!-- Page Content -->
<div class="container">

<br>

    <div class="row">

      <!-- MODAL ADD QUESTION -->
      <div class="modal fade" id="formdiscussionmodal" tabindex="-1" role="dialog" aria-labelledby="Formtitle">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="addquestion">Send Question</h4> 
                  </div>
                  <div class="modal-body">
                      <div class="row panel-body">
                      <!-- START DISCUSSION FORM -->
                        <div class="col-md-11">
                            
                          <?php echo form_open_multipart('z_forum/add_discussion', " class='form-horizontal'");?>
                            <div class="form-group">
                                <label for="title" class="col-sm-3 control-label">Discussion Title  <span data-toggle="tooltip" title="Title of the content for discussion. This title will show to forum pages." class="fa fa-info-circle"></span> </label> 
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="discussion_title" placeholder="Title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="discussion_grades" class="col-sm-3 control-label">Grades <span data-toggle="tooltip" title="Select a grades of school level, this may allow users to search topics based on grades." class="fa fa-info-circle"> </label>
                                <div class="col-sm-1">
                                  <div class="checkbox">
                                      <label><input type="checkbox" name="discussion_grades" value="1st">1st</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="7th">7th</label>
                                  </div>
                                </div>
                                <div class="col-sm-1">
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="2nd">2nd</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="8th">8th</label>
                                  </div>
                                </div>
                                <div class="col-sm-1">
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="3rd">3rd</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="9th">9th</label>
                                  </div>
                                </div>
                                <div class="col-sm-1">
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="4th">4th</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="10th">10th</label>
                                  </div>
                                </div>
                                <div class="col-sm-1">
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="5th">5th</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="11th">11th</label>
                                  </div>
                                </div>
                                <div class="col-sm-1">
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="6th">6th</label>
                                  </div>
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="12th">12th</label>
                                  </div>
                                </div>
                                <div class="col-sm-3">
                                  <div class="checkbox">
                                    <label><input type="checkbox" name="discussion_grades" value="Not Specific Grades">Not Specific Grades</label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="discussion_categories" class="col-sm-3 control-label">Discussion Categories <span data-toggle="tooltip" title="Select a subject, will allow user to search your resource filtered by subject you select" class="fa fa-info-circle">  </label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="discussion_categories" required>
                                    <option value="" disabled selected hidden>Select a Discussion Categories</option>
                                    <option value="math">Math</option>
                                    <option value="social">Social</option>
                                    <option value="science">Science</option>
                                    <option value="language">Language</option>
                                    <option value="arts">Arts</option>
                                    <option value="religion">Religion</option>
                                    <option value="history">History</option>
                                    <option value="music">Music</option>
                                    <option value="holidays">Holidays</option>
                                    <option value="not specific categories">Not Specific Categories</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label for="discussion_description" class="col-sm-3 control-label">Discussion Description <span data-toggle="tooltip" title="To description the resource" class="fa fa-info-circle"> </label>
                                  <div class="col-sm-9">
                                    <!--  <textarea class="form-control" rows="9" name="discussion_description" placeholder="Enter description ..." required></textarea>
                                     <p class="help-block" style="font-size:12px">
                                          <i>*Describe your content, including how it addresses a specific subject and standards. Tell us what academic objectives it achieves. A great description is around 100 words, provides a detailed overview, backs it up with anecdotes or data, and anticipates questions/concerns of users.</i>
                                     </p> -->
                                    <textarea id="editor1" name="discussion_description" rows="10" cols="80"></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Image Upload<span data-toggle="tooltip" title="Select a resource file, this will be an important things. The resource could be uploaded." class="fa fa-info-circle"> </label>
                                  <div class="col-sm-9">
                                    <input type="file" name="file_image">
                                    <p class="help-block" style="font-size:12px">
                                          <i>*<b>Supported File Types :</b> .gif, .jpg, .png, .bmp</i>      
                                    </p>
                                    <p class="help-block" style="font-size:12px"><i>*Max resource size : <b>25 Mb</b></i></p>
                                  </div>
                              </div>
                              <div class="box-footer">
                              <div class="form-group">
                                  <div class="col-sm-offset-3 col-sm-1">
                                    <button type="submit" name="btn_add_question" class="btn btn-primary">Submit</button>
                                  </div>
                               </div>
                              </div>
                          </form>
                          <br>
                        </div>
                        <!-- END ADD DISCUSSION FORM -->
                    </div>
                </div>
              </div>
          </div>
    </div>
    <!-- END MODAL DISCUSSION FORM -->
      
    </div>

    <div class="row">
      <div class="col-md-9">

        <div class="box box-solid">
          <div class="box-header-forum with-border">
            <h3 class='box-title'> <?php echo $classification ;?> </h3>
             <?php
                if($classification == "1st"){
                   echo "<h3 class='box-title'> (Elementary) topics </h3>"; }else if($classification == "2nd"){
                   echo "<h3 class='box-title'> (Elementary) topics </h3>"; }else if($classification == "3rd"){
                   echo "<h3 class='box-title'> (Elementary) topics </h3>"; }else if($classification == "4th"){
                   echo "<h3 class='box-title'> (Elementary) topics </h3>"; }else if($classification == "5th"){
                   echo "<h3 class='box-title'> (Elementary) topics </h3>"; }else if($classification == "6th"){
                   echo "<h3 class='box-title'> (Elementary) topics </h3>"; }else if($classification == "7th"){
                   echo "<h3 class='box-title'> (Middle) topics </h3>"; }else if($classification == "8th"){
                   echo "<h3 class='box-title'> (Middle) topics </h3>"; }else if($classification == "9th"){
                   echo "<h3 class='box-title'> (Middle) topics </h3>"; }else if($classification == "10th"){
                   echo "<h3 class='box-title'> (High) topics </h3>"; }else if($classification == "11th"){
                   echo "<h3 class='box-title'> (High) topics </h3>"; }else if($classification == "12th"){
                   echo "<h3 class='box-title'> (High) topics </h3>"; 
                }
                  else{ echo "<h3 class='box-title'> topics </h3>"; }
              ?>
          </div>

          <!-- /.box-header -->
          <div class="box-body ">
            <ul class="products-list product-list-in-box">
              <?php
                if($discussion_data->num_rows() > 0){
                  $i = 0;
                  foreach($discussion_data->result() as $row){
                    $id[$i] = $row->id_forum;
              ?>
              <li class="item">
                <div class="product-img">
                  <img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="<?php echo base_url();?>z_forum/detail_discussion/<?php echo $row->id_forum;?>" class="product-title"><?php echo $row->title; ?>
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
            <a href="#" class="uppercase">Pagination Here</a>
          </div>
          <!-- /.box-footer -->
        </div>

      </div>

      <div class="col-md-3">
      
        <a href="#formdiscussionmodal" data-toggle="modal" data-target="#formdiscussionmodal" class="btn btn-primary btn-block margin-bottom"> <i class="fa fa-plus-circle margin-r-0"></i> Send Question</a><br>
        <!-- BOX KLASIFIKASI -->

          <!-- GRADES -->
          <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Grades</h3>
            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body no-padding">
            <div class="dropdown" style="float:left;">
              <button class="dropbtn">High</button>
              <div class="dropdown-content" style="left:0;">
              <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>">12th</a>
              <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>">11th</a>
              <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>">10th</a>
              </div>
            </div>
            <div class="dropdown" style="float:left;">
              <button class="dropbtn">Middle</button>
              <div class="dropdown-content" style="left:0;">
              <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>">9th</a>
              <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>">8th</a>
              <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>">7th</a>
              </div>
            </div>
            <div class="dropdown" style="float:left;">
              <button class="dropbtn">Elementary</button>
              <div class="dropdown-content" style="left:0;">
              <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>">6th</a>
              <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>">5th</a>
              <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>">4th</a>
              <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>">3rd</a>
              <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>">2nd</a>
              <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>">1st</a>
              </div>
            </div>
          </div>
          </div> 

          <!-- TOPICS -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Topics</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
              <li><a href="<?php echo base_url('z_forum/forum/categories/math') ; ?>"><i></i> Math
              <li><a href="<?php echo base_url('z_forum/forum/categories/language') ; ?>"><i></i> Language</a></li>
              <li><a href="<?php echo base_url('z_forum/forum/categories/music') ; ?>"><i></i> Music</a></li>
              <li><a href="<?php echo base_url('z_forum/forum/categories/holidays') ; ?>"><i></i> Holidays</a></li>
              <li><a href="<?php echo base_url('z_forum/forum/categories/not specific categories') ; ?>"><i></i> Not Specific Categories</a></li>
              <li><a href="<?php echo base_url('z_forum/forum/categories/alltopics') ; ?>"><i></i> See All Topics</a></li>
              </ul>
            </div>
          </div>   
      </div> <!-- END COL-MD-3 -->

    </div>
      <!-- /.row -->
</div>
<!-- /.container -->

