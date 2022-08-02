@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Lista posts</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Contenuto</th>
                        <th scope="col">Stato</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td>{{$post->content}}</td>
                        <td>
                            @if ($post->published)
                                <span class="badge badge-pill badge-seconday">Pubblicato</span>
                            @else
                                <span class="badge badge-pill badge-seconday">Bozza</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary">Visualizza</a>
                            <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Modifica</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
</div>
@endsection