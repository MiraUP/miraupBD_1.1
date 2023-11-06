$(document).ready(function(){

  function FavoriteBtnAction() {
    $(document).on('change', '.favorite-post [name="favorite"]', function() {
    
      var idPost = $(this).data("id");

      if($(this).is(':checked')) {
        var favPost = 'fav';                
      } else {
        var favPost = 'nofav';
      }

      jQuery.ajax({
        url: '/wp-admin/admin-ajax.php',
        method: "POST",
          data: {
            'action':'favpost',
            'idPost': idPost,
            'favPost' : favPost
          },
          success:function(data) {
            console.log(data);
            console.log("success!");
          },
          error: function(errorThrown){
            console.log(errorThrown);
            console.log("fail");
          }
      });
    });
  }

  FavoriteBtnAction();
});
