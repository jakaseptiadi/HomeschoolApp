
var CreateCommentForum = (function(){

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
        this.commentForum();
    };

    module.initSelector = function(){
        comment_text = $(".comment-text");       // Comment text area yang ada di view html
        comment_btn = $(".comment-btn2");    // Button comment yang ada di view html
       
    };

    module.commentForum = function(){
        comment_btn.click(function(e) {
            event.preventDefault();
           // post_box.html('Loading...');
        
            comment_id = $(e.target).val();
            //console.log("comment");
            
            $(".comment-text").each(function(){
               if($(this).attr('comment-id-textarea') == comment_id){

                 comment_value = $(this).val();
                 params = {comment: comment_value, id: comment_id};
                 console.log(params);
                }
            });
            


            //ajax
            $.ajax({
                url: "http://localhost/asli_skripsi/z_forum/add_comment_forum",
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
        console.log(json.data.length);

        $(".commentbox").each(function(){
             // console.log($(this).attr('cb-id'));

              $(this).empty();
              for (var i = 0; i < json.data.length; i++) {
                   $(this).append(`

                    <div class="box box-solid">
                      <div class="box-header-forum with-border">
                        <i class="fa fa-time"></i>
                        <h3 class="box-title" style="font-size:15px">`+json.data[i].date+`</h3>
                      </div>
                      <div class="box-body ">
                      <ul class="products-list product-list-in-box">
                        <li class="item">
                          <div class="product-img">
                            <img src=`+json.data[i].photo+` alt="Product Image">
                          </div>
                          <div class="product-info">
                            <a href="" class="product-title" style="font-size:13px">`+json.data[i].name+`
                              <span class="product-description" id="date_post" style="font-size:12px">
                                <span class="description" id="date_post">Share publicly , <abbr class="timeago" title="<?php echo $row->date_create; ?>">`+json.data[i].date+`</abbr></span>
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
                              Reply :
                            </a>
                            `+json.data[i].comment+`
                          </p><br>
                        </div>
                      </div>  
                    </div>    
                    </div>
                      
                  `);
               };  

               json.data = "0";
           //console.log($(this).attr('id'));
        });


        /*  */  
    };

   
    return module;


})();