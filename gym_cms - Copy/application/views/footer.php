<div class="row">
    <div class="col-md-12">
        <div class="copyright">
            <p>Copyright © <?php echo date('Y') ?> <a href="#">Cobalt Technologies</a>|All Rights Reserved</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- END PAGE CONTAINER-->
</div>

</div>

<!-- Jquery JS-->
<script src="<?php echo assets_url('vendor/jquery-3.2.1.min.js') ?>"></script>
<!-- Bootstrap JS-->
<script src="<?php echo assets_url('vendor/bootstrap-4.1/popper.min.js') ?>"></script>
<script src="<?php echo assets_url('vendor/bootstrap-4.1/bootstrap.min.js') ?>"></script>
<!-- Vendor JS       -->
<script src="<?php echo assets_url('vendor/slick/slick.min.js') ?>">
</script>
<script src="<?php echo assets_url('vendor/wow/wow.min.js') ?>"></script>
<script src="<?php echo assets_url('vendor/animsition/animsition.min.js') ?>"></script>
<script src="<?php echo assets_url('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>">
</script>
<script src="<?php echo assets_url('vendor/counter-up/jquery.waypoints.min.js') ?>"></script>
<script src="<?php echo assets_url('vendor/counter-up/jquery.counterup.min.js') ?>">
</script>
<script src="<?php echo assets_url('vendor/circle-progress/circle-progress.min.js') ?>"></script>
<script src="<?php echo assets_url('vendor/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
<script src="<?php echo assets_url('vendor/chartjs/Chart.bundle.min.js') ?>"></script>
<script src="<?php echo assets_url('vendor/select2/select2.min.js') ?>">
</script>
<script src="<?php echo assets_url('vendor/vector-map/jquery.vmap.js') ?>"></script>
<script src="<?php echo assets_url('vendor/vector-map/jquery.vmap.min.js') ?>"></script>
<script src="<?php echo assets_url('vendor/vector-map/jquery.vmap.sampledata.js') ?>"></script>
<script src="<?php echo assets_url('vendor/vector-map/jquery.vmap.world.js') ?>"></script>


<!-- Main JS-->
<script src="<?php echo assets_url('js/main.js') ?>"></script>
<script src="<?php echo assets_url('vue/vue.js') ?>"></script>
<?php if (isset($hasTable) && $hasTable) : ?>
    <link rel="stylesheet" href="<?php echo assets_url('css/datatable.css') ?>">
    <script src="<?php echo assets_url('js/datatable.js') ?>"></script>
<?php endif; ?>

<?php if (isset($vue)) : ?>
    <script src="<?php echo assets_url('js/axios.js') ?>"></script>
    <script src="<?php echo $vue ?>"></script>
    <link rel="stylesheet" href="<?php echo assets_url('css/dropzone.css') ?>">
    <script src="<?php echo assets_url('js/dropzone.js') ?>"></script>
    <script src="<?php echo assets_url('js/sweetalert.js') ?>"></script>
<?php endif; ?>
</body>

</html>