<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\temans;

class temansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // membaca data dengan class DB
        //$dta = DB::table('temans')->get();

        // membaca data dengan Model temans
        $dta = temans::all();
        
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
        $dta = $request->validate([
            'nama'=>'required|max:50',
            'alamat'=>'required',
            'kota'=>'required|max:50',
            'telp'=>'required|max:20',
        ]);

        // Simpan data teman dengan menggunakan class DB
        /*
        DB::table('temans')->insert([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'telp'=>$request->telp,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        */

        // Menyimpan data teman dengan Model temans
        temans::create($dta);

        return redirect()->route('temans.index')->with('sukses','Data Berhasil di Tambahkan');
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
        // mencari data berdasarkan id dengan menggunakan class DB
        //$dta = DB::table('temans')->where('id',$id)->first();

        // mencari data berdasarkan id dengan menggunakan Model temans
        $dta = temans::findOrFail($id);
        //$dta = temans::where('id',$id)->first();

        if(!$dta){
            abort(404);
        }
        return view('temans.edit',compact('dta'));
    }

    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request, string $id)
    public function update(Request $request, temans $teman)
    {
        $dta = $request->validate([
            'nama'=>'required|max:50',
            'alamat'=>'required',
            'kota'=>'required|max:50',
            'telp'=>'required|max:20',
        ]);

        //menggunakan class DB
        /*
        DB::table('temans')->where('id',$id)->update([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'telp'=>$request->telp,
            'updated_at'=>now()
        ]);
        */

        //menggunakan Model
        //$dta = temans::findOrFail($id);
        $teman->update( $dta );

        return redirect()->route('temans.index')->with('sukses','Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(string $id)
    public function destroy(temans $teman)
    {
        // Menggunakan class DB
        //DB::table('temans')->where('id',$id)->delete();

        // Menggunakan Model
        //$dta = temans::findOrFail($id);
        //$dta->delete();
        $teman->delete();

        return redirect()->route('temans.index')->with('sukses','Data Berhasil di Hapus');
    }
}
