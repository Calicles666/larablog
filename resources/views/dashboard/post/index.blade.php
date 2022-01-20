@extends('dashboard.master')

@section('content')

<a class="btn btn-success btn-block mt-3 mb-3" href="{{route('post.create')}}">Crear</a>

<table class="table">
    <thead>
        <tr>
            <th>Id Post</th>
            <th>Título</th>
            <th>Posteado</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->posted}}</td>
            <td>{{$post->created_at->format('d-M-y')}}</td>
            <td>{{$post->updated_at->format('d-M-y')}}</td>
            <td><a role="button" rel="stylesheet" href="{{route('post.show',$post->id)}}" class="btn btn-outline-primary">VER</a></td>
        </tr>
        @endforeach

    </tbody>

</table>
{{ $posts->onEachSide(1)->links() }}
@endsection