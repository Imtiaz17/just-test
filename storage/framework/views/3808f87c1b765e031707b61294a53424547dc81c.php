<?php $__env->startSection('title','Add new post'); ?>
<?php $__env->startSection('content'); ?>
<h1>Add new post</h1>
<div class=" col-md-6 offset-md-2">
	<form action="<?php echo e(route('posts.store')); ?>" method="post">
	<?php echo e(csrf_field()); ?>


		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label for="body">Body:</label>
			<textarea type="text" cols="30" rows="10" name="body" class="form-control"></textarea>
			<br><br>
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="<?php echo e(route('posts.index')); ?>" class="btn btn-default float-right">Go back</a>
		</div>
	</form>
</div>


<?php $__env->stopSection(); ?>

<?php  ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>