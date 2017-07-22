<!-- Page Content -->
<div class="container">
  <div class="row">
       
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Message
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Your Friends</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <?php 
                if($fetch_friends->num_rows() > 0){
                  foreach($fetch_friends->result() as $row){
              ?>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="<?php echo base_url();?>z_message/detail_message/<?php echo $row->tutor_id;?>"> <?php echo $row->tutor_name; ?></a></li>
              </ul>
              <?php 
                  }
                }
              ?>
            </div>
          </div>
          
        </div>
        <!-- /.col -->
        <div class="col-md-9"> 

          <?php 
            
          ?>
          <div class="box box-primary direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Name here</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
               
                <?php
                  if($fetch_message->num_rows() > 0){
                    //print_r($fetch_message->result());
                    foreach($fetch_message->result() as $row){
                     //echo $row->id_sender;
                  $param1 = ($_SESSION['type_id']=='idtutor'?'tutor_id':'student_id'); // IF versi pendek
                  $value1 = @($param1=='tutor_id'?$_SESSION['tutor_id']:$_SESSION['student_id']);
                  $value2 = $row->id_sender;


                      if($value1 != $value2){ ?>

                      <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name pull-left">Alexander Pierce</span>
                          <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                        </div>
                        <!-- /.direct-chat-info -->
                        
                        <div class="direct-chat-text">
                          <?php echo $row->message; ?>
                          <?php //echo $row->id_sender; ?>
                        </div>
                        <!-- /.direct-chat-text -->
                      </div>
                   
                    <?php
                      }else{
                    ?>
                      
                      <div class="direct-chat-msg right">
                        <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name pull-right">Sarah Bullock</span>
                          <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                        </div>
                      
                        <div class="direct-chat-text">
                          <?php echo $row->message; ?>
                        </div>
                     </div>
                    <?php
                      }

                    }
                  }
                ?>

              </div>
              <!--/.direct-chat-messages-->


              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-flat">Send</button>
                      </span>
                </div>
              </form>
            </div>
            <!-- /.box-footer-->
          </div>
          <?php
              
          ?>






          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <?php 
                  if($fetch_message->num_rows() > 0){
                    foreach($fetch_message->result() as $row){
                ?>
                <h3>Nanti isinya gambar new message</h3>
                <h5>From: help@example.com
                  <p> <?php echo $row->message; ?> </p>
                <?php
                    }
                  }
                ?>
              </div>
          
              <div class="mailbox-read-message">
                
              </div>
  
            </div>
          </div>
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->
    </section>


  </div>
</div>
<!-- /.container -->

