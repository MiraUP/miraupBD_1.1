
$(document).ready(function(){

  btnActionIcon();
  
  $('[name="searchIcon"]').keyup(function() {
    var query         = $(this).val(),
        slug          = $('[name="slug"]').val(),
        content       = $('.content-items-icon .list-icons .col'),
        btnCategory   = $('input[name="btn-category"]:checked').val(),
        btnVersion    = $('input[name="btn-ver"]:checked').val(),
        urlAjax       = $(this).data('url') + '/wp-admin/admin-ajax.php';

    jQuery.ajax({
      url: urlAjax,
      method: "POST",
      data: {
        'action':'search_icon',
        'query': query,
        'slug': slug,
        'category' : btnCategory,
        'version' : btnVersion,
      },
      beforeSend: function() {
        content.html( '<p class="loading"><lord-icon src="https://cdn.lordicon.com/ifclergl.json" trigger="loop" colors="primary:#f0f1f5,secondary:#f0f1f5" style="width:50px;height:50px"> </lord-icon> Carregando...</p>' );
      },
      success:function(data) {
        console.log("success!");
        content.html( data );
      },
      error: function(errorThrown){
        console.log(errorThrown);
        console.log("fail");
      }
    });
  });

  $('input[name="btn-category"], input[name="btn-ver"]').on('change', function() {

    var _this         = $('[name="searchIcon"]'), 
        query         = _this.val(),
        slug          = $('[name="slug"]').val(),
        content       = $('.content-items-icon .list-icons .col'),
        btnCategory   = $('input[name="btn-category"]:checked').val(),
        btnVersion    = $('input[name="btn-ver"]:checked').val();
        urlAjax       = $(this).data('url') + '/wp-admin/admin-ajax.php';
    
    if (btnCategory == 'all') {$('.title-icons.category-name').html('Todas as categorias');}
    else {$('.title-icons.category-name').html(btnCategory);}

    jQuery.ajax({
      url: urlAjax,
      method: "POST",
      data: {
        'action':'search_icon',
        'query': query,
        'slug': slug,
        'category' : btnCategory,
        'version' : btnVersion,
      },
      beforeSend: function() {
        content.html( '<p class="loading"><lord-icon src="https://cdn.lordicon.com/ifclergl.json" trigger="loop" colors="primary:#f0f1f5,secondary:#f0f1f5" style="width:50px;height:50px"> </lord-icon> Carregando...</p>' );
      },
      success:function(data) {
        console.log("success!");
        content.html( data );
      },
      error: function(errorThrown){
        console.log(errorThrown);
        console.log("fail");
      }
    });
  });
});