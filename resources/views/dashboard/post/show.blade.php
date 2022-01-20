@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')

        <form action="{{ route ("post.store") }}" method="post">
            @csrf
            <div class="form-group">
                <label class="form-label" for="title">Título: </label>
                <input readonly class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
                @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="url_clean">Url limpia: </label>
                <input readonly class="form-control" type="text" name="url_clean" id="url_clean" value="{{$post->url_clean}}">
            </div>
           <!-- <div class="form-group">
                <label class="form-label" for="content">Contenido: </span>
                <textarea class="form-control" name= "content" id="content" rows="3"></textarea>
            </div>-->
            <div class="input-group">
                <span class="input-group-text">Contenido</span>
                <textarea readonly class="form-control" aria-label="With textarea" name= "content" id="content">{{$post->content}}</textarea>
            </div>
        </form>
    
@endsection
