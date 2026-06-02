<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::orderByDesc('id')->paginate(10);

        return view(
            'admin.blog-categories.index',
            compact('categories')
        );
    }

    public function create()
    {
        return view('admin.blog-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:blog_categories,name',
        ]);

        BlogCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'is_active' => $request->status ?? 1,
        ]);

        return redirect()
            ->route('admin.blog-categories.index')
            ->with('success', 'Category Created Successfully');
    }

    public function edit(BlogCategory $blog_category)
    {
        return view(
            'admin.blog-categories.edit',
            compact('blog_category')
        );
    }

    public function update(Request $request, BlogCategory $blog_category)
    {
        $request->validate([
            'name' => 'required|unique:blog_categories,name,'.$blog_category->id,
        ]);

        $blog_category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'is_active' => $request->status ?? 1,
        ]);

        return redirect()
            ->route('admin.blog-categories.index')
            ->with('success', 'Category Updated Successfully');
    }

    public function destroy(BlogCategory $blog_category)
    {
        BlogCategory::destroy($blog_category->id);

        return back()->with('success', 'Category Deleted');
    }
}
