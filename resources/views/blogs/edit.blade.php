{{-- @extends('layouts.app')

@section('content')
    <h1>Edit Blog</h1>

    <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $blog->title }}" required>
        <textarea name="content" required>{{ $blog->content }}</textarea>
        <input type="file" name="cover_image">
        <input type="file" name="images[]" multiple>
        <input type="file" name="videos[]" multiple>
        <button type="submit">Update</button>
    </form>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Edit Blog Post</h1>

    <form action="{{ route('blogs.update', $blog) }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm" id="blogForm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
            <div class="form-text">This will be the main headline of your blog post.</div>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="6">{!! old('content', $blog->content) !!}</textarea>
            <div class="form-text">Use this space to edit your story.</div>
            <div id="contentError" class="text-danger small mt-1"></div>
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image</label>
            <input class="form-control" type="file" id="cover_image" name="cover_image" accept="image/*">
            <div class="form-text">A square image used as the blog thumbnail.</div>
            <div id="coverImageError" class="text-danger small mt-1"></div>
        </div>

        <div class="mb-3">
            <label for="images" class="form-label">Additional Images</label>
            <input class="form-control" type="file" id="images" name="images[]" multiple accept="image/*">
            <div class="form-text">Upload more images to enhance your post.</div>
            <div id="imagesError" class="text-danger small mt-1"></div>
        </div>

        <div class="mb-3">
            <label for="videos" class="form-label">Videos</label>
            <input class="form-control" type="file" id="videos" name="videos[]" multiple accept="video/*">
            <div class="form-text">Include supporting videos (optional).</div>
            <div id="videosError" class="text-danger small mt-1"></div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Update Blog</button>
        </div>
    </form>
</div>

{{-- CKEditor Script --}}
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    let editor;

    ClassicEditor
        .create(document.querySelector('#content'))
        .then(newEditor => {
            editor = newEditor;

            const form = document.querySelector('#blogForm');

            form.addEventListener('submit', function (event) {
                // Clear previous errors
                document.getElementById('contentError').textContent = '';
                document.getElementById('coverImageError').textContent = '';
                document.getElementById('imagesError').textContent = '';
                document.getElementById('videosError').textContent = '';

                let hasError = false;

                // Validate content
                const contentData = editor.getData().trim();
                if (!contentData) {
                    document.getElementById('contentError').textContent = 'Content is required.';
                    hasError = true;
                }
                document.querySelector('#content').value = contentData;

                // Validate cover image
                const coverImage = document.getElementById('cover_image').files[0];
                if (coverImage && (!coverImage.type.startsWith('image/') || coverImage.size > 10 * 1024 * 1024)) {
                    document.getElementById('coverImageError').textContent = 'Cover image must be an image and less than 10MB.';
                    hasError = true;
                }

                // Validate images
                const images = document.getElementById('images').files;
                for (let i = 0; i < images.length; i++) {
                    if (!images[i].type.startsWith('image/') || images[i].size > 10 * 1024 * 1024) {
                        document.getElementById('imagesError').textContent = 'Each image must be an image file and less than 10MB.';
                        hasError = true;
                        break;
                    }
                }

                // Validate videos
                const videos = document.getElementById('videos').files;
                for (let i = 0; i < videos.length; i++) {
                    if (!videos[i].type.startsWith('video/') || videos[i].size > 250 * 1024 * 1024) {
                        document.getElementById('videosError').textContent = 'Each video must be a video file and less than 250MB.';
                        hasError = true;
                        break;
                    }
                }

                if (hasError) {
                    event.preventDefault();
                }
            });
        })
        .catch(error => {
            console.error('CKEditor initialization failed:', error);
        });
</script>
@endsection
