@component('mail::message')
    # Introduction

    <div class="row">
        <div class="col-12 my-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Titolo: {{ $post->title }}</h4>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Descrizione: {{ $post->description }}</p>
                    </blockquote>
                    <div>
                        {{ $post->updated_at }}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    @component('mail::button', ['url' => $url])
        Vai al post pubblicato
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
