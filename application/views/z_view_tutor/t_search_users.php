

<div class="container">
	<div class="row">
		<br>
		<div class="col-md-3"></div>

		<div class="col-md-6">
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">All Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        	<?php
			if(count($results)==0){
				echo "<h3>Hasil pencarian tidak ditemukan!</h3>";
			}

			foreach($results as $row) { ?>
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo $row->photo_profile ;?>" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title"> <?php echo $row->tutor_name ;?>
                        <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                  </div>
                </li>
              </ul>
             <?php } ?>
            </div>
            <div class="box-footer text-center">
              <div style="text-align:center; margin:10px;"><?php echo "Find <b>".$total_cari."</b> users<br/>".$links; ?></div>
            </div>
            <!-- /.box-footer -->
        </div>
    	</div>

		

		
	</div>
</div>