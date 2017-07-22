<?php
  
  /* foreach ($data as $row){
      print_r ($row);
   }
   die;
*/
?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <br>
          <div class="col-md-1">
          </div>

          <div class="col-md-8">
            <div class="box box-solid">
              <div class="box-header with-border">
                

                <?php
                  foreach ($data_detail as $row){
                      //print_r ($row);
                   }
                ?>

                <h2><?php echo $row->title ?></h2>

                <p class="help-block" style="font-size:12px">
                  <span class="description" id="date_post">Share publicly - <abbr class="timeago" title="<?php echo $row->date_create; ?>"><?php echo $row->date_create; ?></abbr></span>
                  <!--span class="description">Shared publicly - 7:30 PM today</span-->
                </p>

              </div>
              <!-- /.box-header -->
              <div class="box-body">

                
                <div class="box-body">
                  <div class="col-md-2"></div>
                  <embed src="<?php echo base_url().'uploads/resources/'.$row->file; ?>" width="500px" height="500px"> <br><br>
                  <!--  <?php
                        if($row->subject == "math"){
                            $path = base_url('asset/img/math-detail.jpg');
                        }else if($row->subject == "language"){
                            $path = base_url('asset/img/language-detail.jpg');
                        }else if($row->subject == "arts"){
                            $path = base_url('asset/img/arts-detail.jpg');
                        }else if($row->subject == "science"){
                            $path = base_url('asset/img/science-detail.jpg');
                        }
                    ?> -->
                  <!-- <img class="img-responsive pad" src="<?php echo $path; ?>" alt="Photo"> -->

                  <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                  <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                  <a href="<?php echo base_url();?>z_resource/download/<?php echo $row->id_resource;?>" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                </div><hr>

                
                <!-- <iframe id="iframepdf" width="800" src="resources/Pedoman_Penulisan_Karya_Ilmiah_UPI_2015.pdf"></iframe> -->

                <dl>
                  <dt>Description : </dt> <br>
                  <dd><?php echo $row->description ?></dd> <hr>
                  
                  <dt> Details : </dt> 
                  <div class="box-body">
                    <table class="table table-bordered">
                      <tr>
                        <td style="width: 150px">Resource Type</td>
                        <td style="width: 150px"><a href=""><?php echo $row->type ?></a></td>
                      </tr>
                      <tr>
                        <td style="width: 150px">Resource Subject</td>
                        <td style="width: 700px">
                          <?php if($row->subject=="math"){ ?>
                               <a href="<?php echo base_url('z_resource/resource/subject/math') ; ?>"><?php echo $row->subject ?></a></td>
                          <?php } else if($row->subject=="laguage"){ ?>
                               <a href="<?php echo base_url('z_resource/resource/subject/language') ; ?>"><?php echo $row->subject ?></a></td>
                          <?php } else if($row->subject=="social"){ ?>
                               <a href="<?php echo base_url('z_resource/resource/subject/social') ; ?>"><?php echo $row->subject ?></a></td>
                          <?php } else if($row->subject=="science"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/subject/science') ; ?>"><?php echo $row->subject ?></a></td>
                          <?php } else if($row->subject=="arts"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/subject/arts') ; ?>"><?php echo $row->subject ?></a></td>
                          <?php } else if($row->subject=="language"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/subject/language') ; ?>"><?php echo $row->subject ?></a></td>
                          <?php } else if($row->subject=="religion"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/subject/religion') ; ?>"><?php echo $row->subject ?></a></td>
                          <?php } else if($row->subject=="not subject specific"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/subject/not subject specific') ; ?>"><?php echo $row->subject ?></a></td>
                          
                          <?php
                          }
                          ?>

                          
                      </tr>
                      <tr>
                        <td style="width: 150px">Grades</td>
                        <td style="width: 700px">
                          <?php if($row->grades=="1st"){ ?>
                               <a href="<?php echo base_url('z_resource/resource/grades/1st') ; ?>"><?php echo $row->grades ?> (Elemntary School)</a></td>
                          <?php } else if($row->grades=="2nd"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/2nd') ; ?>"><?php echo $row->grades ?> (Elementary School)</a></td>
                          <?php } else if($row->grades=="3rd"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/3rd') ; ?>"><?php echo $row->grades ?> (Elementary School)</a></td>
                          <?php } else if($row->grades=="4th"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/4th') ; ?>"><?php echo $row->grades ?> (Elementary School)</a></td>
                          <?php } else if($row->grades=="5th"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/5th') ; ?>"><?php echo $row->grades ?> (Elementary School)</a></td>
                          <?php } else if($row->grades=="6th"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/6th') ; ?>"><?php echo $row->grades ?> (Elementary School)</a></td>
                          <?php } else if($row->grades=="7th"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/7th') ; ?>"><?php echo $row->grades ?> (Middle School)</a></td>
                          <?php } else if($row->grades=="8th"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/8th') ; ?>"><?php echo $row->grades ?> (Middle School)</a></td>
                          <?php } else if($row->grades=="9th"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/9th') ; ?>"><?php echo $row->grades ?> (Middle School)</a></td>
                          <?php } else if($row->grades=="10th"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/10th') ; ?>"><?php echo $row->grades ?> (High School)</a></td>
                          <?php } else if($row->grades=="11th"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/11th') ; ?>"><?php echo $row->grades ?> (High School)</a></td>
                          <?php } else if($row->grades=="12th"){ ?>
                                <a href="<?php echo base_url('z_resource/resource/grades/12th') ; ?>"><?php echo $row->grades ?> (High School)</a></td>
                          <?php
                          }

                          ?>

                         
                      </tr>
                      <tr>
                        <td style="width: 150px">File</td>
                        <td style="width: 700px"><?php echo $row->file ?></td>
                      </tr>
                    </table>
                  </div>
                </dl>


              </div>
              <!-- /.box-body -->
            </div>
          <!-- /.box -->
        </div>

        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Another Resource</h3>
            </div>
            <div class="box-body">
                <h4>dfbdfbdfbfdbb</h4>
                <img src="<?php echo base_url('asset/img/math2.jpg') ; ?>" height="42" width="60" alt="Photo">
            </div>
          </div>
        </div>


        
    </div>
</div>
