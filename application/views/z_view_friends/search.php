<?php

  if($getusers->num_rows() > 0){
     foreach($getusers->result() as $row){


?>

  <div id="user"><img src="<?php echo $row->tutor_photo ?>" id="pic" />$nbsp;<span><?php echo $row->tutor_name ?></span></div>


<?php
    
      }
    }

?>