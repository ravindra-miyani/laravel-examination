@extends('layout.main')


@section('content')
 <div class="col-sm-8 blog main">

<h1>Create a Group Post</h1>
<form method="POST" action="{{ route('group_posts_store')}}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Group Post Title</label>
    <input type="text" class="form-control"  placeholder="Group post title" name="title" value="{{ old('title') }}"/>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <input type="text" class="form-control" placeholder="Content area" name="body" value="{{ old('body') }}"/>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
@include('layout.error')
</div>
@endsection
