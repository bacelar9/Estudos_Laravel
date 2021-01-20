<?php $__env->startSection('content'); ?>

    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
            style="background-image:url(../front/assets/images/img_bg_2.jpg); height: 200px"
            data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
    </header>

    <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2><?php echo e($post->title); ?></h2>
                    <p><?php echo e($post->subtitle); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="fh5co-blog animate-box">
                    <div class="col-12 text-center">
                        <img style="max-width: 100%;"
                        src="<?php echo e(Storage::disk('public')->url(Cropper::thumb($post->cover, 800, 450))); ?>"
                             alt="">
                    </div>
                    <div class="col-12">
                        <div class="blog-text">
                            <span class="posted_on"><?php echo e(date('d/m/Y H:i', strtotime($post->created_at))); ?></span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p><?php echo e($post->content); ?></p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="fb-comments" data-href="<?php echo e(Request::url()); ?>" data-numposts="5" data-width="100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('front.includes.optin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <div id="fb-root"></div>
    <script async defer
            src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2&appId=1013513102125124&autoLogAppEvents=1"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>