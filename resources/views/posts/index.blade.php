@extends('welcome')

@section('title', 'Posts')

@section('contain')
    <div class="row">
        <div class="col-12 my-3">
            <h2>Lista Posts</h2>
            <a class="btn btn-secondary" href="{{ route('posts.create') }}"><i class="fa-solid fa-plus"></i> Scrivi un post</a>
        </div>
        @forelse ($posts as $post)
            <div class="col-12 ">
                <div class="card my-5 shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <p class="fs-bold"><span class="text-muted">Autore: </span>{{ $post->user->name ?? '-' }}</p>
                        <h4>{{ $post->title }}</h4>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-sm btn-primary" href="{{ route('posts.show', $post) }}"><i class="fa-solid fa-eye"></i> Leggi</a>
                            <a class="btn btn-sm btn-secondary mx-2" href="{{ route('posts.edit', $post) }}"><i class="fa-solid fa-file-pen"></i> Modifica</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Cancella</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{ $post->description }}</p>
                        </blockquote>
                    </div>
                    <div>
                        <form action="{{ route('saveComment', $post->id) }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                            <input type="hidden" value="Salvo" class="form-control" name="author" />
                                <textarea type="text" name="comment" class="form-control" placeholder="Scrivi un commento"
                                    aria-label="Recipient's username" aria-describedby="button-addon2"></textarea>
                                <button class="btn btn-secondary" type="submit" id="button-addon2">Commenta</button>
                            </div>

                        </form>
                    </div>

                    {{-- sezione commenti --}}
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header text-light" id="headingOne">
                                <button class="accordion-button rounded bg-secondary text-light" id="{{ $post->id }}"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne-{{ $post->id }}" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Lista Commenti
                                </button>
                            </h2>
                            <div id="collapseOne-{{ $post->id }}" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="comments">
                                        @forelse ($post->comments as $comment)
                                            <hr>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h5 class="mb-2">{{ $comment->author }} </h5>
                                                    <p> ha scritto: " {{ $comment->comment }} "</p>
                                                </div>

                                                <form action="{{ route('comments.destroy', $comment->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger">Elimina</button>
                                                </form>
                                            </div>
                                        @empty
                                            <p>non ci sono commenti</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty 
                Non ci sono Posts
        @endforelse


    </div>
@endsection

{{-- @push('additional-scripts')
    <script>
      let myMds = @json($post->id);
                let buttonNumbers = JSON.parse({{ json_encode($post->id) }});
    </script>
@endpush --}}
