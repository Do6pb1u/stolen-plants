;
(function(window, $) {

  /* Stick up menus
  ========================================================*/
  var o = $('html');
  var menu = $('#stuck');

  if (o.hasClass('desktop') && menu.length) {

    $(window).load(function () {
      menu.scrollFix({
        style: false
      });
    });
  }

  /* Top-Links Active
  ========================================================*/
  $(document).ready(function(){
    var pgurl = window.location.href;
    $("#top-links a").each(function(){
      if($(this).attr("href") == pgurl || $(this).attr("href") == '' ) {
        $(this).addClass("active");
      }
    });
  });


})(window, jQuery);