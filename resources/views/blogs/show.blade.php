{{-- @extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h1 class="card-title h3 mb-4">{{ $blog->title }}</h1>

            <div class="mb-4">
                {!! nl2br(e($blog->content)) !!}
            </div>

            @if($blog->cover_image)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/' . $blog->cover_image) }}" alt="Cover Image" class="img-fluid rounded shadow-sm" style="max-width: 400px;">
                </div>
            @endif

            @php
                $images = json_decode($blog->images, true);
            @endphp

            @if(!empty($images))
                <h5 class="mb-3">Additional Images</h5>
                <div class="row mb-4">
                    @foreach($images as $img)
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('storage/' . $img) }}" alt="Blog Image" class="img-fluid rounded border">
                        </div>
                    @endforeach
                </div>
            @endif

            @php
                $videos = json_decode($blog->videos, true);
            @endphp

            @if(!empty($videos))
                <h5 class="mb-3">Videos</h5>
                <div class="row">
                    @foreach($videos as $vid)
                        <div class="col-md-6 mb-3">
                            <video controls class="w-100 rounded border">
                                <source src="{{ asset('storage/' . $vid) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow border-0">
        <div class="card-body">

            <!-- Cover Image at the Top -->
            @if($blog->cover_image)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/' . $blog->cover_image) }}" 
                         alt="Cover Image" 
                         class="img-fluid rounded-3 shadow" 
                         style="max-width: 500px;">
                </div>
            @endif

            <!-- Blog Title -->
            <h1 class="card-title h3 fw-bold mb-4 text-success text-center">{{ $blog->title }}</h1>

            <!-- Blog Content (Rich Text Rendered) -->
            <div class="mb-5">
                <div class="text-body">
                    {!! $blog->content !!}
                </div>
            </div>

            <!-- Additional Images -->
            @php
                $images = json_decode($blog->images, true);
            @endphp

            @if(!empty($images))
                <h5 class="fw-semibold mb-3 text-secondary">Additional Images</h5>
                <div class="row g-3 mb-4">
                    @foreach($images as $img)
                        <div class="col-6 col-md-4">
                            <img src="{{ asset('storage/' . $img) }}" 
                                 alt="Blog Image" 
                                 class="img-fluid rounded-2 border border-light shadow-sm">
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Videos -->
            @php
                $videos = json_decode($blog->videos, true);
            @endphp

            @if(!empty($videos))
                <h5 class="fw-semibold mb-3 text-secondary">Videos</h5>
                <div class="row g-3">
                    @foreach($videos as $vid)
                        <div class="col-12 col-md-6">
                            <div class="ratio ratio-16x9 border rounded overflow-hidden">
                                <video controls class="w-100 h-100">
                                    <source src="{{ asset('storage/' . $vid) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</div>
@endsection
