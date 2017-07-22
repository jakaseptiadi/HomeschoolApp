    <?php
        // cara mengecek data yang masuk

      /* if($resource_data->num_rows() > 0){
             foreach($resource_data->result() as $row){
                print_r($row);
                echo "<hr>";
             }
         }
         die;*/
         
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
				<br>
                <a href="#formresourcemodal" data-toggle="modal" data-target="#formresourcemodal" class="btn btn-primary btn-block margin-bottom"> <i class="fa fa-plus-circle margin-r-0"></i> Add Resource</a><br>
				
                <!-- MODAL ADD RESOURCE -->
                <div class="modal fade" id="formresourcemodal" tabindex="-1" role="dialog" aria-labelledby="Formtitle">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="Signuptitle">Add Resource</h4> 
                            </div>
                            <div class="modal-body">
                                <div class="row panel-body">
                                <!-- START RESOURCE FORM -->
                                    <div class="col-md-11">
                                        
                                        <?php echo form_open_multipart('z_resource/add_resource', " class='form-horizontal'");?>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-3 control-label">Resource Title  <span data-toggle="tooltip" title="Title of the content for this resource" class="fa fa-info-circle"></span> </label> 
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="resource_title" placeholder="Title" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="username" class="col-sm-3 control-label">Resource Description <span data-toggle="tooltip" title="To description the resource" class="fa fa-info-circle"> </label>
                                                <div class="col-sm-9">
                                                  <textarea class="form-control" rows="5" name="resource_description" placeholder="Enter description ..." required></textarea>
                                                   <p class="help-block" style="font-size:12px">
                                                        <i>*Describe your content, including how it addresses a specific subject and standards. Tell us what academic objectives it achieves. A great description is around 100 words, provides a detailed overview, backs it up with anecdotes or data, and anticipates questions/concerns of users.</i>
                                                   </p>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                              <label for="resource_type" class="col-sm-3 control-label">Resource Type <span data-toggle="tooltip" title="Select a resource type, will allow user to search your resource filtered by resource type you select" class="fa fa-info-circle"> </label>
                                              <div class="col-sm-9">
                                                <select class="form-control" name="resource_type" required>
                                                  <option value="" disabled selected hidden>Select a Resource Type</option>
                                                  <option value="Material">Material</option>
                                                  <option value="Worksheets & Homework">Worksheets & Homework</option>
                                                  <option value="Exams & Quizzes">Exam & Quizzes</option>
                                                  <option value="Homeschool Curricula">Homeschool Curricula</option>
                                                  <option value="Games & Activities">Games & Activities</option>
                                                  <option value="Teacher Guide">Teacher Guide</option>
                                                  <option value="Individual Lesson Plans">Individual Lesson Plans</option>
                                                  <option value="Magazine">Magazine</option>
                                                   <option value="Not Type Specific">Not Type Specific</option>

                                                </select>
                                              </div>
                                            </div>
                                            <!--div class="form-group">
                                                <label for="resource_type" class="col-sm-3 control-label">Multiple</label>
                                                 <div class="col-sm-9">
                                                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                                  <option>Alabama</option>
                                                  <option>Alaska</option>
                                                  <option>California</option>
                                                  <option>Delaware</option>
                                                  <option>Tennessee</option>
                                                  <option>Texas</option>
                                                  <option>Washington</option>
                                                </select>
                                                 </div>
                                              </div-->
                                            <div class="form-group">
                                              <label for="resource_grades" class="col-sm-3 control-label">Grades <span data-toggle="tooltip" title="Select a grades of school level, will allow user to search your resource filtered by school level you select" class="fa fa-info-circle"> </label>
                                              <div class="col-sm-1">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="resource_grades" value="1st">1st</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="7th">7th</label>
                                                </div>
                                              </div>
                                              <div class="col-sm-1">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="2nd">2nd</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="8th">8th</label>
                                                </div>
                                              </div>
                                              <div class="col-sm-1">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="3rd">3rd</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="9th">9th</label>
                                                </div>
                                              </div>
                                               <div class="col-sm-1">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="4th">4th</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="10th">10th</label>
                                                </div>
                                              </div>
                                              <div class="col-sm-1">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="5th">5th</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="11th">11th</label>
                                                </div>
                                              </div>
                                              <div class="col-sm-1">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="6th">6th</label>
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="12th">12th</label>
                                                </div>
                                              </div>
                                              <div class="col-sm-3">
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="resource_grades" value="Not Specific Grades">Not Specific Grades</label>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="resource_type" class="col-sm-3 control-label" onchange="showDiv(this)" id="subject">Resource Subject <span data-toggle="tooltip" title="Select a subject, will allow user to search your resource filtered by subject you select" class="fa fa-info-circle">  </label>
                                              <div class="col-sm-9">
                                                <select class="form-control" name="resource_subject" required>
                                                  <option value="" disabled selected hidden>Select a Resource Subject</option>
                                                  <option value="math">Math</option>
                                                  <option value="social">Social</option>
                                                  <option value="science">Science</option>
                                                  <option value="language">Language</option>
                                                  <option value="arts">Arts</option>
                                                  <option value="religion">Religion</option>
                                                  <option value="history">History</option>
                                                  <option value="not subject specific">Not Subject Specific</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="resource_type" class="col-sm-3 control-label">Resource Subject Area <span data-toggle="tooltip" title="Select a subject, will allow user to search your resource filtered by subject you select" class="fa fa-info-circle">  </label>
                                              <div class="col-sm-9">
                                                <select class="form-control area" name="resource_subject_area" required>
                                                  <option value="" disabled selected hidden>Select Subject Area</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="resource_type" class="col-sm-3 control-label">Privation<span data-toggle="tooltip" title="Select a subject, will allow user to search your resource filtered by subject you select" class="fa fa-info-circle">  </label>
                                              <div class="col-sm-9">
                                                <select class="form-control" name="resource_privation" required>
                                                  <option value="" disabled selected hidden>Select a Resource Privation</option>
                                                  <option value="public">Share to public</option>
                                                  <option value="private">Share private</option>
                                                </select>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="username" class="col-sm-3 control-label">File Upload <span data-toggle="tooltip" title="Select a resource file, this will be an important things. The resource could be uploaded." class="fa fa-info-circle"> </label>
                                                <div class="col-sm-9">
                                                  <input type="file" name="resource" required>
                                                  <p class="help-block" style="font-size:12px">
                                                        <i>*<b>Supported File Types :</b> .webp, .gif, .jpg, .ng, .bmp, .tif, .doc, .pdf, .ppt, .mp4, .3gp, .avi, .wmv, .mpg, .flv, .mp3, .mp2, .rar, .zip, .7zip</i>      
                                                  </p>
                                                  <p class="help-block" style="font-size:12px"><i>*Max resource size : <b>25 Mb</b></i></p>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-10">
                                                  <button type="submit" name="btn_add_resource" class="btn btn-primary">Submit</button>
                                                </div>
                                             </div>
                                            </div>
                                        </form>
                                        <br>
                                    </div>
                                    <!-- END RESOURCE FORM -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL RESOURCE FORM -->
				  
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
							<a href="<?php echo base_url('z_resource/resource/grades/12th') ; ?>">12th</a>
							<a href="<?php echo base_url('z_resource/resource/grades/11th') ; ?>">11th</a>
							<a href="<?php echo base_url('z_resource/resource/grades/10th') ; ?>">10th</a>
						  </div>
						</div>
						<div class="dropdown" style="float:left;">
						  <button class="dropbtn">Middle</button>
						  <div class="dropdown-content" style="left:0;">
							<a href="<?php echo base_url('z_resource/resource/grades/9th') ; ?>">9th</a>
							<a href="<?php echo base_url('z_resource/resource/grades/8th') ; ?>">8th</a>
							<a href="<?php echo base_url('z_resource/resource/grades/7th') ; ?>">7th</a>
						  </div>
						</div>
						<div class="dropdown" style="float:left;">
						  <button class="dropbtn">Elementary</button>
						  <div class="dropdown-content" style="left:0;">
							<a href="<?php echo base_url('z_resource/resource/grades/6th') ; ?>">6th</a>
							<a href="<?php echo base_url('z_resource/resource/grades/5th') ; ?>">5th</a>
							<a href="<?php echo base_url('z_resource/resource/grades/4th') ; ?>">4th</a>
							<a href="<?php echo base_url('z_resource/resource/grades/3rd') ; ?>">3rd</a>
							<a href="<?php echo base_url('z_resource/resource/grades/2nd') ; ?>">2nd</a>
							<a href="<?php echo base_url('z_resource/resource/grades/1st') ; ?>">1st</a>
						  </div>
						</div>
					</div>
				  </div>	
				  <!-- SUBJECT -->
				  <div class="box box-solid">
					<div class="box-header with-border">
					  <h3 class="box-title">Subject</h3>
					  <div class="box-tools">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="box-body no-padding">
					  <ul class="nav nav-pills nav-stacked">
						<li><a href="<?php echo base_url('z_resource/resource/subject/math') ; ?>"><i></i> Math
						<li><a href="<?php echo base_url('z_resource/resource/subject/language') ; ?>"><i></i> Language</a></li>
						<li><a href="<?php echo base_url('z_resource/resource/subject/soical') ; ?>"><i></i> Social</a></li>
						<li><a href="<?php echo base_url('z_resource/resource/subject/science') ; ?>"><i></i> Science</a></li>
            <li><a href="<?php echo base_url('z_resource/resource/subject/arts') ; ?>"><i></i> Arts</a></li>
            <li><a href="<?php echo base_url('z_resource/resource/subject/religion') ; ?>"><i></i> Religion</a></li>
					  </ul>
					</div>
				  </div>	
				
				  <!-- PANEL NO CONTROLS -->
				  <div class="panel">
					  <div class="panel-heading">
						  <h3 class="panel-title">About Resource</h3>
					  </div>
					  <div class="panel-body">
						  <p>This resource are...</p>
					  </div>
				  </div>
				  <!-- END PANEL NO CONTROLS -->
            </div>
			
			<br>
            <div class="col-md-9">
              <div class="row carousel-holder">
                  <div class="col-md-12">
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                              <div class="item active">
                                  <img class="slide-image" src="<?php echo base_url('asset/img/slide-image1.jpg') ; ?>" alt="">
                              </div>
                              <div class="item">
                                  <img class="slide-image" src="<?php echo base_url('asset/img/slide-image2.jpg') ; ?>" alt="">
                              </div>
                              <div class="item">
                                  <img class="slide-image" src="<?php echo base_url('asset/img/slide-image3.jpg') ; ?>" alt="">
                              </div>
                          </div>
                          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>
                      </div>
                  </div>

              </div>

          
              <h4><span data-toggle="tooltip" title="If there is no resource, that mean the resource not be uploaded yet" class="fa fa-info-circle"></span><b><?php echo $grades, " (Resources shared by Tutors)"; ?></b></h4><hr>
          
              <div class="row">
                  <?php
                      if($resource_data->num_rows() > 0){
                          foreach($resource_data->result() as $row){
                  ?>
                  <div class="col-sm-1 col-lg-4 col-md-1">
                      <div class="thumbnail">
                          
                          <?php
                              if($row->subject == "math"){
                                  $path = base_url('asset/img/math-cover.png');
                              }else if($row->subject == "science"){
                                  $path = base_url('asset/img/science-cover.jpg');

                              }else if($row->subject == "arts"){
                                  $path = base_url('asset/img/arts-cover.jpg');

                              }else if($row->subject == "language"){
                                  $path = base_url('asset/img/language-cover.jpg');

                              }
                              else if($row->subject == "social"){
                                  $path = base_url('asset/img/social-cover.jpg');

                              }


                          ?>

                          <img src="<?php echo $path; ?>" alt="">

                          <div class="caption">
                              <h5 class="pull-right"></h5>
                              <h4><a href="<?php echo base_url();?>z_resource/detail_resource/<?php echo $row->id_resource;?>"><?php echo $row->title; ?></a></h4>
                              <!--p><?php echo $row->description; ?></p-->
                              <p class="help-block" style="font-size:14px">This resource for <?php echo $row->subject, " resource"; ?> 
                              <br>Grades :      <?php echo $row->grades; ?>
                              <br>Created by :   <a href="<?php echo base_url();?>z_friends/profile/<?php echo $row->tutor_id;?>"><?php echo $row->tutor_username; ?></a>
                              </p>

                          </div>

                          <a href="<?php echo base_url();?>z_resource/detail_resource/<?php echo $row->id_resource;?>" class="btn btn-primary btn-block margin-bottom">Details</a><br>

              
                      </div>
                  </div>


                  <?php
                          }
                      }else{ ?>

                          <div class="error-page">
                              <!--h2 class="headline text-yellow"> 404</h2-->

                              <div class="error-content">
                                <h3><i class="fa fa-warning text-yellow"></i> Resource not found.</h3>

                                <p>
                                  We could not find reource you were looking for.
                                  Meanwhile, you may <a href="<?php echo site_url('z_resource/resource'); ?>">return to resource page</a>
                                </p>
                              </div>
                          </div>
                  <?php
                      }
                  ?>
              </div>
            </div>
            
                <?php
                    echo $this->pagination->create_links();
                ?>

        </div>
    

    </div>
    <!-- /.container -->