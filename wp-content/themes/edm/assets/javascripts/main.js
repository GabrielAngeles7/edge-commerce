

var util = {
    Global: {
        init: function () {

            // var winsize = $(window).outerHeight();
            // var headh = $('.navbar-fixed-top').outerHeight();
            var conth = $('.t-content');
            var footh = $('.l-footer').outerHeight();
            // var toth =  winsize - (headh);


        },
    },

    Front: {
      init: function() {
        this.Menu();
        this.Slider();
        this.SmoothScroll();
        this.navFixTop();
        this.Forms();
      },


      Forms: function(){
          $('.form-l1 .form-group label').click(function(){
                $(this).parent('.form-group').find('input').focus();
                $(this).parent('.form-group').find('select').focus();
                $(this).parent('.form-group').find('textarea').focus();
          });
      },
      Menu: function(){
         $('.t-content').click(function(){
              $('.navbar-toggle').removeClass('active');
              $('.section-aside').removeClass('toggle');
              $('.l-wrapper').removeClass('toggle');
          });

          $('.navbar-toggle').click(function(){
            $(this).toggleClass('active');
            $(".section-aside").toggleClass('toggle');
            $(".l-wrapper").toggleClass('toggle');
          });
      
      },

      SmoothScroll: function(){

        $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav:after').outerHeight()  + 40,
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    // console.log('begin scrolling');
                },
                onComplete: function() {
                    //console.log('done scrolling');
                }

            });


      }, 

      navFixTop: function(){

           // var docElem = document.documentElement,
           //          header = document.querySelector('.navbar-top'),
           //          didScroll = false,
           //          changeHeaderOnBody = $('.section-banner').height();


           //      function init() {
           //          window.addEventListener('scroll', function() {
           //              if (!didScroll) {
           //                  didScroll = true;
           //                  setTimeout(scrollPage, 100);
           //              }
           //          }, false);
           //      }

           //      function scrollPage() {

           //          var sy = scrollY();
           //          if (sy >= changeHeaderOnBody) {
           //              classie.add(header, 'navbar-fixed-top');
           //          } else {
           //             classie.remove(header, 'navbar-fixed-top');
           //          }

           //          didScroll = false;
           //      }

           //      function scrollY() {
           //          return window.pageYOffset || docElem.scrollTop;
           //      }
                
                

      }, 
      Slider: function(){

        $('.slider-main').flexslider({
          animation: "slide",
          controlNav: false,
          prevText: "",
          nextText: "", 
          start: function(slider){
            $('body').removeClass('loading');
          }
        });

        $('.slider-client').flexslider({
          animation: "slide",
          controlNav: false,
          prevText: "",
          nextText: "", 
          animationLoop: false,
          itemWidth: 182,
          itemMargin: 5,
          start: function(slider){
            $('body').removeClass('loading');
          }
        });
    
    }
    }
};


(function($){

jQuery(document).ready(function() {
    util.Global.init();
    util.Front.init();
});

})(jQuery);



