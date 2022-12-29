{{-- @dd($posts) --}}
{{-- <.?=json_encode($posts); exit;?> --}}
@extends('layouts.main')

@section('container')
  
  <div class="container">
    <div class="row">
      @foreach ($posts as $post)      
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
              {{-- <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div> --}}
            
              @if ($post->image)
                  <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">
              @else
                  {{-- <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}"> --}}
              @endif
            
            
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p>
                <small class="text-muted">
                  By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> | 
                  {{ $post->created_at->diffForHumans() }}
                </small>
              </p>
              {{-- <p class="card-text">{{ $post->excerpt }}</p> --}}
              {{-- <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a> --}}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  
@endsection('container')