<?php $__env->startSection('title','Blog Home Page'); ?>
<?php $__env->startSection('content'); ?>



<nav>
	<ul>
		<li style="font-weight: bold;">Top 10 most recent posts</li>
		<li>Top 10 Liked posts</li>
		<li>Top 10 most commented posts</li>
		<li>Top 10 most visited posts</li>
	</ul>
</nav>




<h3>Top 10 most Recent blogs</h3>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card card-body bg-light">
	<h3><?php echo e($post->title); ?></h3>
	<p><?php echo e($post->body); ?></p>
	<div class="viewbtn">
		<a href="<?php echo e(route('posts.show',['id'=>$post->id])); ?> " class="btn btn-primary">View Post</a>
	</div>

</div>
<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="offset-md-5">
	<?php echo e($posts->Links()); ?>

</div>
<?php $__env->stopSection(); ?>
</body>

</html>

<?php echo $__env->make('layouts.HomePageLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>