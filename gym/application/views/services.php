<section class="intro-title blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <div class="intro-content">
                    <div class="intro-name">
                        <h3 class="text-white">Services</h3>
                        <ul class="breadcrumb mt-1">
                            <li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
                            <li class="breadcrumb-item text-white">Services</li>
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

<?php foreach ($services as $s) : ?>
    <section class="service-block page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center" data-valign-overlay="middle">
                    <img class="img-fluid center-block" src="<?php echo $s->image ?>" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="mt-3 mb-2"><?php echo $s->title ?></h3>
                    <p class="mb-2"><?php echo $s->description ?></p>
                    <?php $det = explode(',', $s->details) ?>
                    <ul class="list-style-icon list-style-none">
                        <?php foreach ($det as $d) : ?>
                            <li><span class="ti-pencil-alt"></span> <?php echo $d ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a class="button mt-3" href="#">Get Started</a>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>