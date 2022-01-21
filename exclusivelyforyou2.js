$(document).ready(function () {
	
	$('.card-exclusively-for-you a:nth-child(1)').show();
	$('.card-exclusively-for-you a:nth-child(2)').show();
	$('.card-exclusively-for-you a:nth-child(3)').show();
	$('.card-exclusively-for-you a:nth-child(4)').show();
	$('.card-exclusively-for-you a:nth-child(5)').show();
	$('.card-exclusively-for-you a:nth-child(6)').show();
	$('.card-exclusively-for-you a:nth-child(7)').show();
	$('.card-exclusively-for-you a:nth-child(8)').show();
	$('.card-exclusively-for-you a:nth-child(9)').show();
	$('.card-exclusively-for-you a:nth-child(10)').show();
	$('.card-exclusively-for-you a:nth-child(11)').show();
	$('.card-exclusively-for-you a:nth-child(12)').show();
	$('.card-exclusively-for-you a:nth-child(13)').show();
	$('.card-exclusively-for-you a:nth-child(14)').show();
	$('.card-exclusively-for-you a:nth-child(15)').show();
	$('.card-exclusively-for-you a:nth-child(16)').show();
	$('.card-exclusively-for-you a:nth-child(17)').show();
	$('.card-exclusively-for-you a:nth-child(18)').show();
	$('.card-exclusively-for-you a:nth-child(19)').show();
	$('.card-exclusively-for-you a:nth-child(20)').show();
	$('.card-exclusively-for-you a:nth-child(21)').show();
	$('.card-exclusively-for-you a:nth-child(22)').show();
	$('.card-exclusively-for-you a:nth-child(23)').show();
	$('.card-exclusively-for-you a:nth-child(24)').show();


	
   var indexauto =  0 ;
   $('.end-load-more').hide();
	$('.loadMore').click(function (e) { 
		console.log('da click');
		indexauto = indexauto + 24;
		if(indexauto == 192){
			$('.loadMore').hide();
			$('.end-load-more').show();

		}

	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 0) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 1) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 2) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 3) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 4) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 5) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 6) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 7) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 8) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 9) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 10) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 11) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 12) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 13) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 14) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 15) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 16) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 17) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 18) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 19) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 20) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 21) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 22) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 23) + ')').show();
	$('.card-exclusively-for-you a:nth-child(' + (indexauto + 24) + ')').show();
	
	});
});