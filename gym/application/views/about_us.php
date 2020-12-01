    <section class="intro-title blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <div class="intro-content">
                        <div class="intro-name">
                            <h3 class="text-white">About Company</h3>
                            <ul class="breadcrumb mt-1">
                                <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
                                <li class="breadcrumb-item text-white">About Us</li>
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
    <?php if (!empty($sec1)) : ?>
        <section class="page-section-pt">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-8 text-center">
                        <h3 class="text-center"><?php echo $sec1->title ?></h3>
                        <p><?php echo $sec1->article ?></p>
                    </div>
                </div>

            </div>
        </section>
    <?php endif; ?>
    <?php if (!empty($sec2)) : ?>
        <section class="page-section-pt">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-8 text-center">
                        <h3 class="text-center"><?php echo $sec2->title ?></h3>
                        <p><?php echo $sec2->article ?></p>
                    </div>
                </div>

            </div>
        </section>
    <?php endif; ?>
    <?php if (!empty($sec3)) : ?>
        <section class="our-story popup-gallery bg" style="background:url(images/eec.jpg);">
            <div class="container-fluid">
                <div class="row no-gutter text-center">
                    <div class="col-lg-6 col-md-12 align-self-center">
                        <div class="play-video">
                            <a class="popup-youtube" href="<?php echo $sec3->video_url ?>"> <span class="ti-control-play"></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="our-story-content text-left blue-bg">
                            <h2 class="text-white mb-2"><?php echo $sec3->title ?></h2>
                            <p class="mb-2 text-white">
                                <?php echo $sec3->article ?>
                            </p>
                            <img class="img-fluid" alt="" src="<?php echo $sec3->image_url ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (!empty($sec4)) : ?>
        <section class="page-section-pt">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 text-right order-md-2 align-self-center" data-valign-overlay="middle">
                        <img class="img-fluid center-block top-m" alt="" src="<?php echo $sec4->image_url ?>">
                    </div>
                    <div class="col-md-6">
                        <h3 class=" mt-3 mb-2"><?php echo $sec4->title ?></h3>
                        <p class="mb-3"><?php echo $sec4->article ?></p>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if (!empty($logos)) : ?>
        <section class="our-clients-1 page-section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title text-center">
                            <h3 class="text-center">Partners / Associates</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="false" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-autoplay="">
                            <?php foreach ($logos as $logo) : ?>
                                <div class="item">
                                    <img class="img-fluid center-block" src="<?php echo $logo->image_url ?>" alt="#">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>