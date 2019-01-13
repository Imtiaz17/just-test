<?php $__env->startSection('title',$post->title ); ?>
<?php $__env->startSection('content'); ?>
  <div class="row">
    <a href="http://localhost:8000" class="btn btn-deafult"> Back</a>
  </div>
  <div class="main-content">
    <h1><?php echo e($post->title); ?></h1>
    <p><?php echo e($post->body); ?></p>
  </div>
  <div class="share">
    <div class="fb-share-button" data-href="http://localhost:8000/posts/13" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fposts%2F13&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
  </div>
<div class="comments">
  <div class="fb-comments" data-href="http://localhost:8000/posts/<?php echo e($id); ?>" data-width="600" data-numposts="2"></div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.viewLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>