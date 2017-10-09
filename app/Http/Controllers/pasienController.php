<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;

class pasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vars = pasien::all();
         return view('pasien.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pasien.create');
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
        $var = new pasien;
        $var->KodePsn = $request->KodePsn;
        $var->NamaPsn = $request->NamaPsn;
        $var->AlamatPsn = $request->AlamatPsn;
        $var->GenderPsn = $request->GenderPsn;
        $var->UmurPsn = $request->UmurPsn;
        $var->TeleponPsn = $request->TeleponPsn;
        $var->save();
        return redirect('pasien');
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
        $var = pasien::find($id);

        if(!$var){
            abort(404);
        }

        return view('pasien.single')->with('var', $var);
        
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
        $var = pasien::find($id);
        if(!$var){
            abort(404);
        }
        
        return view('pasien.edit')->with('var', $var);
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
        $var = pasien::find($id);
        $var->NamaPsn = $request->NamaPsn;
        $var->AlamatPsn = $request->AlamatPsn;
        $var->GenderPsn = $request->GenderPsn;
        $var->UmurPsn = $request->UmurPsn;
        $var->TeleponPsn = $request->TeleponPsn;
        $var ->save();
        return redirect('pasien');
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
        $var = pasien::find($id);
        $var ->delete();
        return redirect('pasien');
    }
}
