{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')
   
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3"> {{ $post->title }} </h1>
                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                
                    @if ($post->image)
                    <div style="max-height:350px; overflow:hidden; ">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">
                    </div>
                    @else
                    {{-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid"> --}}
                @endif

                <article class="my-3 fs-5">
                    {!! $post->caption !!}
                </article>
                
                <a href="/posts" class="d-block mt-3">Back to Gallery</a>
            </div>
        </div>
    </div>

      
@endsection('container')