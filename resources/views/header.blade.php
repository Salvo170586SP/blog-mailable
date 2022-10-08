<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
          <a class="nav-link" href="{{ route('comments.index') }}">Commenti</a>
        </div>
        <a class="btn btn-secondary btn-sm" href="{{ route('sendPage') }}">Contattaci</a>
      </div>
    </div>
  </nav>