<section class="intro-title blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <h3 class="text-white">Frequently Asked Questions</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white">Pages</li>
                            <li class="breadcrumb-item active">Page Name</li>
                        </ul>
                    </div>
                    <div class="intro-img">
                        <img class="img-fluid" src="<?php echo $banner->link ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="faq page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span>Have a question? </span>
                    <h3 class="text-center">Frequently asked questions</h3>
                </div>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="all-faqs">
                        <div class="accordion">
                            <?php foreach ($faqs as $faq) : ?>
                                <div class="acd-group acd-active">
                                    <a href="#" class="acd-heading">
                                        <i class="fa fa-question" aria-hidden="true"></i><?php echo $faq->title ?></a>
                                    <div class="acd-des text-gray"><?php echo $faq->article ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ecommerce">
                        <div class="accordion">
                            <div class="acd-group text-black">
                                <a href="#" class="acd-heading">
                                    <i class="fa fa-question" aria-hidden="true"></i>We always Support within one business day.</a>
                                <div class="acd-des text-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black">
                                    <i class="fa fa-question" aria-hidden="true"></i> We deliver Top Rankings.</a>
                                <div class="acd-des text-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black">
                                    <i class="fa fa-question" aria-hidden="true"></i> High customer retention rate.</a>
                                <div class="acd-des text-gray pb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="smm">
                        <div class="accordion">
                            <div class="acd-group text-black">
                                <a href="#" class="acd-heading">
                                    <i class="fa fa-question" aria-hidden="true"></i>We always Support within one business day.</a>
                                <div class="acd-des text-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black">
                                    <i class="fa fa-question" aria-hidden="true"></i> High customer retention rate.</a>
                                <div class="acd-des text-gray pb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="technology">
                        <div class="accordion">
                            <div class="acd-group text-black">
                                <a href="#" class="acd-heading">
                                    <i class="fa fa-question" aria-hidden="true"></i>We always Support within one business day.</a>
                                <div class="acd-des text-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black">
                                    <i class="fa fa-question" aria-hidden="true"></i> We deliver Top Rankings.</a>
                                <div class="acd-des text-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black">
                                    <i class="fa fa-question" aria-hidden="true"></i> High customer retention rate.</a>
                                <div class="acd-des text-gray pb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="services">
                        <div class="accordion">
                            <div class="acd-group text-black">
                                <a href="#" class="acd-heading">
                                    <i class="fa fa-question" aria-hidden="true"></i>We always Support within one business day.</a>
                                <div class="acd-des text-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black">
                                    <i class="fa fa-question" aria-hidden="true"></i> We deliver Top Rankings.</a>
                                <div class="acd-des text-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black">
                                    <i class="fa fa-question" aria-hidden="true"></i> High customer retention rate.</a>
                                <div class="acd-des text-gray pb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="seo">
                        <div class="accordion">
                            <div class="acd-group text-black">
                                <a href="#" class="acd-heading">
                                    <i class="fa fa-question" aria-hidden="true"></i>We always Support within one business day.</a>
                                <div class="acd-des text-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black">
                                    <i class="fa fa-question" aria-hidden="true"></i> We deliver Top Rankings.</a>
                                <div class="acd-des text-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading text-black">
                                    <i class="fa fa-question" aria-hidden="true"></i> High customer retention rate.</a>
                                <div class="acd-des text-gray pb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>