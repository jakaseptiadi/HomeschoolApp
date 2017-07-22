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
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>Nanti isinya gambar new message</h3>
                <h5>From: help@example.com
                  <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
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

