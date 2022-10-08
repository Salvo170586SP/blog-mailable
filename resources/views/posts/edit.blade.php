@extends('welcome')

@section('title', 'Modifica posts')

@section('contain')
    <div class="row">
        <div class="col-12 my-3">
            <h2>Modifica post</h2>
        </div>
        <div class="col-12 my-4">
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('posts.form')
                <button type="submit" class="btn btn-primary">Modifica</button>
              </form>
        </div>
    </div>
@endsection