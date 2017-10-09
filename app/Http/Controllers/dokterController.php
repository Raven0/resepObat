<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;

class dokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dokter = dokter::all();
        return view('dokter.index',['dokter' => $dokter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'nama' => 'required',
           'spesialis' => 'required',
           'almt' => 'required',
           'tlpn' => 'required',
           'kodeplk' => 'required',
           'trf' => 'required',
        ]);

        $dokter = new dokter;
        $dokter->Namadkt = $request->nama;
        $dokter->Spesialis = $request->spesialis;
        $dokter->Alamatdkt = $request->almt;
        $dokter->Telepondkt = $request->tlpn;
        $dokter->KodePlk = $request->kodeplk;
        $dokter->Tarif = $request->trf;
        $dokter->save();
        return redirect('dokter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokter = dokter::find($id);
        return view('dokter.single')->with('dokter', $dokter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = dokter::find($id);
        if(!$dokter){
            abort(404);
        }
        return view('dokter.edit')->with('dokter', $dokter);
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
        $dokter = dokter::find($id);
        $dokter->NamaDkt = $request->nama;
        $dokter->Spesialis = $request->spesialis;
        $dokter->AlamatDkt = $request->alamat;
        $dokter->TeleponDkt = $request->telepon;
        $dokter->KodePlk = $request->kodeplk;
        $dokter->Tarif = $request->tarif;
        $dokter->save();
        return redirect('dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = dokter::find($id);
        $dokter->delete();
        return redirect('dokter');
    }
}
