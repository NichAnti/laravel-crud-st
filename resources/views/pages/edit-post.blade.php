@extends('layouts.postLayout')

@section('content')

  <form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('PATCH')
      <label for="title">title</label>
      <input type="text" name="title" value="{{ $post->title }}">

      <label for="content">content</label>
      <input type="text" name="content" value="{{ $post->content }}">

      <input type="submit" value="save">
  </form>

@stop
