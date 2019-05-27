@extends('layouts.postLayout')

@section('content')

  @foreach($posts as $post)

    <div class="post">
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->content }} </p>

      <a href="{{ route('posts.edit', $post->id) }}">edit</a><br>

      <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete"></input>
      </form>
    </div><br>

  @endforeach

  <a href="{{ route('posts.create') }}">
    <h5>create new post</h5>
  </a>

@stop
