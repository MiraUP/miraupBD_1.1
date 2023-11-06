$(document).ready(function() {
    var i = 0;
    $(".marquee-item").last().addClass("last");
    $(".marquee-item").each(function() {
          var $this = $(this);
          $this.css("top", i);
          i += $this.height();
          doScroll($this);
    });
});

    function doScroll($ele) {
        var top = parseInt($ele.css("top"));
        if(top < -80) { //bit arbitrary!
            var $lastEle = $(".last");
            $lastEle.removeClass("last");
            $ele.addClass("last");
            var top = (parseInt($lastEle.css("top")) + $lastEle.height());
            $ele.css("top", top);
        }
        $ele.animate({ top: (parseInt(top)-60) }, 2000,'linear', function() {doScroll($(this))});
    }