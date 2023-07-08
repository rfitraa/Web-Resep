<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resep.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request -> validate([
            'judul' => 'required|max:255',
            'desc' => 'required',
            'bahan' => 'required',
            'langkah' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('resep-images');
        }
        
        Resep::create($validate);
        return redirect('/')->with('success', 'Resep Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resep $resep)
    {
        return view('resep.show',[
            'resep' => $resep
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
