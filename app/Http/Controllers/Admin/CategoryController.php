<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(CategoryStoreRequest $request)
    {
        $image = $request->file('image')->store('public/categories');

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Eine neue Kategorie wurde erfolgreich angelegt!');
    }


    public function show(string $id)
    {
        $category = Category::find($id);
        return view('admin.categories.show', ['category' => $category]);
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $image = $category->image;

        if ($request->hasFile('image')) {
            Storage::delete($category->image);
            $image = $request->file('image')->store('public/categories');
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        return redirect()->route('admin.categories.index')->with('status', 'Die Kategorie wurde erfolgreich aktualisiert!');;
    }


    public function destroy(category $category)
    {
        Storage::delete($category->image);
        $category->menus()->detach();

        $category->delete();

        return redirect()->route('admin.categories.index')->with('status', 'Die Kategorie wurde erfolgreich gelöscht!');;
    }
}
