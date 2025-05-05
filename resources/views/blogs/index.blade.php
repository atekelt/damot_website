@extends('layouts.app')

@section('content')
    <h1>All Blogs</h1>

    @auth
        <a href="{{ route('blogs.create') }}">+ Create New Blog</a>
    @endauth

    @foreach ($blogs as $blog)
        <div>
            <h2><a href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a></h2>
            <p>{{ Str::limit($blog->content, 100) }}</p>

            @auth
                @if (auth()->id() === $blog->user_id)
                    <a href="{{ route('blogs.edit', $blog) }}">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
                    <script>
                        function confirmDelete() {
                            return confirm("Are you sure you want to delete this blog? This action cannot be undone.");
                        }
                    </script>
                @endif
            @endauth
        </div>
    @endforeach
@endsection
