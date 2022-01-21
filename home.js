$(document).ready(function () {
    $('.icon').click(function (e) { 
        e.preventDefault();
        $('.ads').hide();
    });
    
    $('li.app').click(function (e) { 
        e.preventDefault();
      
     $('.content-app-all').toggleClass('visible');
     $('.customer-care.mp').removeClass('visible');
     $('.content-order-check').removeClass('visible');  
     $('.content-link-language').removeClass('visible'); 
    
    });

    $('li.customer-carer').click(function (e) { 
        e.preventDefault();
      
     $('.customer-care.mp').toggleClass('visible');
     $('.content-app-all').removeClass('visible');
     $('.content-order-check').removeClass('visible');
     $('.content-link-language').removeClass('visible'); 
        
    });
    $('li.order-check').click(function (e) { 
        e.preventDefault();
      
     $('.content-order-check').toggleClass('visible');
     $('.customer-care.mp').removeClass('visible');
     $('.content-app-all').removeClass('visible');
     $('.content-link-language').removeClass('visible'); 
        
    });
    $('li.language').click(function (e) { 
        e.preventDefault();
      
     $('.content-link-language').toggleClass('visible');
     $('.content-order-check').removeClass('visible');
     $('.customer-care.mp').removeClass('visible');
     $('.content-app-all').removeClass('visible');
        
    });
});