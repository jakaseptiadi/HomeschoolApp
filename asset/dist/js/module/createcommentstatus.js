var id = '';

$('.btn.btn-info.pull-right.comment').click(function () {
    id = $(this).attr('value');
});

var CreateCommentStatus = (function(){

    "user strict";
    
    var module = {};

    var comment = '';
    var comment_btn = '';
    var params = '';
    var id_status_value = '';

    var comment_value = '';
    var comment_text = '';
    var comment_id = '';

    var comment_box = '';

 


    //initialitati
    module.init = function(){
        this.initSelector();
        this.commentStatus();
    };

    module.initSelector = function(){
        comment_btn = $(".comment-btn");
        comment_text = $(".comment");
       
    };

    module.commentStatus = function(){
        comment_btn.click(function(e) {
            event.preventDefault();
           // post_box.html('Loading...');
        
            comment_id = $(e.target).val();
            //console.log("comment");
            
            $(".comment").each(function(){
               if($(this).attr('comment-id') == comment_id){

                 comment_value = $(this).val();
                 params = {comment: comment_value, id: comment_id};
                 console.log(params);
                }
            });
            
         

            //ajax
            $.ajax({
                url: "http://localhost/asli_skripsi/z_status/add_comment_status",
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
        comment_text.val("");
  

       var json = JSON.parse(response);
        //console.log(json);
        //console.log(json.data.length);

        $(".cb").each(function(){
             console.log($(this).attr('cb-id'));
            if($(this).attr('cb-id') == comment_id){
                console.log($(this).attr('id'));

                $(this).empty();
                for (var i = 0; i < json.data.length; i++) {
                     $(this).append(`

                         <div class="box-footer box-comments">
                          <div class="box-comment">
                            <img class="img-circle img-sm" src=`+json.data[i].photo+` alt="User Image">
                            <div class="comment-text">
                                  <span class="username">
                                    `+json.data[i].name+`
                                    <span class="text-muted pull-right" id="date_post"><abbr class="timeago" title="<?php echo $row->date_create; ?>"> `+json.data[i].date+` </abbr></span>
                                  </span>
                             `+json.data[i].comment+`
                            </div>
                          </div>
                        </div>
                        
                    `);
                 };  

                 json.data = "0";

            }
           //console.log($(this).attr('id'));
        });


        /*  */  
    };

   
    return module;


})();