@extends('welcome')

@section('title', 'Contattaci')

@section('contain')
    <div class="row">
        {{-- @include('includes.loader') --}}
        <div class="col-12 my-5">
            <form action="{{ route('sendMail') }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <textarea placeholder="Scrivi messaggio" name="text" rows="10" class="form-control"></textarea>
                </div>

                <button  id="go" type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
    </div>
@endsection
