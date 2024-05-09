<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateMenuRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Exception;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $viewData = [
            'TabelMenu' => Menu::all(),
        ];

        return view('menu.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('menu.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_menu' => 'required|string|min:3|max:255',
                'harga' => 'required|numeric|min:0',
            ]);
            Menu::create($validatedData);
            return redirect('/menu')->with('success', 'New Menu Has Been Created');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to create new menu');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $viewData = [
            'item' => Menu::findOrFail($id),
        ];

        return view('menu.edit', $viewData);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        try {
            $validatedData = $request->validate([
                'nama_menu' => 'required|string|min:3|max:255',
                'harga' => 'required|numeric|min:0',
            ]);
            $menu->update($validatedData);
            return redirect('/menu')->with('success', 'Menu Edited Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to update menu');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        try {
            $menu->delete();
            return redirect('/menu')->with('success', 'Menu deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete menu');
        }
    }
}
