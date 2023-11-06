jQuery(function($) {

  var category = '';
  var orderby = '';
  var order = '';
  var filter = '';
  var s = '';
  var paged = '';

  var rlp = null;

  /*************
  * Posts List
  **************/
  var postListAjax = function(category, orderby, order, filter, paged, s) {
    rlp = $.ajax({
      url   : wp.ajaxurl,
      type  : 'GET',
      data  : {
        action: 'post_list',
        category: category,
        orderby: orderby,
        order: order,
        filter: filter,
        paged: paged,
        s: s,
      },
      beforeSend : function() {
        console.log('carregando...');
        $('.gallery-main .row').addClass('fadeOut');
        if(rlp != null) {
          rlp.abort();
          rlp = null
        }
      }
    })
    .done( function(data) {
      $('.progress').fadeOut();
      $('.gallery-main .row').html(data).removeClass('fadeOut');
      console.log(s);
    })
    .fail(function() {
      console.log('Algo de errado não deu certo!');
    });
  }



  //Hash Link URL
  $(window).on("hashchange", function() {
    
    var vars = location.hash.split("&");
    for (var i=0;i<vars.length;i++) {
      variable = vars[i].split("=");

      if(variable[0].replace(new RegExp("#"), "") == 'category') { category = variable[1]; }
      if(variable[0] == 'category') { category = variable[1]; }
      if(variable[0] == 'orderby') { orderby = variable[1]; }
      if(variable[0] == 'order') { order = variable[1]; }
      if(variable[0] == 'filter') { filter = variable[1]; }
      if(variable[0].replace(new RegExp("#"), "") == 'paged') { paged = variable[1]; }
      if(variable[0] == 'paged') { paged = variable[1]; }
      if(variable[0] == 's') { s = variable[1]; }
    }

    postListAjax(category, orderby, order, filter, paged, s); 

  }).trigger("hashchange");



  /**********************
  * Actions List Posts
  ***********************/
  //Category
  $(document).on('click', '.search-main-filter .btn-category, .btn-category', function() {    
    $('.progress').fadeIn();
    var CategoryName = $(this).data('category-name');

    var url = window.location.href;
    if (url.indexOf('#') != -1) {
      var vars = location.hash.split("&");
      for (var i=0;i<vars.length;i++) {
        variable = vars[i].split("=");
        var category = 'category='+CategoryName;

        if(variable[0] == 'orderby') { orderby = '&orderby='+variable[1]; }
        if(variable[0] == 'order') { order = '&order='+variable[1]; }
        if(variable[0] == 'filter') { filter = '&filter='+variable[1]; }
        if(variable[0] == 'paged') { paged = ''; }
        if(variable[0] == 's') { s = '&s='+variable[1]; }

        window.location.href = '#' + category + s + orderby + order + filter + paged;

      }
    } else {window.location.href = '#category='+CategoryName;}

  });

  $('.search-main-filter .more').on('click', function() {
    $('.search-main-filter').addClass('btns-disabled');
  });
  $('.close-offcanvas-search').on('click', function() {
    $('.search-main-filter').removeClass('btns-disabled');
  });

  //Result Filter
  $(document).on('click', '.btn-tabs label.filter-button', function() {
    var ValueFilter = $(this).attr('for');
    $('.progress').fadeIn();

    var url = window.location.href;
    if (url.indexOf('#') != -1) {
      var vars = location.hash.split("&");
      for (var i=0;i<vars.length;i++) {
        variable = vars[i].split("=");
        
        filter = "&filter="+ValueFilter;
        if(variable[0].replace(new RegExp("#"), "") == 'category') {category = "category="+variable[1];}
        if(variable[0] == 'orderby') {orderby = "&orderby="+variable[1];}
        if(variable[0] == 'order') {order = "&order="+variable[1];}
        if(variable[0] == 'paged') {paged = "";}
        if(variable[0] == 's') { s = '&s='+variable[1]; }

        window.location.href = '#' + category + s + orderby + order + filter + paged;
      }
    } else {
      window.location.href = '#category=all&filter=' + ValueFilter;
    }
  });

  //Result Order By
  $(document).on('click', '.orderby-filter', function() {
    var ValueOrderby = $(this).data('orderby');
    var ValueOrder = $(this).data('order');
    $('.progress').fadeIn();

    var url = window.location.href;
    if (url.indexOf('#') != -1) {
      var vars = location.hash.split("&");
      for (var i=0;i<vars.length;i++) {
        variable = vars[i].split("=");
        
        var orderby = "&orderby="+ValueOrderby;
        var order = "&order="+ValueOrder;

        if (url.indexOf('DESC') != -1) {
          $('[data-orderby="'+ValueOrderby+'"]').find('.icon').removeClass('icon-arrow-down').addClass(' icon-arrow-up ');
          order = "&order=ASC";
        }
        else {
          $('[data-orderby="'+ValueOrderby+'"]').find('.icon').removeClass('icon-arrow-up').addClass(' icon-arrow-down ');
          order = "&order=DESC";
        }

        if(variable[0].replace(new RegExp("#"), "") == 'category') {category = "category="+variable[1];}
        if(variable[0] == 'filter') {filter = "&filter="+variable[1];}
        if(variable[0] == 'paged') {paged = "";}
        if(variable[0] == 's') { s = '&s='+variable[1]; }

        window.location.href = '#' + category + s + orderby + order + filter + paged;
      }
    } else {
      window.location.href = '#category=all&orderby=' + ValueOrderby+'&order=' + ValueOrder;
    }
  });

  //Result Pagination
  $(document).on('click', '.pagination .paged', function() {
    var ValuePaged = $(this).data('paged');
    $('.progress').fadeIn();

    var url = window.location.href;
    if (url.indexOf('#') != -1) {
      var vars = location.hash.split("&");
      for (var i=0;i<vars.length;i++) {
        variable = vars[i].split("=");
        
        paged = "&paged="+ValuePaged;
        if(variable[0].replace(new RegExp("#"), "") == 'category') {category = "category="+variable[1];}
        if(variable[0] == 'orderby') {orderby = "&orderby="+variable[1];}
        if(variable[0] == 'order') {order = "&order="+variable[1];}
        if(variable[0] == 'filter') {filter = "&filter="+variable[1];}
        if(variable[0] == 's') { s = '&s='+variable[1]; }

        window.location.href = '#' + category + s + orderby + order + filter + paged;
      }
    } else {
      window.location.href = '#category=all&paged=' + ValuePaged;
    }
  });

  //Key Search Form
  $(document).on('keyup', '[name="s"]', function() {
    $('.progress').fadeIn();

    var search = $(this).val();
    if (search.length >= 2) {
      $('.lord-icon-search').addClass('d-none');
      $('.lord-icon-erase').removeClass('d-none');
    
      var url = window.location.href;
      if (url.indexOf('#') != -1) {
        var vars = location.hash.split("&");
        for (var i=0;i<vars.length;i++) {
          variable = vars[i].split("=");
        
          var s = "&s="+search;
          if(variable[0].replace(new RegExp("#"), "") == 'category') {category = "category="+variable[1];}
          if(variable[0] == 'orderby') {orderby = "&orderby="+variable[1];}
          if(variable[0] == 'order') {order = "&order="+variable[1];}
          if(variable[0] == 'filter') {filter = "&filter="+variable[1];}
          if(variable[0] == 'paged') { paged = ''; }
          if(variable[0] == 's') { s = "&s=" + search; }

          window.location.href = '#' + category + s + orderby + order + filter + paged;
        }
      } else {
        window.location.href = '#&s=' + search;
      }

    }
    if (search.length < 1) {
      $('.lord-icon-search').removeClass('d-none');
      $('.lord-icon-erase').addClass('d-none');
      
        var vars = location.hash.split("&");
        for (var i=0;i<vars.length;i++) {
          variable = vars[i].split("=");
        
          var s = "&s="+search;
          if(variable[0].replace(new RegExp("#"), "") == 'category') {category = "category="+variable[1];}
          if(variable[0] == 'orderby') {orderby = "&orderby="+variable[1];}
          if(variable[0] == 'order') {order = "&order="+variable[1];}
          if(variable[0] == 'filter') {filter = "&filter="+variable[1];}
          if(variable[0] == 'paged') { paged = ''; }
          if(variable[0] == 's') { s = "&s="; }

          window.location.href = '#' + category + s + orderby + order + filter + paged;
        }
    }
  });

  //Erase Search Form
  $(document).on('click', '.lord-icon-erase', function() {
    $('[name="s"]').val('');
    $(this).addClass('d-none');
    $('.lord-icon-search').removeClass('d-none');
    $('.progress').fadeIn();
    
    var vars = location.hash.split("&");
    for (var i=0;i<vars.length;i++) {
      variable = vars[i].split("=");
    
      if(variable[0].replace(new RegExp("#"), "") == 'category') {category = "category="+variable[1];}
      if(variable[0] == 'orderby') {orderby = "&orderby="+variable[1];}
      if(variable[0] == 'order') {order = "&order="+variable[1];}
      if(variable[0] == 'filter') {filter = "&filter="+variable[1];}
      if(variable[0] == 'paged') { paged = ''; }
      if(variable[0] == 's') { s = "&s="; }

      window.location.href = '#' + category + s + orderby + order + filter + paged;
    }
  });

  //Replace Terms
  String.prototype.allReplace = function(obj) {
    var retStr = this;
    for (var x in obj) {
      retStr = retStr.replace(new RegExp(x, 'g'), obj[x]);
    }
    return retStr;
  };

  //Get Term Search
  $(document).ready(function() {
    var url = window.location.href;
    if (url.indexOf('#') != -1) {
      var vars = location.hash.split("&");
      for (var i=0;i<vars.length;i++) {
        variable = vars[i].split("=");

        if(variable[0] == 's') { 
          var search = variable[1].allReplace({
            '%20'     : ' ',
            '%C3%A7'  : 'ç',
            '%C3%87'  : 'Ç',
            '%C3%A1'  : 'á',
            '%C3%A0'  : 'à',
            '%C3%A2'  : 'â',
            '%C3%A3'  : 'ã',
            '%C3%81'  : 'Á',
            '%C3%80'  : 'À',
            '%C3%82'  : 'Â',
            '%C3%83'  : 'Ã',
            '%C3%A9'  : 'é',
            '%C3%A8'  : 'è',
            '%C3%AA'  : 'ê',
            '%C3%89'  : 'É',
            '%C3%88'  : 'È',
            '%C3%8A'  : 'Ê',
            '%C3%AD'  : 'í',
            '%C3%AC'  : 'ì',
            '%C3%AE'  : 'î',
            '%C3%8D'  : 'Í',
            '%C3%8C'  : 'Ì',
            '%C3%8E'  : 'Î',
            '%C3%B3'  : 'ó',
            '%C3%B2'  : 'ò',
            '%C3%B4'  : 'ô',
            '%C3%B5'  : 'õ',
            '%C3%93'  : 'Ó',
            '%C3%92'  : 'Ò',
            '%C3%94'  : 'Ô',
            '%C3%95'  : 'Õ',
            '%C3%BA'  : 'ú',
            '%C3%B9'  : 'ù',
            '%C3%BB'  : 'û',
            '%C3%9A'  : 'Ú',
            '%C3%99'  : 'Ù',
            '%C3%9B'  : 'Û',
          });
          $('[name="s"]').val(search);
        }
      }
    }
  });

  /*************
  * Favorite Posts
  **************/
  var favoritePostAjax = function() {
    $.ajax({
      url   : wp.ajaxurl,
      type  : 'GET',
      data  : {
        action: 'favorite_post'
      },
      beforeSend : function() {
        console.log('carregando...');
      }
    })
    .done( function(data) {
      console.log(data);
    })
    .fail(function() {
      console.log('Algo de errado não deu certo!');
    });    
  }

  /**********************
  * Actions Buttons
  ***********************/
  $(document).on('change', '.favorite-post', function() {
    favoritePostAjax();
  });
});
