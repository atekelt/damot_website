@extends('layouts.app')

@section('content')
<div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
    <div class="container position-relative">
      <h1>Our Blogs</h1>
      <p></p>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Blogs</li>
        </ol>
      </nav>
    </div>
  </div>
<section id="blog-posts-2" class="blog-posts-2 section">

    <div class="container">
      <div class="row gy-4">


    @auth
        <a href="{{ route('blogs.create') }}">+ Create New Blog</a>
    @endauth

    <div class="row gy-4">
        @foreach ($blogs as $blog)
            <div class="col-lg-4">
                <article class="position-relative h-100">
    
                    <div class="post-img position-relative overflow-hidden">
                        @if ($blog->cover_image)
                            <img src="{{ asset('storage/' . $blog->cover_image) }}" class="img-fluid" alt="Cover Image">
                        @else
                            <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt="Default Blog Image">
                        @endif
                    </div>
    
                    <div class="meta d-flex align-items-end mt-2">
                        <span class="post-date">
                            <span>{{ $blog->created_at->format('d') }}</span>{{ $blog->created_at->format('F') }}
                        </span>
                        <div class="d-flex align-items-center ms-3">
                            <i class="bi bi-person"></i>
                            <span class="ps-2">{{ $blog->user->name ?? 'Unknown' }}</span>
                        </div>
                        <span class="px-3 text-black-50">/</span>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-folder2"></i>
                            <span class="ps-2">Blog</span>
                        </div>
                    </div>
    
                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">{{ $blog->title }}</h3>
                        <p>{!! Str::limit($blog->content, 100) !!}</p>
                        <a href="{{ route('blogs.show', $blog) }}" class="readmore stretched-link">
                            <span>Read More</span><i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    
                </article>
                @auth
                    @if (auth()->id() === $blog->user_id)
                        <div class="mt-3 d-flex gap-2">
                            <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('blogs.destroy', $blog) }}" method="POST" onsubmit="return confirmDelete();">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
    
    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this blog? This action cannot be undone.");
        }
    </script>
      </div>
    </div>
    <div class="mt-4 d-flex justify-content-center">
    {{ $blogs->links('pagination::bootstrap-5') }}
</div>
</section>

@endsection
