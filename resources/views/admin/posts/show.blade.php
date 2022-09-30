@extends('layouts.app')
@section('content')
<div class="container">
    <header>{{$post->title}}</header>
    <div class="clearfix mb-4">
        <img class="float-left mr-3" src="{{ $post->image }}" alt="{{ $post->slug }}" />
        <h1>{{$post->title}}</h1>
        <h4><strong>Categoria:</strong>{{ $post->category_id }}</h4>
        <p>{{$post->content}}</p>
        <div><time><strong>Creato il:</strong> {{$post->created_at}}</time></div>  
        <div><time><strong>Ultima modifica il:</strong> {{$post->updated_at}}</time></div>
    </div>
    <footer class="d-flex align-items-center justify-content-between mt-5">
        <div>
        <a href="{{Route('admin.posts.index')}}" class="mt-5 btn btn-light p-1">HOMEPAGE</a>
        </div>
        <div class="d-flex align-items-center justify-content-end mt-5">
        <a class="btn btn-small btn-warning mr-2" href="{{route('admin.posts.edit', $post)}}">
                        Modifica</a>
            <form action="{{Route('admin.posts.destroy',$post->id )}}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Cancella</button>
            </form>
            
        </div>
    </footer>
</div>

@endsection