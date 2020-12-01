<!--footer sec-->

<footer class="footer footer-topbar page-section-pt">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="about-content">
                    <h6 class="mb-2">About Company</h6>
                    <p><?php echo $footer->about ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <h6 class="mb-2">Useful Links</h6>
                <div class="usefull-link">
                    <ul>
                        <li>
                            <a href="<?php echo site_url() ?>"> <i class="fa fa-angle-right"></i>Home </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('ContactUs') ?>"> <i class="fa fa-angle-right"></i>Contact</a>
                        </li>
                        <li> <a href="<?php echo site_url('Prices') ?>"> <i class="fa fa-angle-right"></i>Pricing</a></li>
                        <li> <a href="<?php echo site_url('Services') ?>"> <i class="fa fa-angle-right"></i>Services</a></li>
                        <li> <a href="<?php echo site_url('FAQs') ?>"> <i class="fa fa-angle-right"></i>FAQs</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-12">
                <h6 class="mb-2">Contact</h6>
                <p><?php echo $contact->address ?></p>
                <br>
                <p> <?php echo $contact->website ?> <br>
                    <?php echo $contact->phone ?>
                </p>
            </div>

            <div class="col-lg-3 col-md-12">
                <h6 class="mb-2">Subscribe</h6>
                <p>Subcribe to get exclusive updates </p>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Email Address">
                </div>
            </div>

        </div>

    </div>
    <div class="copyright mt-6">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-left">
                        <p><?php echo $footer->credits ?></p>
                    </div>
                </div>
                <div class="col-md-6">

                    <ul class="list-inline text-right">
                        <li><a href="#">Terms of Service </a> &nbsp;&nbsp;&nbsp;|</li>
                        <li><a href="#">Privacy Policy </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--footer -->


<!--back to top -->
<div class="back-to-top">
    <span><img src="<?php echo assets_url('images/rocket.png') ?>" data-src="<?php echo assets_url('images/rocket.png') ?>" data-hover="<?php echo assets_url('images/rocket.gif') ?>" alt=""></span>
</div>


<!--back to top -->

<!-- jquery  -->
<script type="text/javascript" src="<?php echo assets_url('js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo assets_url('js/popper.min.js') ?>"></script>

<!-- bootstrap -->
<script type="text/javascript" src="<?php echo assets_url('js/bootstrap.min.js') ?>"></script>

<!-- mega-menu -->
<script type="text/javascript" src="<?php echo assets_url('js/mega-menu/mega_menu.js') ?>"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="<?php echo assets_url('js/owl-carousel/owl.carousel.min.js') ?>"></script>

<!-- revolution -->
<script type="text/javascript" src="<?php echo assets_url('revolution/js/jquery.themepunch.tools.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo assets_url('revolution/js/jquery.themepunch.revolution.min.js') ?>"></script>



<!-- custom -->
<script type="text/javascript" src="<?php echo assets_url('js/custom.js') ?>"></script>

<script type="text/javascript">
    var tpj = jQuery;
    var revapi17;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_17_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_17_1");
        } else {
            revapi17 = tpj("#rev_slider_17_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "<?php echo assets_url('revolution/js/') ?>",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "vertical",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "custom",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1270,
                gridheight: 800,
                lazyType: "smart",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "spinner3",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>
<script type="text/javascript" src="<?php echo assets_url('revolution/js/extensions/revolution.extension.slideanims.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo assets_url('revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo assets_url('revolution/js/extensions/revolution.extension.navigation.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo assets_url('revolution/js/extensions/revolution.extension.parallax.min.js') ?>"></script>


</body>

</html>