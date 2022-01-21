$(document).ready(function () {
    setTime = setInterval(function() {
        $(".next").trigger('click');

    }, 2000)
    var  status1 = 'standing-still';

    $('.next').click(function (e) { 
        e.preventDefault();
        if (status1 == 'running') {
            return false;
        }
        status1 = 'running';
        var next = $('.active').next();
        console.log(next);
        var length1 = next.length;
        console.log(length1);
        var  position2 = $('.active_button').index() + 1;
        $('.button-center ul li').removeClass('active_button');
        if (position2 == $('.button-center ul li').length) {
            position2 = 0;
        }
        $('.button-center ul li:nth-child(' + (position2 + 1) + ')').addClass('active_button');
        if (next.length == 0) {
            // code cho phan addClass ban dau
            var position1 = 0;
            $('.active').addClass('disappear-on-the-left').one('webkitAnimationEnd', function(e) {
                $('.disappear-on-the-left').removeClass('disappear-on-the-left');
                position1++;
                if (position1 == 2) {
                    status1 = 'standing-still';
                }
            });
            $('.slides .slide:first-child').addClass('appear-on-the-right').one('webkitAnimationEnd', function(e) {
                // bo active
                $('.active').removeClass('active');
                // cho cai slide sau duoc active
                $('.appear-on-the-right').addClass('active').removeClass('appear-on-the-right');
                position1++;
                if ( position1 == 2) {
                    status1 = 'standing-still';
                }

            });


        } else {
            // code cho phan addClass ban dau
            var position1 = 0;
            $('.active').addClass('disappear-on-the-left').one('webkitAnimationEnd', function(e) {
                $('.disappear-on-the-left').removeClass('disappear-on-the-left');
                position1++;
              
                if ( position1 == 2) {
                    status1 = 'standing-still';
                }
            });
            next.addClass('appear-on-the-right').one('webkitAnimationEnd', function(e) {
                // bo active
                $('.active').removeClass('active');
                // cho cai slide sau duoc active
                $('.appear-on-the-right').addClass('active').removeClass('appear-on-the-right');
                position1++;
                if ( position1 == 2) {
                    status1 = 'standing-still';
                }

            });

        }

        
    });
    $('.button-center ul li').click(function(e) {
        $('.button-center ul li').removeClass('active_button');
        $(this).addClass('active_button');
        // dem nut li
        console.log($(this).index() + 1);
        $('.active').addClass('disappear-on-the-left').one('webkitAnimationEnd', function(e) {
            $('.disappear-on-the-left').removeClass('disappear-on-the-left');
        });
        $('.slides .slide:nth-child(' + ($(this).index() + 1) + ')').addClass('appear-on-the-right').one('webkitAnimationEnd', function(e) {
            // bo active
            $('.active').removeClass('active');
            // cho cai slide sau duoc active
            $('.appear-on-the-right').addClass('active').removeClass('appear-on-the-right');

        });



    });
  
  
});