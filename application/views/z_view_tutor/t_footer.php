			<div class="container">
				<p class="copyright">&copy; 2017. Designed &amp; Crafted by <a href="">Jaka Septiadi</a></p>
			</div>
		</div>
		<!-- END MAIN -->
	</div>
	<!-- END WRAPPER -->


	<!-- Javascript -->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script-->
	<script src="<?php echo base_url('assets/js/jquery/jquery-2.1.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/klorofil.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
	
	<!-- ADMIN LTE SCRIPT -->
	<script src="<?php echo base_url('asset/dist/js/app.min.js'); ?>"></script>
	<script src="<?php echo base_url('asset/dist/js/demo.js'); ?>"></script>
    <script src="<?php echo base_url('asset/plugins/select2/select2.full.min.js'); ?>"></script>
	<script src="<?php echo base_url('asset/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- CK Editor -->
    <!--script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script-->
    <script src="<?php echo base_url('asset/plugins/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?php echo base_url('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>

	<!-- Create Post -->
    <script src="<?php echo base_url('asset/dist/js/module/createcommentstatus.js'); ?>"></script>
    <script src="<?php echo base_url('asset/dist/js/module/createcommentforum.js'); ?>"></script>
	<script src="<?php echo base_url('asset/dist/js/module/createpost.js'); ?>"></script>
    <script src="<?php echo base_url('asset/dist/js/module/createmessage.js'); ?>"></script>
	<script src="<?php echo base_url('asset/dist/js/post.js'); ?>"></script>

	<script src="<?php echo base_url('asset/dist/js/jquery.timeago.js'); ?>"></script>

    <!-- SELECT BOX SUBJECT AREA -->
    <script type="text/javascript">
        function showDiv(elem){
            if(elem.value == 'Math'){
                $('.area').html('<option>Select Subject Area</option><option>Teknik Informatika</option><option>Sistem Informasi</option>')               
                }
            else if(elem.value == 'Language'){
                $('.area').html('<option>Pilih Prodi</option><option >Teknik Elektro</option><option >Teknik Listrik</option>')               
                }  
            else if(elem.value == 'Sastra'){
                $('.area').html('<option>Pilih Prodi</option><option>Indonesia</option><option>Inggris</option>')             
                }
            else if(elem.value == 'Pendidikan'){
                $('.area').html('<option>Pilih Prodi</option><option>Bahasa</option><option>Budaya</option><option>Anak Usia Dini</option>')          
                }
            else{
                $('.area').html('<option>Pilih Prodi</option>')               
                }
        }
    </script>

    <!-- LIKE UNLIKE STATUS -->
    <script type="text/javascript">
        function savelike(status_id){
        $.ajax({
                type: "POST",
                url: "<?php echo site_url('z_status/savelikes');?>",
                data: "Status_id="+status_id,
                success: function (response) {
                 $("#like_"+status_id).html(response+" Likes");
                  
                }
            });
        }
    </script>
    <!-- CKEDITOR -->
    <script>
      $(function () {
        CKEDITOR.replace('editor1');
        $(".textarea").wysihtml5();
      });
    </script>

    <!-- TIME AGO  -->
	<script type="text/javascript">
		 jQuery(document).ready(function() {
		   jQuery("abbr.timeago").timeago();
           //jQuery.timeago(new Date());
		 });
	</script>

	<script>
	  $(function () {
	    //Initialize Select2 Elements
	    $(".select2").select2();

	    
	  });
	</script>

    <!-- JS SEARCH CODE -->
    <script type="text/javascript">
        function ajaxSearch()
        {
            var input_data = $('#search_data').val();
            if (input_data.length === 0){
                $('#suggestions').hide();
            }else{
                var post_data = {
                    'search_data': input_data,
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>z_search/autocomplete/",
                    data: post_data,
                    success: function (data) {
                        // return success
                        if (data.length > 0) {
                            $('#result').show();
                            $('#show_result').addClass('auto_list');
                            $('#show_result').html(data);
                        }
                    }
                });
            }
        }
    </script>
    <!-- end (JS searchcode) -->

    <!-- DELETE STATUS CONFIRM MODAL -->
    <script>
       $(document).ready(function() {
            $('a[data-confirm]').click(function(ev) {
                var href = $(this).attr('href');
                if (!$('#dataConfirmModal').length) {
                    $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Please Confirm</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button><a class="btn btn-primary" id="dataConfirmOK">OK</a></div></div>');
                } 
                $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                $('#dataConfirmOK').attr('href', href);
                $('#dataConfirmModal').modal({show:true});
                return false;
            });
        });
        
    </script>


</body>

</html>
