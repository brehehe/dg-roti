<?php

namespace App\Http\Controllers\Cake;

use App\Http\Controllers\Controller;
use App\Models\Cake\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cakes = Cake::get();

        return view('admin.cake.index', [
            'cakes' => $cakes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.cake.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $path = $request->file('image')->store('uploads', 'public');

        Cake::create([
            'name' => $request->name,
            'image' => $path,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('cake.index')->with('success', 'Data berhasil tersimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cake = Cake::find($id);

        if (!$cake) {
            return redirect()->route('cake.index')->with('error', 'Data tidak ditemukan!');
        }

        return view('admin.cake.edit', compact('cake'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cake = Cake::find($id);
        // if (!$cake) {
        //     return redirect()->route('cake.index')->with('error', 'Data tidak ditemukan!');
        // }
        //
        if ($request->file('image')) {
            $path = $request->file('image')->store('uploads', 'public');
        } else {
            $path = $cake->image;
        }

        $cake->name = $request->name;
        $cake->price = $request->price;
        $cake->description = $request->description;
        $cake->image = $path;
        $cake->save();

        return redirect()->route('cake.index')->with('success', 'Data berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Cake::find($id)->delete();
        return redirect()->route('cake.index')->with('success', 'Data berhasil dihapus!');
    }
}
