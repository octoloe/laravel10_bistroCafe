<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{

    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', ['menus' => $menus]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.menus.create', ['categories' => $categories]);
    }


    public function store(MenuStoreRequest $request)
    {
        $image = $request->file('image')->store('public/menus');

        $menu = Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image
        ]);

        return redirect()->route('admin.menus.index')->with('success', 'Eine neue Spezialität wurde erfolgreich angelegt!');
    }


    public function show(string $id)
    {
        $menu = Menu::find($id);
        return view('admin.menus.show', ['menu' => $menu]);
    }


    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('admin.menus.edit', ['menu' => $menu, 'categories' => $categories]);
    }


    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $image = $menu->image;

        if ($request->hasFile('image')) {
            Storage::delete($menu->image);
            $image = $request->file('image')->store('public/menus');
        }

        $menu->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image
        ]);

        return redirect()->route('admin.menus.index')->with('success', 'Die Spezialität wurde erfolgreich aktualisiert!');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        $menu->categories()->delete();
        Storage::delete($menu->image);
        $menu->delete();

        return redirect()->route('admin.menus.index')->with('success', 'Die Spezialität wurde erfolgreich gelöscht!');
    }
}
