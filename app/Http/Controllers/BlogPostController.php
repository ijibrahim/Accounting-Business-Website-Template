<?php

namespace App\Http\Controllers;

use App\Enums\BlogPostStatus;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with('category')
            ->withCount('pageViews')
            ->latest()
            ->paginate(10);

        return view(
            'admin.blog-posts.index',
            compact('posts')
        );
    }

    public function create()
    {
        $categories = BlogCategory::query()->where('is_active', 1)->get();

        return view(
            'admin.blog-posts.create',
            compact('categories')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_category_id' => ['required', 'exists:blog_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'contents' => ['required'],
            'featured_image' => ['nullable', 'image'],
            'og_image' => ['nullable', 'image'],
            'status' => ['required'],
            'published_at' => ['nullable', 'date'],
        ]);

        /*
    |--------------------------------------------------------------------------
    | FEATURED IMAGE
    |--------------------------------------------------------------------------
    */

        $featuredImage = null;
        if ($request->hasFile('featured_image')) {
            $featuredImage = $request->file('featured_image')
                ->store('blog-posts', 'public');
        }

        /*
    |--------------------------------------------------------------------------
    | OG IMAGE
    |--------------------------------------------------------------------------
    */

        $ogImage = null;
        if ($request->hasFile('og_image')) {
            $ogImage = $request->file('og_image')
                ->store('blog-posts/og-images', 'public');
        }

        /*
    |--------------------------------------------------------------------------
    | CREATE BLOG
    |--------------------------------------------------------------------------
    */

        BlogPost::create([
            'blog_category_id' => $request->blog_category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->contents,
            'featured_image' => $featuredImage,
            'author_name' => $request->author_name,
            'status' => $request->status,
            'published_at' => $request->published_at,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'og_image' => $ogImage,
            'created_by' => Auth::user()->id,
        ]);

        return redirect()
            ->route('admin.blog-posts.index')
            ->with('success', 'Blog Post Created Successfully');
    }

    public function edit(BlogPost $blog_post)
    {
        $categories = BlogCategory::query()->where('is_active', 1)->get();

        return view(
            'admin.blog-posts.edit',
            compact('blog_post', 'categories')
        );
    }

    public function update(Request $request, BlogPost $blog_post)
    {
        $request->validate([
            'blog_category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $thumbnail = $blog_post->thumbnail;

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')
                ->store('blog-posts', 'public');
        }

        $blog_post->update([
            'blog_category_id' => $request->blog_category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'thumbnail' => $thumbnail,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status' => $request->status ?? 1,
        ]);

        return redirect()
            ->route('admin.blog-posts.index')
            ->with('success', 'Post Updated Successfully');
    }

    public function show($slug)
    {
        $blog = BlogPost::with('category')
            ->where('slug', $slug)
            ->where('status', BlogPostStatus::Published)
            ->firstOrFail();

        request()->attributes->set('blog_post_id', $blog->id);

        $visitorCount = $blog->pageViews()->count();

        $relatedPosts = BlogPost::query()->where('id', '!=', $blog->id)
            ->where('blog_category_id', $blog->blog_category_id)
            ->where('status', BlogPostStatus::Published)
            ->latest()
            ->take(4)
            ->get();

        return view(
            'layouts.blog_details',
            compact('blog', 'relatedPosts', 'visitorCount')
        );
    }

    public function destroy(BlogPost $blog_post)
    {
        BlogPost::destroy($blog_post->id);

        return back()->with('success', 'Post Deleted');
    }
}
