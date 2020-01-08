<?php

namespace App\Http\Controllers;

use App\Inventari;
use Illuminate\Http\Request;

class InventariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris = Inventari::latest()->paginate(5);
  
        return view('inventaris.index',compact('inventaris'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventaris.create');
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
            //'id_inventaris' => 'required',
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'tanggal_register' => 'required',
            'id_ruang' => 'required',
            'kode_inventaris' => 'required',
            'id_petugas' => 'required',
            
        ]);
  
        inventaris::create($request->all());
   
        return redirect()->route('inventaris.index')
                        ->with('success','Detail Pinjam created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventari  $inventari
     * @return \Illuminate\Http\Response
     */
    public function show(Inventari $inventari)
    {
        return view('inventaris.show',compact('inventaris'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventari  $inventari
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventari $inventari)
    {
        return view('inventaris.edit',compact('inventaris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventari  $inventari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventari $inventari)
    {
        $request->validate([
            //'id_inventaris' => 'required',
            'nama' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
            'id_jenis' => 'required',
            'tanggal_register' => 'required',
            'id_ruang' => 'required',
            'kode_inventaris' => 'required',
            'id_petugas' => 'required',
        ]);
        $inventaris->update($request->all());
  
        return redirect()->route('inventaris.index')
                        ->with('success','Inventaris updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventari  $inventari
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventari $inventari)
    {
        $inventaris->delete();
  
        return redirect()->route('inventaris.index')
                        ->with('success','Inventaris deleted successfully');
    }
}
