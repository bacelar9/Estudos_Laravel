<?php $__env->startSection('content'); ?>

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
            style="background-image:url(front/assets/images/img_bg_2.jpg); height: 200px"
            data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
    </header>

    <div style="clear:both">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 style="padding: 100px 0px 80px 0px;">Curso</h1>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('front.includes.optin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>