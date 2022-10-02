@extends('layouts.app')
@section('content')
<div class="container">
<header class="d-flex justify-content-between align-items-center mb-4">
    <h1>LA LISTA DEI MIEI POST</h1>
    <div>
        <a class="btn btn-primary ms-2" href="{{route('admin.posts.create')}}"><i class="fa-solid fa-plus"></i></a>
        <a class="btn btn-primary" href="#"><i class="fa-solid fa-user-plus"></i></a>
    </div>
    </header>
    
    <table class="table table-light table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Contenuto</th>
            <th scope="col">Creato il</th>
            <th scope="col">Modificato</th>
            <th scope="col" class="text-center">Gestione</th>
        </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>
                @if($post->category)
            <strong class="badge badge-{{$post->category->color}}">{{ $post->category->label }}</strong>
        
        @else
        <span>Nessuna</span>
        @endif
                </td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td class="d-flex justify-content-between">
                    <a class="btn btn-small btn-success mr-2" href="{{route('admin.posts.show',$post)}}">
                        <i class="fa-sharp fa-solid fa-eye"></i>
                    </a>
                    <a class="btn btn-small btn-warning mr-2" href="{{route('admin.posts.edit', $post)}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{Route('admin.posts.destroy',$post->id)}}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">NON SONO PRESENTI POST</td>
            </tr>
            @endforelse
        </tbody>
    </table>


</div>
@endsection