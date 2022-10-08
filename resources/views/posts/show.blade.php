@extends('welcome')

@section('title', 'dettaglio posts')

@section('contain')
<div class="row">
    <div class="col-12 my-3">
        <h2>Dettaglio Posts</h2>
    </div>
       <div class="col-12 my-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
             <h4>{{ $post->title }}</h4>  <a class="btn btn-sm btn-primary" href="{{ route('posts.index') }}">Torna ai posts</a>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>{{ $post->description }}</p>
              </blockquote>
            </div>
          </div>
    </div> 
</div>
@endsection