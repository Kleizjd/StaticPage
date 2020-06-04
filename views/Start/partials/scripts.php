    <!-- //////////////////////[SCRYPTS]/////////////////////////////  -->
<script src="app/lib/global.js"></script>
<!-- Supportive-JavaScript -->
<script src="vendor/sweetalert/js/sweetalert2.min.js"></script>
<!-- Banner-Slider-JavaScript -->
<script src="vendor/styles-js/js/responsiveslides.min.js"></script>
<!--  responsive -->
<script src="vendor/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
<!--  //responsive -->

<!-- Owl Carousel -->
<script src="vendor/styles-js/js/owl.carousel.js"></script>
<!-- //Owl Carousel -->
        <!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
        <script type="text/javascript">
            $(document).ready(function() {
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 100,
                    easingType: 'linear'
                };
                // $().UItoTop({
                //     easingType: 'easeOutQuart'
                // });
            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
        <!-- //Slide-To-Top JavaScript -->
        <!-- Owl-Carousel-JavaScript -->
        <script src="vendor/styles-js/js/owl.carousel.js"></script>
        <script>
            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    items: 4,
                    lazyLoad: true,
                    autoPlay: true,
                    pagination: false,
                });
            });
        </script>
        <!-- //Owl-Carousel-JavaScript -->
        <script src="vendor/styles-js/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
	});
	</script>