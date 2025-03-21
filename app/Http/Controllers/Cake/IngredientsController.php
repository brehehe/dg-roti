<?php

namespace App\Http\Controllers\Cake;

use App\Http\Controllers\Controller;
use App\Models\Cake\Cake;
use App\Models\Cake\Ingridient;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ingredients = Ingridient::get();

        return view('admin.ingredient.index', [
            'ingredients' => $ingredients,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cakes = Cake::get();
        return view('admin.ingredient.create', compact('cakes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Ingridient::create([
            'cake_id' => $request->cake_id,
            'name' => $request->name,
        ]);

        return redirect()->route('ingredient.index')->with('success', 'Data berhasil tersimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $ingredient = Ingridient::find($id);
        if (!$ingredient) {
            return redirect()->route('ingredient.index')->with('error', 'Data tidak ditemukan!');
        }
        $cakes = Cake::get();
        return view('admin.ingredient.edit', compact('cakes', 'ingredient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $ingredient = Ingridient::find($id);
        $ingredient->name = $request->name;
        $ingredient->cake_id = $request->cake_id;
        $ingredient->save();

        return redirect()->route('ingredient.index')->with('success', 'Data berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $ingredient = Ingridient::find($id);

        if (!$ingredient) {
            return redirect()->route('ingredient.index')->with('error', 'Data tidak ditemukan!');
        }

        $ingredient->delete();

        return redirect()->route('ingredient.index')->with('success', 'Data berhasil dihapus!');
    }
}
