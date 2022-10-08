<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titolo</label>
    <input type="text" name="title" value="{{ old('title', isset($post) ? $post->title :'') }}" class="form-control"
        id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contenuto del post</label>
    <textarea class="form-control" name="description" rows="4">{{ old('title', isset($post) ? $post->title :'') }}</textarea>
</div>
