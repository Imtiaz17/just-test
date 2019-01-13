@extends('layouts.template')
@section('title','Blog Admin Panel')
@section('content')

  <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          {{ Auth::user()->name }} <span class="caret"></span>
      </a>

      <ul class="dropdown-menu" role="menu">
          <li>
              <a href="{{ url('/logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
      </ul>
  </li>


<h1>Admin Panel</h1>
<a href="{{route('posts.create')}}" class="btn btn-primary float-right">Add new blog post</a>
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
    @foreach ($posts as  $post)
    <tr>
      <th>{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->body }}</td>
      <td>Edit button </td>
      <td>Delete button </td>

    </tr>

    @endforeach


  </tbody>
</table>


@endsection
