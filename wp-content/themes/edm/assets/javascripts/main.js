

var util = {
    Global: {
        init: function () {

            var winsize = $(window).outerHeight();
            var headh = $('.navbar-fixed-top').outerHeight();
            var conth = $('.t-content');
            var footh = $('.l-footer').outerHeight();
            var toth =  winsize - (headh);


        },
    },

    Front: {
      init: function() {
        this.Menu();
        this.Slider();
        this.SmoothScroll();
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

        $('.navbar-default a[href*=#]:not([href=#])').click(function() {

          var toph = $(".navbar-default").outerHeight();

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').stop().animate({
              scrollTop: (target.offset().top) - toph
            }, 800);
            return false;
          }
        }
      });


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



