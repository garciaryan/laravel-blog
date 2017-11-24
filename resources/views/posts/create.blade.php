@extends('layout')

@section('content')
  <h1>make a post</h1>
  <form method="POST" action="/posts">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="title" class="form-control" id="exampleInputEmail1" placeholder="title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea type="password" class="form-control" id="body" placeholder="Create!" name="body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>
</form>
@endsection
