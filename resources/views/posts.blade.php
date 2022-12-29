{{-- @dd($posts) --}}
{{-- <.?=json_encode($posts); exit;?> --}}
@extends('layouts.main')

@section('container')
  
  <div class="container">
    <div class="row">
      @foreach ($posts as $post)      
        <div class="col-md-4 mb-3">
          <div class="card">
            
              @if ($post->image)
                <a href="/posts/{{ $post->id }}">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">
                </a>
              @else
                  {{-- <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}"> --}}
              @endif
            
            
            
            <div class="card-body">
                <div>{{ $post->caption }}</div>
                <small class="text-muted">
                  By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none" style="margin-bottom:0px;">{{ $post->author->name }}</a>
                  <div>{{ $post->created_at->diffForHumans() }}</div>
                </small>
              
              {{-- <p class="card-text">{{ $post->excerpt }}</p> --}}
              {{-- <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a> --}}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  
@endsection('container')