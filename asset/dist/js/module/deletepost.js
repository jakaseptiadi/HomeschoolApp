
var DeletePost = (function(){

    "user strict";
    
    var module = {};
    var btn_delete = '';
    var invoker = $(e.relatedTarget).data('id');


    //initialitati
    module.init = function(){
        this.initSelector();
        this.deletePosting();
    };

    module.initSelector = function(){
        btn_delete = $("#btnDeletePost");
    };

    module.deletePosting = function(){
        btn_delete.click(function(event) {
            event.preventDefault();
           // post_box.html('Loading...');
           
            //ajax
            $.ajax({
                url: "http://localhost/asli_skripsi/z_status/delete_status_tutor",
                method: 'GET',
                data:  params,
            })
            .done(
                module.deletePost
            )
            .fail(function(){
                
            })
            .always(function(){
                
            }); 

        });
    };

    module.deletePost = function(response){ 

        /*var json = JSON.parse(response);
        console.log(json.data);*/
        alert(response);

    };

    return module;


})();