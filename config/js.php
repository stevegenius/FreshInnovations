<?php
// javaScript File: 



?>

<!-- localhost links -->
<!-- jQuery -->
<script type="text/javascript" src="/jquery-ui-1.10.4/jquery-1.10.2.js"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="/jquery-ui-1.10.4/ui/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="/dist/js/bootstrap.min.js"></script>
<script src="jquery.easing.min.js"></script>
<script src="avatarblur.js"></script>
<!-- end host -->



<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- jQuery UI -->
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>


<script>
	//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 70) {
			$(".navbar-fixed-top").addClass("top-nav-collapse");
		} else {
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
		}
	});

	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('a.page-scroll').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});

	//slide script here
	$('.carousel').carousel();

</script>