<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../../../public/css/style.css">
				<style type="text/css">
					body
			{
				margin-top: 30px;
			}a
			.headingbox
			{
				position: relative;
			}
			.loginbox
			{
				position: absolute;
				top: 0;
				right: 0;
				margin-top: 10px;
			}
				</style>


	</head>
	<body>
		<div class="container">
			<div class="row headingbox">
			  <title><?php echo $__env->yieldContent('title'); ?></title>
				<nav class="loginbox navbar ">
			  <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                          <a class="nav-link" href="<?php echo e(url('/login')); ?>">Login</a>
                         	 <a class="nav-link" href="<?php echo e(url('/register')); ?>">Register</a>
                        <?php else: ?>
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
                        <?php endif; ?>
                    </nav>
			</div>

			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

					<ul class="navbar-nav">
					<!-- Dropdown -->
						<li class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Sort posts by</a>
							<div class="dropdown-menu" >
					          <a class="dropdown-item" href="#">Top 10 most recent posts</a>
					          <a class="dropdown-item" href="#">Top 10 liked posts</a>
					          <a class="dropdown-item" href="#">Top 10 most commented posts</a>
					          <a class="dropdown-item" href="#">Top 10 most visited posts</a>
					        </div>
						</li>
					</ul>
				<?php if(Auth::check()): ?>
        		<ul class="navbar-nav ml-auto">
            		<li class="nav-item">
               			 <a class="nav-link" href="<?php echo e(route('posts.index')); ?>" >Manage Blos Posts</a>
           			 </li>
        		</ul>
        		<?php endif; ?>


			</nav>

		<?php echo $__env->yieldContent('content'); ?>

<div class="footer text-center">
	<p>&copy;copyrighted</p>

</div>

	</body>
</html>
