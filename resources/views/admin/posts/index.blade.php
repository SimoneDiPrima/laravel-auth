@extends('layouts.app')
@section('content')

<header class="container">
    <h1>LA LISTA DEI MIEI POST</h1>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <td>#</td>
            <td>Titolo</td>
            <td>Slug</td>
            <td>Creato</td>
            <td>Modificato</td>
            <td>Gestione</td>
        </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->update_at}}</td>
                <td class="d-flex justify-content-between">
                    <a class="btn btn-small btn-success mr-2" href="{{route('admin.posts.show',$post)}}">
                        Mostra</a>
                    <a class="btn btn-small btn-warning mr-2" href="#">
                        Modifica</a>
                    <form action="{{Route('admin.posts.destroy',$post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Cancella</button>
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
</header>
@endsection