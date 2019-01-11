@extends('layouts.template')
@section('title','Add new post')
@section('content')
<h1>Add new post</h1>
<div class=" col-md-6 offset-md-2">
	<form action="{{ route('posts.store') }}" method="post">
	{{csrf_field()}}

		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label for="body">Body:</label>
			<textarea type="text" cols="30" rows="10" name="body" class="form-control"></textarea>
			<br><br>
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="{{route('posts.index')}}" class="btn btn-default float-right">Go back</a>
		</div>
	</form>
</div>


@endsection

<?php  ?>
