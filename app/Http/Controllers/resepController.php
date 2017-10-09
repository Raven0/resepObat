<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;
use App\resep;

class resepController extends Controller
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
     
    public function index(Request $request)
    {
        //
        $query = $request->get('search');
        $var = resep::where('NomorResep', 'LIKE', '%' . $query . '%')->orWhere('KodeDkt', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('resep.index', compact('var', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('resep.create');
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
        $var = new resep;
        $var->NomorResep = $request->NomorResep;
        $var->TanggalResep = $request->TanggalResep;
        $var->KodeDkt = $request->KodeDkt;
        $var->KodePsn = $request->KodePsn;
        $var->KodePlk = $request->KodePlk;
        $var->TotalHarga = $request->TotalHarga;
        $var->Bayar = $request->Bayar;
        $var->Kembali = $request->Kembali;
        $var->save();
        return redirect('resep');
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
        $var = resep::find($id);

        if(!$var){
            abort(404);
        }

        return view('resep.single')->with('var', $var);
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
        $var = resep::find($id);
        if(!$var){
            abort(404);
        }

        return view('resep.edit')->with('var', $var);
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
        $var = resep::find($id);
        $var ->NomorResep = $request->NomorResep;
        $var ->TanggalResep = $request->TanggalResep;
        $var ->KodeDkt = $request->KodeDkt;
        $var ->KodePsn = $request->KodePsn;
        $var ->KodePlk = $request->KodePlk;
        $var ->TotalHarga = $request->TotalHarga;
        $var ->Bayar = $request->Bayar;
        $var ->Kembali = $request->Kembali;
        $var ->save();
        return redirect('resep');
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
        $var = resep::find($id);
        $var ->delete();
        return redirect('resep');
    }
}
