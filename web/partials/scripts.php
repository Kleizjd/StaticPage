
  <!-- ==============================<-/  SCRYPTS  /->=========================================== -->
<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Crypto Js -> JavaScript library of crypto standards.. -->
<script src="../../vendor/crypto-js/js/crypto-js.min.js"></script>
<!-- Datatables JS -->
<script src="../../vendor/sb-admin-2-2017/lib/datatables/js/datatables.min.js"></script>
<!-- Popper -->
<script src="../../vendor/popper/popper.min.js"></script>
<!-- Select2 JS -->
<script src="../../vendor/select2/js/select2.full.min.js"></script>
<!-- Select2 Language -->
<script src="../../vendor/select2/language/es.min.js"></script>
<!-- Datepicker Jquery-UI JS -->
<script src="../../vendor/datepicker/js/datepicker.min.js"></script>
<!-- Datepicker Jquery-UI Language -->
<script src="../../vendor/datepicker/language/datepickerSpanish.js"></script>
<!-- Sweet Alert -->
<script src="../../vendor/sweetalert/js/sweetalert2.min.js"></script>

<!-- Jquery Validation JS -> This jQuery plugin makes simple clientside form validation easy. -->
<script src="../../vendor/jquery-validate/js/jquery.validate.min.js"></script>
<script src="../../vendor/jquery-validate/language/messages_es.min.js"></script>

<!-- Typehead JS -> a flexible JavaScript library that provides a strong foundation for building robust typeaheads -->
<script src="../../vendor/typeahead/typeahead.min.js"></script>

<!-- Bootstrap -->
<!--  responsive -->
<script src="../../vendor/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
<!--  //responsive -->

<!-- Image Map Resize Js -> This is a simple library that makes HTML Image Maps responsive. -->
<script src="../../vendor/image-map-resize/imageMapResizer.min.js"></script>

<!-- Lodash Js -> A modern JavaScript utility library delivering modularity, performance & extras. -->
<script src="../../vendor/lodash/js/lodash.min.js"></script>

<!-- Cleave Js -> Format your <input/> content when you are typing. -->
<script src="../../vendor/cleave/cleave.min.js"></script>
<script src="../../vendor/select2/js/select2.min.js"></script>

<!-- Higcharts Js -> Highcharts makes it easy for developers to set up interactive charts in their web pages. -->
<script src="../../vendor/higcharts/code/highstock.js"></script>
<script src="../../vendor/higcharts/code/highcharts-3d.js"></script>
<script src="../../vendor/higcharts/code/modules/exporting.js"></script>
<script src="../../vendor/higcharts/code/modules/offline-exporting.js"></script>

 <!-- Alertify JS -->
<script src="../../vendor/alertify/js/alertify.min.js?v=<?=rand();?>"></script>

            <!-- Page level plugin JavaScript-->
            <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

            <!-- Metis Menu Plugin JavaScript -->
            <!-- <script src="metisMenu/js/metisMenu.min.js"></script> -->

            <!-- Numeral Js -> Formatting and manipulating numbers. -->
            <!-- <script src="numeral/numeral.min.js"></script> -->

            <!--stickey kit -->
            <!-- <script src="../../vendor/sticky-kit-master/dist/sticky-kit.min.js"></script> -->

            <!-- Select2 JS -->
            <!-- <script src="../../vendor/select2/js/select2.full.min.js"></script> -->
            <!-- Select2 Language -->
            <!-- <script src="../../vendor/select2/language/es.min.js"></script> -->

            <!-- slimscrollbar scrollbar JavaScript -->
            <!-- <script src="../../template/dist/js/perfect-scrollbar.jquery.min.js"></script> -->
            <!--Wave Effects -->
            <!-- <script src="../../template/dist/js/waves.js"></script> -->
            <!--Menu sidebar -->
            <!-- <script src="../../template/dist/js/sidebarmenu.js"></script> -->

<!-- Banner-Slider-JavaScript -->
<script src="../../vendor/styles-js/js/responsiveslides.min.js"></script>
<script>
    $(function() {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 800,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!-- //Banner-Slider-JavaScript -->

<!-- Owl-Carousel-JavaScript -->
<script src="../../vendor/styles-js/js/owl.carousel.js"></script>
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

<!-- Progressive-Effects-Animation-JavaScript -->
<script type="text/javascript" src="../../vendor/styles-js/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="../../vendor/styles-js/js/wow.min.js"></script>
<script type="text/javascript" src="../../vendor/styles-js/js/mousescroll.js"></script>
<script type="text/javascript" src="../../vendor/styles-js/js/main.js"></script>
<script type="text/javascript" src="../../vendor/styles-js/js/numscroller-1.0.js"></script>
<!-- //Progressive-Effects-Animation-JavaScript -->

<!-- Magnific-Popup-Display-JavaScript -->
<script src="../../vendor/styles-js/js/jquery.magnific-popup.js" type="text/javascript"></script>
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
<!-- //Magnific-Popup-Display-JavaScript -->
<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
<script type="text/javascript">
    $(document).ready(function() {
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 100,
            easingType: 'linear'
        };
        //   $().UItoTop({
        //     easingType: 'easeOutQuart'
        //   });
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!-- //Slide-To-Top JavaScript -->


