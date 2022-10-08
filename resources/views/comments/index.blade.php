@extends('welcome')

@section('title', 'Lista commenti')

@section('contain')
    <div class="row">

        <div class="col-12 my-3">
            <h2>Lista Commenti</h2>
        </div>
        @foreach ($comments as $comment)
            <div class="col-3">
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-header">
                        {{ $comment->author }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $comment->comment }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection
