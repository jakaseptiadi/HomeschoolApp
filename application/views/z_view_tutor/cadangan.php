<?php
                    }else if($row->subject == "math"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/math') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a>
                  <?php
                    }else if($row->subject == "language"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/language') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a>
                  <?php
                    }else if($row->subject == "social"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/social') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a>
                  <?php
                    }else if($row->subject == "arts"){ ?>
                       <a href="<?php echo base_url('z_resource/resource/subject/arts') ; ?>"><span class="label label-primary"><?php echo $row->subject ?></span></a>


(($row->grades == "1st") || ($row->grades == "2nd") || ($row->grades == "3rd") || ($row->grades == "4th") || ($row->grades == "5th") )

<a href="<?php echo base_url('z_resource/resource/grades/1st') ; ?>"><span class="label label-primary"><?php echo $row->grades ?></span></a>


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
                          }
                      ?>


                      
                    <?php
                          }
                      ?>
