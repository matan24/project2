<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Input;
use App\Models\Rental;
use Illuminate\Http\Request;

class InputrentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datarental()
    {

         $rental = Rental::selectRaw("
         rental.nama as nama,
         rental.alamat as alamat,
         rental.tujuan as tujuan,
         wakturental.waktu as lama_proses,
         rental.mobil as mobil,
         rental.no as no,
         rental.email as email,
         wakturental.nama as jenis
         ")->join("wakturental","rental.id_input","=","wakturental.id")
         ->orderBy("wakturental.waktu","DESC")
         ->get();

        return view('admin.datarental', compact('rental'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {
        $input = Input::all();
        return view('admin.inputrental', compact('input'));
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
            'nama' => 'required',
            'waktu' => 'required',                  
        ]);

        $input=Input::create([
            'nama'=>$request->nama,
            'waktu'=>$request->waktu,
        ]);

        return redirect()->route('admin.inputrental')->with('status', 'Anda berhasil mendaftar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function showinput()
    {
        $input = Input::all();
        return view('admin.showinput', compact('input'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function editrental(Input $input)
    {
        return view('admin.editrental', compact('input'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Input::where("id", $id)
        ->update([

            'nama' => $request->nama,
            'waktu' => $request->waktu,

        ]);
      
        return redirect()->route('admin.editrental', $id)->with('status', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Input  $input
     * @return \Illuminate\Http\Response
     */
    public function destroy(Input $input)
    {
        $input->delete();
        return redirect()->route('admin.showinput')->with('status', 'Data dihapus!');
    }
}
