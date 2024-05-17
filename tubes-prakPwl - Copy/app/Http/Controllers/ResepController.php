<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;


class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reseps = Resep::all();

        return view('home', [
            'reseps' => $reseps
        ]);
    }

    public function indexAdd()
    {
        return view('create');
    }


    public function addResep(Request $request)
    {   
        return $request->file('gambar')->store('post-gambar');
        
          $validation = $request->validate([
            'nama_resep' => 'required|min:5|max:255',
            'resep'      => 'required|min:5|max:255',
        ]);

        Resep::create([
            'tanggal' => NOW(),
            'nama_resep' => $validation['nama_resep'],
            'resep'    => $validation['resep'],
            'gambar'   => $request->gambar,
            
        ]);

        return redirect('/home');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'cepat lah siap';
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
    public function editResep(Request $request)
    {
        $resep = Resep::find($request->id);

        return view('edit', ['task;' => $resep]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateResep(Request $request)
    {
        $validation = $request->validate([
            'resep' => 'required|min:5|max:255',
        ]);

        Resep::where('id', $request->id)->update([
            'resep' => $validation['resep'],
            'tanggal' => NOW()
        ]);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}