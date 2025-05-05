<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'cover_image' => 'nullable|image',
            'images.*' => 'nullable|image',
            'videos.*' => 'nullable|mimes:mp4,avi,mov|max:20480',
        ]);

        $blog = new Blog();
        $blog->user_id = auth()->id();
        $blog->title = $request->title;
        $blog->content = $request->content;

        // Store Cover Image without cropping
        if ($request->hasFile('cover_image')) {
            $cover = $request->file('cover_image');
            $filename = 'cover_' . time() . '.' . $cover->getClientOriginalExtension();
            $cover->storeAs('blogs', $filename, 'public');
            $blog->cover_image = "blogs/{$filename}";
        }

        // Multiple Images
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $img) {
                $name = 'img_' . uniqid() . '.' . $img->getClientOriginalExtension();
                $img->storeAs('blogs/images', $name, 'public');
                $images[] = "blogs/images/{$name}";
            }
            $blog->images = json_encode($images);
        }

        // Multiple Videos
        if ($request->hasFile('videos')) {
            $videos = [];
            foreach ($request->file('videos') as $vid) {
                $name = 'vid_' . uniqid() . '.' . $vid->getClientOriginalExtension();
                $vid->storeAs('blogs/videos', $name, 'public');
                $videos[] = "blogs/videos/{$name}";
            }
            $blog->videos = json_encode($videos);
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog posted successfully!');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        // $this->authorize('update', $blog);
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        // $this->authorize('update', $blog);

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'cover_image' => 'nullable|image',
            'images.*' => 'nullable|image',
            'videos.*' => 'nullable|mimes:mp4,avi,mov|max:20480',
        ]);

        $blog->title = $request->title;
        $blog->content = $request->content;

        // Replace Cover Image without cropping
        if ($request->hasFile('cover_image')) {
            if ($blog->cover_image) {
                Storage::disk('public')->delete($blog->cover_image);
            }

            $cover = $request->file('cover_image');
            $filename = 'cover_' . time() . '.' . $cover->getClientOriginalExtension();
            $cover->storeAs('blogs', $filename, 'public');
            $blog->cover_image = "blogs/{$filename}";
        }

        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $img) {
                $name = 'img_' . uniqid() . '.' . $img->getClientOriginalExtension();
                $img->storeAs('blogs/images', $name, 'public');
                $images[] = "blogs/images/{$name}";
            }
            $blog->images = json_encode($images);
        }

        if ($request->hasFile('videos')) {
            $videos = [];
            foreach ($request->file('videos') as $vid) {
                $name = 'vid_' . uniqid() . '.' . $vid->getClientOriginalExtension();
                $vid->storeAs('blogs/videos', $name, 'public');
                $videos[] = "blogs/videos/{$name}";
            }
            $blog->videos = json_encode($videos);
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        // $this->authorize('delete', $blog);

        if ($blog->cover_image) Storage::disk('public')->delete($blog->cover_image);
        if ($blog->images) {
            foreach (json_decode($blog->images) as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        if ($blog->videos) {
            foreach (json_decode($blog->videos) as $vid) {
                Storage::disk('public')->delete($vid);
            }
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
