<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = pegawai::latest()->paginate(5);
  
        return view('pegawais.index',compact('pegawais'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawais.create');
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
            //'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            
        ]);
  
        pegawai::create($request->all());
   
        return redirect()->route('pegawais.index')
                        ->with('success','Detail Pinjam created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawais.show',compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawais.edit',compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            // 'id_pegawai' => 'required',
            //'id_pegawai' => 'required',
            'nama_pegawai' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
        ]);
  
        $pegawai->update($request->all());
  
        return redirect()->route('pegawais.index')
                        ->with('success','Detail Pinjam updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
  
        return redirect()->route('pegawais.index')
                        ->with('success','Detail Pinjam deleted successfully');
    }
}
