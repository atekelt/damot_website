@extends('layouts.app')

@section('content')
    <h1>Create Blog</h1>

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="content" placeholder="Content" required></textarea>
        <input type="file" name="cover_image">
        <input type="file" name="images[]" multiple>
        <input type="file" name="videos[]" multiple>
        <button type="submit">Submit</button>
    </form>
@endsection
