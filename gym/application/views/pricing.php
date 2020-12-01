<section class="intro-title blue-bg">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <h3 class="text-white">Pricing</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
                            <li class="breadcrumb-item text-white">Pricing</li>
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


<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title text-center">
                    <span>Our packages are curated just for you!</span>
                    <h3 class="text-center">Pricing Packages</h3>
                </div>
            </div>
        </div>

        <div class="row mt-10">
            <?php foreach ($prices as $price) : ?>
                <div class="<?php echo $col ?> bottom-m3">
                    <div class="pricing pricing-01 text-center">
                        <div class="pricing-title">
                            <div class="section-title text-center">
                                <h5 class="text-center"><?php echo $price->title ?></h5>
                            </div>
                            <div class="pricing-img">
                                <img src="images/icon/06.png" alt="">
                            </div>
                            <div class="pricing-prize">
                                <h2 class="text-black"><span><?php echo $price->currency ?> </span><?php echo $price->amount ?><span>/<?php echo $price->duration ?></span></h2>
                            </div>
                        </div>
                        <?php $points = explode(',', $price->description); ?>
                        <div class="pricing-list">
                            <ul>
                                <?php foreach ($points as $p) : ?>
                                    <li><?php echo $p ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="pricing-order mt-3">
                            <a class="button black" href="#">Book Now</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<section class="feature-main white-bg">
    <div class="container-fluid fluid-padd">
        <div class="row row-eq-height no-gutter">
            <?php foreach ($articles as $art) : ?>
                <div class="<?php echo $a_col ?> col-md-12 feature-box-03-bg-1">
                    <div class="feature-box-03 text-white clearfix">
                        <div class="info">
                            <i class="ti-agenda"></i>
                            <h4 class="text-white mt-2 mb-2"><?php echo $art->title ?></h4>
                            <p><?php echo $art->article ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<br />
<center>
    <a class="button border icon" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Feel free to contact us for more info</a>
</center>
<br />