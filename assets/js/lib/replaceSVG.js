/**
     * Replace all SVG images with inline SVG
     */

 $(document).ready(function() {

  $('.svg-inline').each(function() {
     
      var $img = $(this),
          imgURL      = $img.attr('src'),
          imgID       = $img.attr('id'),
          imgCLASS    = $img.attr('class');
    
      $.get(imgURL, function(data) {

          // Get the SVG tag, ignore the rest
          var $svg = $(data).find('svg');

          // Add replaced image's ID to the new SVG
          if(typeof imgID == 'undefined') {
            $svg = $svg.removeAttr('id');
          } else {
            $svg = $svg.attr('id', imgID);
          }
          if(typeof imgCLASS !== 'undefined') {
            $svg = $svg.attr('class', imgCLASS);
          }
  
          $svg = $svg.removeAttr('xmlns');
          $svg = $svg.removeAttr('xmlns:xlink');
          //$svg = $svg.find(".st0").addClass("fill-color01").removeClass("st0");
          //$svg = $svg.find(".st1").addClass("fill-color02").removeClass("st1");
          $img.replaceWith($svg);
      }, 'xml');
  });
});