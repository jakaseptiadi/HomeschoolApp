<!-- Page Content -->
<div class="container">

    <div class="row">
        <br><br>

        <!-- COLSPAN 1 -->
        <div class="col-md-12">
          
        <!-- NOTIFICATION -->
          <?php
          if ($this->session->flashdata('failed')) { ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <i class="fa fa fa-ban"></i> <?php echo $this->session->flashdata('failed'); ?>
            </div>
          <?php }else if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <i class="fa fa fa-check"></i> <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php }
          ?>

          <!-- BOX FORM RESOURCE-->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">1. Upload Resource</h3>
            </div>
            

            <!--form class="form-horizontal"-->
            <?php echo form_open_multipart('z_resource/add_resource', " class='form-horizontal'");?>
              <div class="box-body">
               
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Resource Title</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="resource_title" placeholder="Title" >
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Resource Description</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" rows="5" name="resource_description" placeholder="Enter description ..."></textarea>
                      <p>
                        *This is for description
                      </p>
                    </div>
                </div>

               <div class="form-group">
                  <label for="resource_type" class="col-sm-2 control-label">Resource Type</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="resource_type" required="">
                      <option value="" disabled selected hidden>Select a Resource Type</option>
                      <option value="Tugas">Tugas</option>
                      <option value="Soal Latihan">Soal Latihan</option>
                      <option value="Kurikulum">Kurikulum</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="resource_grades" class="col-sm-2 control-label">Grades</label>
                  <div class="col-sm-1">
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="1st" checked>1st</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="7th">7th</label>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="2nd" checked>2nd</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="8th">8th</label>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="3rd" checked>3rd</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="9th">9th</label>
                    </div>
                  </div>
                   <div class="col-sm-1">
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="4th" checked>4th</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="10th">10th</label>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="5th" checked>5th</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="11th">11th</label>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="6th">6th</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="resource_grades" value="12th">12th</label>
                    </div>
                  </div>
                </div>
                 
                <div class="form-group">
                  <label for="resource_type" class="col-sm-2 control-label">Resource Subject</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="resource_type" required="">
                      <option value="" disabled selected hidden>Select a Resource Subject</option>
                      <option value="math">Math</option>
                      <option value="social">Social</option>
                      <option value="science">Science</option>
                      <option value="language">Language</option>
                      <option value="art">Art</option>
                      <option value="religion">Religion</option>
                      <option value="history">History</option>

                    </select>
                  </div>
                </div>

                <!--div class="form-group">
                  
                    <label for="username" class="col-sm-2 control-label">Subject</label>

                    <div class="col-sm-1">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="resource_subject" value="math">
                                Math
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="resource_subject" value="math">
                                Social
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="resource_subject" value="science">
                                Science
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="resource_subject" value="language">
                                Language
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="resource_subject" value="arts">
                                Arts
                            </label>
                        </div>
                    </div>
                     <div class="col-sm-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="resource_subject" value="arts">
                                Arts
                            </label>
                        </div>
                    </div>
                </div-->

                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">File Upload</label>
                    <div class="col-sm-6">
                      <input type="file" name="resource">
                    </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="btn_add_resource" class="btn btn-primary">Submit</button>
                    </div>
                 </div>
              </div>
            </form>

          </div>
          <!-- /.box -->
        </div>
        <!-- COLSPAN 1 -->
    </div>
</div>
