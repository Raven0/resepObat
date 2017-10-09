<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poliklinik;

class poliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vars = Poliklinik::all();
         return view('poliklinik.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('poliklinik.create');
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
          'NamaPlk' => 'required',
       ]);

       $var = new Poliklinik;
       $var->NamaPlk = $request->NamaPlk;
       $var->save();
       return redirect('poli');
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
        $var = Poliklinik::find($id);
       if(!$var){
           abort(404);
       }

       return view('poliklinik.edit')->with('var', $var);
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
           'NamaPlk' => 'required'
        ]);

        $var = Poliklinik::find($id);
        $var ->NamaPlk= $request->NamaPlk;
        $var ->save();
        return redirect('poli');
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
        $var = Poliklinik::find($id);
        $var ->delete();
        return redirect('poli');
    }
}
