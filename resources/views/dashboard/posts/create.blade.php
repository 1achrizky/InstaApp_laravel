@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
      {{-- kalau memakai controller resource, akan mengarah ke method store --}}
      
      @csrf
      {{-- <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
        @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div> --}}

      <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
        @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>

      <div class="mb-3">
        <label for="caption" class="form-label">Your Caption</label>
        <textarea name="caption" row=4 class="form-control" required></textarea>
        {{-- <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}"> --}}
        {{-- @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
      </div>
      
      {{-- <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body') <p class="text-danger">{{ $message }}</p> @enderror

        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
      </div> --}}
      
      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>

  </div>
  
  <script>
    // const title = document.querySelector('#title');
    // const slug = document.querySelector('#slug');

    // title.addEventListener('change', function(){
    //   fetch('/dashboard/posts/checkSlug?title='+title.value)
    //     .then(response => response.json()) //promise
    //     .then(data => slug.value = data.slug)
    // });

    // document.addEventListener('trix-file-accept', function(e){
    //   e.preventDefault();
    // });

  </script>
  
@endsection