
var CreatePost = (function(){

    "user strict";
    
    var module = {};
    var title  = '';
    var description = '';
    var file = '';
    var post_btn = '';
    var params = '';

    var title_value = '';
    var description_value = '';
    var file_value = '';

    var post_box = '';


    //initialitati
    module.init = function(){
        this.initSelector();
        this.submitPosting();
    };

    module.initSelector = function(){
        post_btn = $("#id_post_btn");
        title = $("#status_title");
        description = $("#status_description");
        file = $("#file_post");
        post_box = $("#post_box");
    };

    module.submitPosting = function(){
        post_btn.click(function(event) {
            event.preventDefault();
            post_box.html('Loading...');
           
            title_value = title.val();
            description_value = description.val();
            file_value = file.val();

            params = {title: title_value, description: description_value};

            /*jQuery.ajax({
            type: "POST",
            url: "<?php echo site_url('z_tutor/add_status'); ?>",
            dataType: 'json', 
            data: {title: title_value, description: description_value},
            success: function(res) {

              if (res){
                // Show Entered Value
                jQuery("div#box").show();
                jQuery("div#value_title").html(res.status_title);
                jQuery("div#value_description").html(res.status_description);
              }
            }

            });*/

            //ajax
            $.ajax({
                url: "http://localhost/asli_skripsi/z_status/add_status_tutor",
                method: 'POST',
                data:  params,
            })
            .done(
                module.successPost
            )
            .fail(function(){
                
            })
            .always(function(){
                
            }); 

        });
    };

    module.successPost = function(response){ // response = yg dihasilkan dari ajax       
        //var json = JSON.parse(response);
        //console.log(response);

          var json = JSON.parse(response);
        console.log(json.data);

        post_box.empty();
        for (var i = 0; i < json.data.length; i++) {
             post_box.append(`


                <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="user image">
                        <span class="username">
                          <a href="#">`+json.data[i].name+`</a>
                          <a href="#deletepostmodal" data-toggle="modal" data-target="#deletepostmodal" data-id="<?php echo $row->id_status;?>" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                        <span class="description" id="date_post"><time class="timeago" title="<?php echo $row->date_create; ?>"><?php echo $row->date_create; ?></time></span>
                      </div>
                    </div>
             
                    <div class="box-body">
                      <p>
                          `+json.data[i].title+`<br/>
                          `+json.data[i].description+`
                      </p>
                      <!--button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button-->
                      <span class="pull-right text-muted">0 comment</span>
                    </div>
                    <div class="box-footer">
                        <img class="img-responsive img-circle img-sm" src="<?php echo base_url($_SESSION['tutor_photo']); ?>" alt="user image">
                        <div class="img-push">
                          <input type="text" class="form-control input-sm" placeholder="Type to post comment"><br>
                          <button type="submit" id="comment_status_btn" class="btn btn-info pull-right">Comment</button>
                        </div>
                    </div>
        
                </div>




                
            `);
         };      
    };

    return module;


})();