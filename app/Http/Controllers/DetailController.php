<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use DB;

class DetailController extends Controller
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
        //$detail = Detail::all();
        // $detail=DB::table('detail')->paginate(10);
        // return view('detail.index', ['detail' => $detail]);

        $query = $request->get('search');
        $detail = Detail::where('NomorResep', 'LIKE', '%' . $query . '%')->orWhere('KodeObat', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('detail.index', compact('detail', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detail.create');
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
        'NomorResep' => 'required',
        'KodeObat' => 'required',
        'Harga' => 'required',
        'Dosis' => 'required',
        'SubTotal' => 'required',
    ]);

        $detail= new Detail;

        $detail->NomorResep = $request->NomorResep;
        $detail->KodeObat = $request->KodeObat;
        $detail->Harga = $request->Harga;
        $detail->Dosis = $request->Dosis;
        $detail->SubTotal = $request->SubTotal;

        $detail->save();
        return redirect('detail');

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
        //$detail = Detail::find($id);
        $var = Detail::find($id);
        if(!$var){
            abort(404);
        }

        return view('detail.edit')->with('var', $var);

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
           'NomorResep'=>'required','KodeObat'=>'required','Harga'=>'required','Dosis'=>'required','SubTotal'=>'required'
        ]);

        $var= Detail::find($id);
         $var->NomorResep=$request->NomorResep;
         $var->KodeObat=$request->KodeObat;
         $var->Harga=$request->Harga;
         $var->Dosis=$request->Dosis;
         $var->SubTotal=$request->SubTotal;
        $var ->save();
        return redirect('detail');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var=Detail::find($id);
        $var->delete();
        return redirect('detail');
    }
}
