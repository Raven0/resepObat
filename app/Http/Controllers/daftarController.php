<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftar;

class daftarController extends Controller
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
        //
        $vars = daftar::all();
        return view('pendaftaran.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
           'tgl' => 'required', 'dok' => 'required', 'pas' => 'required', 'pol' => 'required', 'biaya' => 'required', 'ket' => 'required',
        ]);

        $var = new daftar;
        $var->TanggalPendf = $request->tgl;
        $var->KodeDkt = $request->dok;
        $var->KodePsn = $request->pas;
        $var->KodePlk = $request->pol;
        $var->Biaya = $request->biaya;
        $var->Ket = $request->ket;
        $var->save();
        return redirect('pendaftaran');
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
        $var = daftar::find($id);
        if(!$var){
            abort(404);
        }

        return view('pendaftaran.edit')->with('var', $var);
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
        $this->validate($request, [
           'tgl' => 'required', 'dok' => 'required', 'pas' => 'required', 'pol' => 'required', 'biaya' => 'required', 'ket' => 'required',
        ]);
        $var = daftar::find($id);
        $var->TanggalPendf = $request->tgl;
        $var->KodeDkt = $request->dok;
        $var->KodePsn = $request->pas;
        $var->KodePlk = $request->pol;
        $var->Biaya = $request->biaya;
        $var->Ket = $request->ket;
        $var->save();
        return redirect('pendaftaran');
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
        $var = daftar::find($id);
        $var ->delete();
        return redirect('pendaftaran');
    }
}
