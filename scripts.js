$(function () {
	
		$('#navbar-nav .nav-item').mouseover( function () {

			$(this).addClass('activ').siblings().removeClass('activ');
	});

});