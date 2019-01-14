<?php $__env->startSection('title',$post->title ); ?>
<?php $__env->startSection('content'); ?>
  <div class="row">
    <a href="http://localhost:8000" class="btn btn-deafult"> Back</a>
  </div>
  <div class="main-content">
    <h1><?php echo e($post->title); ?></h1>
    <p><?php echo e($post->body); ?></p>
  </div>
  
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '<?php echo e(Request::url()); ?>';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = <?php echo e($id); ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://tech-adda-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.viewLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>