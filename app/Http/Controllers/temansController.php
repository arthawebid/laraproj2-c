<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class temansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dta = DB::table('temans')->get();
        return view('temans.index', compact('dta') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('temans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|max:50',
            'alamat'=>'required',
            'kota'=>'required|max:50',
            'telp'=>'required|max:20',
        ]);

        DB::table('temans')->insert([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'telp'=>$request->telp,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        return redirect()->route('temans.index')->with('sukses','Data Berhasil ditambahkan');
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
