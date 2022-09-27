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
                <td>
                    <a class="btn btn-small btn-success" href="{{route('admin.posts.show',$post)}}">
                        Mostra</a>
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