
<!-- Page Content -->
<div class="container">
    <div class="row">
      
      <br>
      <div class="col-md-12"> 
        <img src="<?php echo base_url('asset/img/math-forum-detail.jpg') ; ?>" height="250px" width="1140px">
      </div>

      

     <div class="col-md-9">
        <br> 

        <?php
          $i = 0;
          foreach($detail_data as $row){
             $id[$i] = $row->id_forum;
          }
        ?>
        
        <div class="box box-solid">
          <div class="box-header-forum with-border">
            <i class="fa fa-time"></i>
            <h3 class="box-title" style="font-size:15px"><?php echo $row->date_create; ?></h3>
            <div class="box-tools pull-right">Reply (<?php echo $this->z_model_forum->count_comment_discussion('id_forum', $id[$i]);?>)</div>
          </div>
          <div class="box-body ">
          <ul class="products-list product-list-in-box">
            <li class="item">
              <div class="product-img">
                <img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="" class="product-title" style="font-size:13px"><?php echo $row->tutor_name; ?>
                  <span class="product-description" id="date_post" style="font-size:12px">
                    <span class="description" id="date_post">Share publicly , <abbr class="timeago" title="<?php echo $row->date_create; ?>"><?php echo $row->date_create; ?></abbr></span>
                  </span><hr> <h4><?php echo $row->title ;?></h4>
              </div>
            </li>
          </ul>
          </div>

          <div class="box-body chat">
            <div class="item">
              <div class="attachment">
                <p class="message" style="font-size:15px">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"></small>
                    Description :
                  </a>
                  <?php echo $row->description ;?>
                </p><br>
                <p class="help-block" style="font-size:13px">
                 <span class="description">Tag : </span>
                
                <?php
                  if($row->categories == "math"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/math') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "social"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/social') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "science"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/science') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "language"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/language') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "arts"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/language') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "religion"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/religion') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "history"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/history') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "music"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/music') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "holidays"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/holidays') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "not categories specific"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/not categories specific') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }else if($row->categories == "problem"){ ?>
                     <a href="<?php echo base_url('z_forum/forum/categories/not categories specific') ; ?>"><span class="label label-primary"><?php echo $row->categories ?></span></a> 
                      <?php
                        if($row->grades == "1st"){ ?>
                        <a href="<?php echo base_url('z_forum/forum/grades/1st') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "2nd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/2nd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "3rd"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/3rd') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "4th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/4th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "5th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/5th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "6th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/6th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "7th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/7th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "8th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/8th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "9th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/9th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "10th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/10th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "11th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/11th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "12th"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/12th') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }else if($row->grades == "Not Specific Grades"){ ?>
                         <a href="<?php echo base_url('z_forum/forum/grades/Not Specific Grades') ; ?>"><span class="label label-info"><?php echo $row->grades ?></span></a>
                      <?php
                        }
                      ?>
                  <?php
                    }
                  ?>
              </p>
              </div>

              <div class="item">
                <br><br><br>
                   <p class="message" style="font-size:12px">
                    <i>*If you want to reply this topic, please enter comment below and post.</i>
               </p>
              <div class="col-md-1"></div>
               <!--  <div class="col-md-10">
                  <textarea class="form-control comment-text" comment-id-textarea="<?php echo $row->id_forum; ?>" rows="5" name="discussion_description" placeholder="Enter comment ..." required></textarea>
                </div> -->
              </div>

             <!--  <div class="box-footer">
                 <div class="col-md-1"></div>
                <button type="submit" value="<?php echo $row->id_forum; ?>" class="btn btn-info comment-btn2">Post</button>
              </div>  -->

            </div>  
          </div>    
        </div>

        <span class="commentbox">
        <?php
        if($comment_data->num_rows() > 0){
          foreach($comment_data->result() as $row){
        ?>
        <div class="box box-solid">
          <div class="box-header-forum with-border">
            <i class="fa fa-time"></i>
            <h3 class="box-title" style="font-size:15px"><?php echo $row->date_create; ?></h3>
          </div>
          <div class="box-body ">
          <ul class="products-list product-list-in-box">
            <li class="item">
              <div class="product-img">
                <img src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="" class="product-title" style="font-size:13px"><?php echo $row->tutor_name; ?>
                  <span class="product-description" id="date_post" style="font-size:12px">
                    <span class="description" id="date_post">Reply about <abbr class="timeago" title="<?php echo $row->date_create; ?>"><?php echo $row->date_create; ?></abbr></span>
                  </span>
              </div>
            </li>
          </ul>
          </div>
          <div class="box-body chat">
            <div class="item">
              <div class="attachment">
                <p class="message" style="font-size:15px">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"></small>
                    Reply-Post :
                  </a>
                  <?php echo $row->comment ;?>
                </p><br>
              </div><br>

              <div class="attachment">
                <p class="message" style="font-size:15px">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"></small>
                    Reply-Post :
                  </a>
                  <?php echo $row->comment ;?>
                </p><br>
              </div>
              
              <br>
              <div class="attachment">
                <textarea class="form-control comment-text" comment-id-textarea="<?php echo $row->id_forum; ?>" rows="5" name="discussion_description" placeholder="Enter comment ..." required></textarea>
              <br>
              <button type="submit" value="<?php echo $row->id_forum; ?>" class="btn btn-info comment-btn2">Post</button>
              </div><br>
            </div>  
          </div>    
        </div>
        <?php
          }
        }
        ?>
        </span>

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Reply Post
              <small>Your reply post here</small>
            </h3>
          </div>
          <div class="box-body pad">
            <form>
                  <!-- <textarea id="editor1" name="discussion_description" class="form-control comment-text" comment-id-textarea="<?php echo $row->id_forum; ?>" rows="10" cols="80"></textarea> -->
                <textarea class="form-control comment-text" comment-id-textarea="<?php echo $row->id_forum; ?>" rows="5" name="discussion_description" placeholder="Enter comment ..." required></textarea>
            </form>
            <br>
            <button type="submit" value="<?php echo $row->id_forum; ?>" class="btn btn-info comment-btn2">Post</button>
          </div>
        </div>

    </div>
    <!-- END COL -->


     <div class="col-md-3">
        <br>
        <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="panel-title">Another Question</h3>
        </div>
 
        <div class="box-body">
        
        </div>
      </div>
      </div>


    </div>
</div>
