@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="text-center mb-3 mt-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to posts</a>
                @if ($post->image)
                    <div style="max-height:350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top mt-3"
                        alt="{{ $post->category->name }}">
                @endif
            </div>

            <div class="content my-3" style="text-align: justify; font-size:15px">
                {!! $post->body !!}
            </div>

        </div>
    </div>
@endsection
