@extends('welcome')

@section('title', 'Crea posts')

@section('contain')
    <div class="row">
        <div class="col-12 my-3">
            <h2>Crea un post</h2>
        </div>
        <div class="col-12 my-4">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                @include('posts.form')
                <button type="submit" class="btn btn-primary">Crea</button>
              </form>
        </div>
    </div>
@endsection
