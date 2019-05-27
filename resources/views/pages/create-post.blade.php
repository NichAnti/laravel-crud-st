@extends('layouts.postLayout')

@section('content')

  <form action="{{ route('posts.store') }}" method="post">
    @csrf
      <label for="title">title</label>
      <input type="text" name="title" placeholder="write title">

      <label for="content">content</label>
      <input type="text" name="content" placeholder="write content">

      <input type="submit" value="save new post">
  </form>

@stop
