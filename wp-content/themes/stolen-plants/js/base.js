;
(function(window, $) {

  
  $(function() {
    var o = $('html');
    var menu = $('#stuck');

    if (o.hasClass('desktop') && menu.length) {

      $(window).load(function () {
        menu.scrollFix({
          style: false
        });
      });
    }  
  });
  

})(window, jQuery);