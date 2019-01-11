<?php $__env->startSection('title','Blog Admin Panel'); ?>
<?php $__env->startSection('content'); ?>
<h1>Admin Panel</h1>
<a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary float-right">Add new blog post</a>
<br><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Sample title</td>
      <td>sample body</td>
      <td>edit button</td>
      <td>delet button</td>
    </tr>

  </tbody>
</table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>