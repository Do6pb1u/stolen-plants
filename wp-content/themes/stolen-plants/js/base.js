;
(function(window, $) {

  /* Stick up menus
  ========================================================*/
  ;
  (function () {
    var o = $('html');
    var menu = $('#stuck');

    if (o.hasClass('desktop') && menu.length) {

      $(window).load(function () {
        menu.scrollFix({
          style: false
        });
      });
    }
  })();

  /* Top-Links Active
  ========================================================*/
  ;
  (function () {
    $(document).ready(function(){
      var pgurl = window.location.href;
      $("#top-links a").each(function(){
        if($(this).attr("href") == pgurl || $(this).attr("href") == '' ) {
          $(this).addClass("active");
        }
      });
    });
  })();

  /* Unveil
  ========================================================*/
  ;
  (function () {
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
  })();


  /* FancyBox
  ========================================================*/
  ;
  (function() {
    var o = $('.quickview');
    var o2 = $('#default_gallery');

    if (o.length) {
      $(document).ready(function () {
        o.fancybox({
          maxWidth: 800,
          maxHeight: 600,
          fitToView: false,
          width: '70%',
          height: '70%',
          autoSize: false,
          closeClick: false,
          openEffect: 'elastic',
          closeEffect: 'elastic',
          speedIn: 600,
          speedOut: 600
        });
      });
    }
  })();

  /* Superfish menus
  ========================================================*/
  ;
  (function () {
    $(window).load(function () {
      $('#tm_menu .menu').superfish();
    });
  })();

  /* Toggle
   ========================================================*/
  ;
  (function () {
      var o = $('.toggle');
      $(document).ready(function () {
          $('.toggle').click(function (e) {
              e.preventDefault();
        
          var tmp = $(this);
          o.each(function () {
            if ($(this).hasClass('active') && !$(this).is(tmp)) {
              $(this).parent().find('.toggle_cont').animate({marginTop:15, opacity:0},{duration:300, done:function(){$(this).css({'display':'none'});}});
              $(this).removeClass('active');
            }
          });
          
          $(this).toggleClass('active');
          
          if ($(this).hasClass('active') && !($('.rd-mobilemenu').hasClass('active'))) {
            $(this).parent().find('.toggle_cont').css({'display':'block'}).animate({marginTop:0, opacity:1},300);
          } else {
            $(this).parent().find('.toggle_cont').animate({marginTop:15, opacity:0},{duration:300, done:function(){$(this).css({'display':'none'});}}); 
          };
          
          if ($('.rd-mobilemenu').hasClass('active') && $(this).is('.box-cart .toggle')) {
            $('.rd-mobilemenu').removeClass('active');
          };
        
          });
      
      
          $(document).on('click touchstart', function (e) {
              var container = $(".toggle-wrap");
            if (!container.is(e.target) && container.has(e.target).length === 0 && container.find('.toggle').hasClass('active')) {
                container.find('.active').toggleClass('active').parent().find('.toggle_cont').animate({marginTop:15, opacity:0},{duration:300, done:function(){$(this).css({'display':'none'});}});
              }
          })
      });
  })();

  /* Dropdown Toggle
 ========================================================*/
  ;
  (function ($) {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (width < 768) {
      var o = $('.dropdown-toggle');
      $(document).ready(function () {
        $('.dropdown-toggle').click(function (e) {
          e.preventDefault();
          $(this).parent().find('.dropdown-menu').slideToggle();
          $(this).parent().find('.dropdown-toggle').toggleClass('sfHover');
        }); 

        $('.rd-mobilemenu_ul .rd-with-ul[href="#"]').click(function() {
          return false;
        });
        
      });
    } else {
      var o = $('.dropdown-toggle');
      $(document).ready(function () {
        $('.btn-group').mouseenter(function () {        
          $(this).parent().find('.dropdown-menu').stop(true,true).css({'display':'block'}).animate({marginTop:0, opacity:1},300);
          $(this).parent().find('.dropdown-toggle').addClass('sfHover');
        });
        $('.btn-group').mouseleave(function () {
          $(this).parent().find('.dropdown-menu').animate({marginTop:15, opacity:0},{duration:300, done:function(){$(this).css({'display':'none'});}});
          $(this).parent().find('.sfHover').removeClass('sfHover');
        });     
      });
    }
  })(jQuery);

  /* Radio Replacement
  ========================================================*/
  ;
  (function () {
    var o = $('.radio');

    if (o.length) {
      $(window).load(function () {
        var input;
        var arrVal = [];
        o.each(function (i) {
          input = $(this).find('input[type="radio"]');
          if ($.inArray(input.attr('name') + input.attr('value'), arrVal) == -1) {
            input.attr('id', input.attr('name') + input.attr('value'))
            input.insertBefore($(this).find('label').attr('for', input.attr('name') + input.attr('value')));
            arrVal.push(input.attr('name') + input.attr('value'))
          } else {
            input.attr('id', input.attr('name') + input.attr('value') + i.toString());
            input.insertBefore($(this).find('label').attr('for', input.attr('name') + input.attr('value') + i.toString()));
            arrVal.push(input.attr('name') + input.attr('value') + i.toString());
          }
        });
      });
    }
    var o2 = $('label.radio-inline');
    if (o2.length) {
      $(document).ready(function () {
        var input;
        o2.each(function () {
          input = $(this).find('input[type="radio"]');
          input.attr('id', input.attr('name') + input.attr('value'))
          input.insertBefore($(this).attr('for', input.attr('name') + input.attr('value')));
        });
      });
    }
  })();

  /* Accordion fix
  ========================================================*/
  ;
  (function () {
    var o = $('#accordion');
    if (o.length) {
      $(window).load(function () {
        $('body').delegate('.accordion-toggle', 'click', replaceForm);
        $('.accordion-toggle').trigger('click');
      });
    }
  })();

  /* Checkbox Replacement
  ========================================================*/
  ;
  (function () {
    var o = $('.checkbox');
    if (o.length) {
      $(document).ready(function () {
        var input;
        var arrVal = [];
        o.each(function (i) {
          input = $(this).find('input[type="checkbox"]');
          if ($.inArray(input.attr('name') + input.attr('value'), arrVal) == -1) {
            input.attr('id', input.attr('name') + input.attr('value'))
            input.insertBefore($(this).find('label').attr('for', input.attr('name') + input.attr('value')));
            arrVal.push(input.attr('name') + input.attr('value'))
          } else {
            input.attr('id', input.attr('name') + input.attr('value') + input.attr('value') + i.toString())
            input.insertBefore($(this).find('label').attr('for', input.attr('name') + input.attr('value') + input.attr('value') + i.toString()));
            arrVal.push(input.attr('name') + input.attr('value') + i.toString());
          }
        });
      });
    }

    var o2 = $('input[name=\'agree\'][type=\'checkbox\']');
    if (o2.length) {
      $(document).ready(function () {
        o2.attr('id', o2.attr('name') + o2.attr('value'));
        o2.parent().append('<label for="' + o2.attr('name') + o2.attr('value') + '"></label>');
        $('label[for="' + o2.attr('name') + o2.attr('value') + '"]').insertAfter(o2);

      });
    }

    var o3 = $('.checkbox-inline');
    if (o3.length) {
      var input;
      o3.each(function (i) {
        input = $(this).find('input[type="checkbox"]');
        input.attr('id', input.attr('name') + input.attr('value'))
        input.insertBefore($(this).attr('for', input.attr('name') + input.attr('value')));

      });
    }
  })();

  /* Select Replacement
  ========================================================*/
  ;
  (function () {
    var o = $('select');
    if (o.length) {
      $(document).ready(function () {
        o.removeClass('form-control');
        o.selectbox({
          effect: "slide",
          speed: 400
        });
        var zone = $('select[name=\'zone_id\']');
        if (zone.length) {
          setTimeout(function () {
            zone.selectbox('detach');
            zone.selectbox('attach');
          }, 900);
          $('select[name=\'country_id\']').on('change', function () {
            setTimeout(function () {
              zone.selectbox('detach');
              zone.selectbox('attach');
            }, 300);
          });
        }

      });
    }
  })();

  /* Box Carousel
  ========================================================*/
  ;
  (function () {
    var o = $('.box-carousel');
    if (o.length > 0) {
      $(document).ready(function () {
        $.each(o, function () {
          if ($(this).parents('aside').length == 0) {
            o.owlCarousel({
                          // Most important owl features
                          items: 4,
                          itemsCustom: false,
                          itemsDesktop: [1199, 4],
                          itemsDesktopSmall: [991, 3],
                          itemsTablet: [767, 2],
                          itemsTabletSmall: false,
                          itemsMobile: [479, 1],

                          // Navigation
                          pagination: false,
                          navigation: true,
                          navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>']
                       });
          }
        });
      });
    }
  })();


})(window, jQuery);