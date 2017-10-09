<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use DB;

class ObatController extends Controller
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

        //$obat=Obat::all();
        // $obat=DB::table('obat')->paginate(1);
        // return view('obat.index', ['obat' => $obat]);

        $query = $request->get('search');
        $obat = Obat::where('KodeObat', 'LIKE', '%' . $query . '%')->orWhere('NamaObat', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('obat.index', compact('obat', 'query'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create');
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
        'NamaObat' => 'required',
        'JenisObat' => 'required',
        'Kategori' => 'required',
        'HargaObat' => 'required',
        'JumlahObat' => 'required',
    ]);

        $obat= new Obat;

        $obat->NamaObat = $request->NamaObat;
        $obat->JenisObat = $request->JenisObat;
        $obat->Kategori = $request->Kategori;
        $obat->HargaObat = $request->HargaObat;
        $obat->JumlahObat = $request->JumlahObat;

        $obat->save();
        return redirect('obat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = Obat::find($id);
        if(!$var){
            abort(404);
        }

        return view('obat.edit')->with('var', $var);

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
        $this->validate($request, [
           'KodeObat'=>'required','NamaObat'=>'required','JenisObat'=>'required','Kategori'=>'required','HargaObat'=>'required','JumlahObat'=>'required'
        ]);

        $var= Obat::find($id);
         $var->KodeObat=$request->KodeObat;
         $var->NamaObat=$request->NamaObat;
         $var->JenisObat=$request->JenisObat;
         $var->Kategori=$request->Kategori;
         $var->HargaObat=$request->HargaObat;
         $var->JumlahObat=$request->JumlahObat;

        $var->save();
        return redirect('obat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var=Obat::find($id);
        $var->delete();
        return redirect('obat');
    }
}
