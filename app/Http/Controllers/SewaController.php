<?php

namespace App\Http\Controllers;

use App\Models\sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtsewa = sewa::all();
        return view('Dashboard.mypost', compact('dtsewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.create-mypost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        sewa::create([
            'judul' => $request->judul,
            'jenistmpt' => $request->jenistmpt,
            'alamat' => $request->alamat,
            'jmlhfasilitas' => $request->jmlhfasilitas,
            'plhnfasilitas' => $request->plhnfasilitas,
            'fasilitaslain' => $request->fasilitaslain,
            'foto' => $request->foto,
            'deskripsi' => $request->deskripsi,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga
        ]);

        return redirect('mypost');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
