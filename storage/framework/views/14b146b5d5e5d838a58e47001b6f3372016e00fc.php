<?php $__env->startSection('title','Blog Admin Panel'); ?>
<?php $__env->startSection('content'); ?>

  <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
      </a>

      <ul class="dropdown-menu" role="menu">
          <li>
              <a href="<?php echo e(url('/logout')); ?>"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                  <?php echo e(csrf_field()); ?>

              </form>
          </li>
      </ul>
  </li>


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
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th><?php echo e($post->id); ?></th>
      <td><?php echo e($post->title); ?></td>
      <td><?php echo e($post->body); ?></td>
      <td>Edit button </td>
      <td>Delete button </td>

    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  </tbody>
</table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>