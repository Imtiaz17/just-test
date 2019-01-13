		@extends('layouts.HomePageLayout')
		@section('title','Blog Home Page')
		@section('content')


		{{--Menu--}}
			<nav>
				<ul>
					<li style="font-weight: bold;">Top 10 most recent posts</li>
					<li>Top 10 Liked posts</li>
					<li>Top 10 most commented posts</li>
					<li>Top 10 most visited posts</li>
				</ul>
			</nav>


			{{--Top posts by category--}}

			<h3>Top 10 most Recent blogs</h3>
			@foreach ($posts as $post)
				<div class="card card-body bg-light">
					<h3>{{ $post->title }}</h3>
						<p>{{ $post->body }}</p>
				</div>
				<br>
			@endforeach

			<div class="offset-md-5">
				{{ $posts->Links() }}
			</div>
			@endsection
	</body>
</html>
