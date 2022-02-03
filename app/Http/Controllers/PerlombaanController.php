<?php

namespace App\Http\Controllers;

use App\Perlombaan;
use App\Kategori;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PerlombaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perlombaans = Perlombaan::latest()->paginate(5);
  
        return view('perlombaans.index',compact('perlombaans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::orderBy('jenislomba','ASC')
        ->get()
        ->pluck('jenislomba','id');
        return view('perlombaans.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jeniskelamin' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
        ]);
  
        Perlombaan::create($request->all());
   
        return redirect()->route('perlombaans.index')
                        ->with('success','Peserta Lomba Berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perlombaan  $perlombaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perlombaan $perlombaan)
    {
        return view('perlombaans.show',compact('perlombaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perlombaan  $perlombaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perlombaan $perlombaan)
    {
        
        return view('perlombaans.edit',compact('perlombaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perlombaan  $perlombaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perlombaan $perlombaan)
    {
        $request->validate([
            'name' => 'required',
            'jeniskelamin' => 'required',
            'jenislomba' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
        ]);
  
        $perlombaan->update($request->all());
  
        return redirect()->route('perlombaans.index')
                        ->with('success','Peserta Lomba Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perlombaan  $perlombaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perlombaan $perlombaan)
    {
        $perlombaan->delete();
  
        return redirect()->route('perlombaans.index')
                        ->with('success','Peserta Lomba Berhasil di Hapus');
    }
}
