@extends('layouts.app')
@section('content')
<div class="container">
    <header>{{$post->title}}</header>
    <div class="clearfix mb-4">
        <img class="float-left mr-3" src="{{$post->image}}" alt="{$post->title}}">
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        <time>{{$post->created_at}}</time>
        <time>{{$post->updated_at}}</time>
    </div>
    <footer class="d-flex justify-content-between mt-5">
       <a href="{{Route('admin.posts.index')}}" class="mt-5 col-1 btn btn-light p-1">HOMEPAGE</a>
    </footer>
</div>

@endsection