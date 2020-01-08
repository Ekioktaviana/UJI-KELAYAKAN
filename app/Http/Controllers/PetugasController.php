<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_pinjams = Detail_pinjam::latest()->paginate(5);
  
        return view('detail_pinjams.index',compact('detail_pinjams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detail_pinjams.create');
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
            // 'id_detail_pinjam' => 'required',
            'id_inventaris' => 'required',
            'jumlah' => 'required',
            
        ]);
  
        Detail_pinjam::create($request->all());
   
        return redirect()->route('detail_pinjams.index')
                        ->with('success','Detail Pinjam created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas)
    {
        return view('detail_pinjams.show',compact('detail_pinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Petugas $petugas)
    {
        return view('detail_pinjams.edit',compact('detail_pinjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petugas $petugas)
    {
        $request->validate([
            // 'id_detail_pinjam' => 'required',
            'id_inventaris' => 'required',
            'jumlah' => 'required',
        ]);
  
        $detail_pinjam->update($request->all());
  
        return redirect()->route('detail_pinjams.index')
                        ->with('success','Detail Pinjam updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petugas $petugas)
    {
        $detail_pinjam->delete();
  
        return redirect()->route('detail_pinjams.index')
                        ->with('success','Detail Pinjam deleted successfully');
    }
}
