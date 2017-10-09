<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bayar;

class bayarController extends Controller
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
        // //
        // $vars = bayar::all();
        // return view('pembayaran.index',['var' => $vars]);

        $query = $request->get('search');
        $var = bayar::where('NomorByr', 'LIKE', '%' . $query . '%')->orWhere('KodePsn', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('pembayaran.index', compact('var', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pembayaran.create');
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
           'pas' => 'required', 'tgl' => 'required', 'bay' => 'required',
        ]);

        $var = new bayar;
        $var->KodePsn = $request->pas;
        $var->TanggalByr = $request->tgl;
        $var->JumlahByr = $request->bay;
        $var->save();
        return redirect('pembayaran');
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
        //Find primaryKey kalau belum di set di model
        //$var = bayar::where('NomorByr',$id)->firstOrFail();
        $var = bayar::find($id);
        if(!$var){
            abort(404);
        }

        return view('pembayaran.edit')->with('var', $var);
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
           'pas' => 'required', 'tgl' => 'required', 'bay' => 'required',
        ]);

        $var = bayar::find($id);
        $var->KodePsn = $request->pas;
        $var->TanggalByr = $request->tgl;
        $var->JumlahByr = $request->bay;
        $var ->save();

        // Kodingan kalau primaryKey belum di set di model
        // bayar::where('NomorByr', $id)
        //             ->update(['KodePsn' => $request->pas, 'TanggalByr' => $request->tgl, 'JumlahByr' => $request->bay]);

        return redirect('pembayaran');
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
        $var = bayar::find($id);
        $var ->delete();
        return redirect('pembayaran');
    }
}
