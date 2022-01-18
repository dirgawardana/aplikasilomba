<?php

namespace App\Http\Controllers;

use App\Lomba;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lombas = Lomba::latest()->paginate(5);
  
        return view('lombas.index',compact('lombas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lombas.create');
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
  
        Lomba::create($request->all());
   
        return redirect()->route('lombas.index')
                        ->with('success','Lomba created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function show(Lomba $lomba)
    {
        return view('lombas.show',compact('lomba'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function edit(Lomba $lomba)
    {
        return view('lombas.edit',compact('lomba'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lomba $lomba)
    {
        $request->validate([
            'name' => 'required',
            'jeniskelamin' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
        ]);
  
        $lomba->update($request->all());
  
        return redirect()->route('lombas.index')
                        ->with('success','Lomba updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lomba  $lomba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lomba $lomba)
    {
        $lomba->delete();
  
        return redirect()->route('lombas.index')
                        ->with('success','Lomba deleted successfully');
    }
}
