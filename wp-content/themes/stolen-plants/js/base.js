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

  /* Unveil
  ========================================================*/
  var o = $('.lazy img');

  if (o.length > 0) {
    $(document).ready(function () {
      $(o).unveil(0, function () {
        $(this).load(function () {
          $(this).parent().addClass("lazy-loaded");
        });
      });
    });

    $(window).load(function () {
      $(window).trigger('lookup.unveil');
      if ($('.nav-tabs').length) {
        $('.nav-tabs').find('a[data-toggle="tab"]').click(function () {
          setTimeout(function () {
            $(window).trigger('lookup.unveil');
          }, 400);
        });
      }
    });

  }


})(window, jQuery);