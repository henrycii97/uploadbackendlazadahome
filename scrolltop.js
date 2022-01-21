$(document).ready(function () {
    //   jq for hover
      $(".icon-scroll-flashdeal").hover(function() {
        $(".flashdeal-csr").addClass("trans-x");
      }, function() {
        $(".flashdeal-csr").removeClass("trans-x");
      });
      $(".icon-scroll-popular-search").hover(function() {
        $(".search-csr").addClass("trans-x");
      }, function() {
        $(".search-csr").removeClass("trans-x");
      });
      $(".icon-scroll-lazmall").hover(function() {
        $(".lazmall-csr").addClass("trans-x");
      }, function() {
        $(".lazmall-csr").removeClass("trans-x");
      });
      $(".icon-scroll-menu").hover(function() {
        $(".menu-csr").addClass("trans-x");
      }, function() {
        $(".menu-csr").removeClass("trans-x");
      });
      $(".icon-scroll-user").hover(function() {
        $(".user-scr").addClass("trans-x");
      }, function() {
        $(".user-scr").removeClass("trans-x");
      });
      //   jq for hover
   
     
     
      var ads = $('.ads').offset().top;
         ads = ads + 30;
      var lazmall = $('.lazmall').offset().top;
      
  
      $(window).scroll(function() {
          if ($(window).scrollTop() > 30) {
              $('.header').addClass('fixder-top');
  
          } else {
              $('.header').removeClass('fixder-top');
  
          }
  
      });
      $(window).scroll(function() {
          if ($(window).scrollTop() > ads) {
              $('.scroll-laz').addClass('show-scr');
  
          } else {
              $('.scroll-laz').removeClass('show-scr');
  
          }
  
      });
      $(window).scroll(function() {
          if ($(window).scrollTop() > lazmall) {
              $('.icon-scroll-top').addClass('show-scr-top');
  
          } else {
              $('.icon-scroll-top').removeClass('show-scr-top');
  
          }
  
      });
      $(window).scroll(function() {
          if ($(window).scrollTop() > ads) {
              $('.scroll-laz').addClass('show-scr');
  
          } else {
              $('.scroll-laz').removeClass('show-scr');
  
          }
  
      });
      var popularsearch = $('.popular-search').offset().top ;
      $(window).scroll(function() {
          if ($(window).scrollTop() > popularsearch) {
              $('.category-laz').addClass('add');
              $('.card-content').addClass('add');
              $('.text-flash').addClass('add');
              $('.img-flash img').addClass('add');
              $('.card-content a .laz-fl').addClass('add');
              $('.categorys-title').addClass('add');
              $('.navbar').addClass('add');
              $('.header-content').hide();
  
          } else {
            $('.category-laz').removeClass('add');
            $('.card-content').removeClass('add');
            $('.text-flash').removeClass('add');
            $('.img-flash img').removeClass('add');
            $('.card-content a .laz-fl').removeClass('add');
            $('.categorys-title').removeClass('add');
            $('.navbar').removeClass('add');
            $('.header-content').show();
            $('.ads').show();
  
          }
  
      });
      $('.icon-scroll-top').click(function (e) { 
        e.preventDefault();
        console.log('da click')
        $('html,body').animate({ scrollTop: $('body').offset().top }, 300);
       
    });
     var flashdeal = $('.flashdeal').offset().top ;
        flashdeal = flashdeal  - 345;
        $('.icon-scroll-flashdeal').click(function (e) { 
           e.preventDefault();
           console.log('da click')
           $('html,body').animate({ scrollTop:  flashdeal }, 300);
          
       });
       var popularsearch = $('.popular-search').offset().top ;
       popularsearch = popularsearch  - 345;
       $('.icon-scroll-popular-search').click(function (e) { 
           e.preventDefault();
           console.log('da click')
           $('html,body').animate({ scrollTop: popularsearch }, 300);
          
       });
       var lazmall = $('.lazmall').offset().top ;
         lazmall = lazmall - 350;
       $('.icon-scroll-lazmall').click(function (e) { 
           e.preventDefault();
           console.log('da click')
           $('html,body').animate({ scrollTop: lazmall}, 300);
          
       });
       var categorylist = $('.category-list').offset().top ;
       categorylist = categorylist - 355;
       $('.icon-scroll-menu').click(function (e) { 
           e.preventDefault();
           console.log('da click')
           $('html,body').animate({ scrollTop: categorylist}, 300);
          
       });
   
       var exclusivelyforyou = $('.exclusively-for-you').offset().top ;
       exclusivelyforyou = exclusivelyforyou - 355;
       $('.icon-scroll-user').click(function (e) { 
           e.preventDefault();
           console.log('da click')
           $('html,body').animate({ scrollTop: exclusivelyforyou}, 300);
          
       });
   
  
    
});