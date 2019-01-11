<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome to Blog</title>
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
		}
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
				<h1>Welcome to my blog</h1>
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

			
			<nav>
				<ul>
					<li style="font-weight: bold;">Top 10 most recent posts</li>
					<li>Top 10 Liked posts</li>
					<li>Top 10 most commented posts</li>
					<li>Top 10 most visited posts</li>
				</ul>
			</nav>


			

			<h2>Top 10 most Recent blogs</h2>

			<div class="well well-lg">
				<h3>Blog post title</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
			</div>
		</div>
	</body>
</html>
