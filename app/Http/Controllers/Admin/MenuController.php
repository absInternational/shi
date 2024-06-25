<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index() {
        $menus = Menu::all();
        return view('dashboard.admin.navbar.index', compact('menus'));
    }

    public function create()
    {
        return view('dashboard.admin.navbar.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'menu_name' => 'required|string|max:255',
        ]);
        // dd($validatedData);

        // $validatedData['user_id'] = auth()->id();

        Menu::create($validatedData);

        return redirect()->route('navbar.index')->with('success', 'NavBar created successfully.');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('dashboard.admin.navbar.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $validatedData = $request->validate([
            'menu_name' => 'required|string|max:255',
            'status' => 'required',
        ]);

        $menu->update($validatedData);

        return redirect()->route('navbar.index')->with('success', 'Navbar updated successfully.');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->back()->with('success', 'Navbar deleted successfully.');
    }
}
