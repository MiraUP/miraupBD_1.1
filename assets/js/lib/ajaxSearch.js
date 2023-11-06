$(document).ready(function(){

  //Input Search
  $('[name="s"]').keyup(function() {
    var query           = $(this).val(),
        content         = $('#gallery-list'),
        filterSearch    = $('input[name="filterSearch"]:checked').val(),
        galleryView     = $('input[name="galleryView"]:checked').val(),
        searchCategory  = $('input[name="searchCategory[]"]:checked'),
        urlAjax       = $(this).data('url') + '/wp-admin/admin-ajax.php';
    
    $('.pagination').fadeOut();

    var category = [];
    $.each(searchCategory, function(){  
      category.push($(this).val());
    });
       
    jQuery.ajax({
      url: urlAjax,
      method: "POST",
      data: {
        'action'        :'load_search_results',
        'query'         : query,
        'filterSearch'  : filterSearch,
        'galleryView'   : galleryView,
        'searchCategory': category,
      },
      beforeSend: function() {
        content.html( '<p><lord-icon src="https://cdn.lordicon.com/ifclergl.json" trigger="loop" colors="primary:#f0f1f5,secondary:#f0f1f5" style="width:50px;height:50px"> </lord-icon> Carregando...</p>' );
      },
      success:function(data) {
        console.log('success!');
        //console.log(filterSearchValue);
        content.html( data );
        $('.btn-top').fadeIn();
      },
      error: function(errorThrown){
        console.log(errorThrown);
        console.log("fail");
      }
    });
  });


  //Button Category
  $('input[name="filterSearch"], input[name="galleryView"], input[name="searchCategory[]"]').on( 'change', function(e) {
    var query           = $('[name="s"]').val(),
        content         = $('#gallery-list'),
        filterSearch    = $('input[name="filterSearch"]:checked').val(),
        galleryView     = $('input[name="galleryView"]:checked').val(),
        searchCategory  = $("input[name='searchCategory[]']:checked");

    $('.pagination, .favorite-post').fadeOut();

    var category = [];
    $.each(searchCategory, function(){  
      category.push($(this).val());
    });
    
    jQuery.ajax({
      url: '/wp-admin/admin-ajax.php',
      method: "POST",
      data: {
        'action'        :'load_search_results',
        'query'         : query,
        'filterSearch'  : filterSearch,
        'galleryView'   : galleryView,
        'searchCategory': category,
      },

      beforeSend: function() {
        content.html( '<p><lord-icon src="https://cdn.lordicon.com/ifclergl.json" trigger="loop" colors="primary:#f0f1f5,secondary:#f0f1f5" style="width:50px;height:50px"> </lord-icon> Carregando...</p>' );
      },
      success:function(data) {
        console.log("success!");
        //console.log(filterSearch);
        content.html( data );
        $('.btn-top').fadeIn();
      },
      error: function(errorThrown){
        console.log(errorThrown);
        console.log("fail");
      }
    });
  });

  $('.search-main-filter .more').on('click', function() {
    $('.search-main-filter').addClass('btns-disabled');
  });
  $('.close-offcanvas-search').on('click', function() {
    $('.search-main-filter').removeClass('btns-disabled');
  });

});