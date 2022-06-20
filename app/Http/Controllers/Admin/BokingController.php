<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Boking;
use App\Models\Rental;
use App\Models\Input;
use Illuminate\Http\Request;

class BokingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inputboking()
    {
        $rental = Rental::selectRaw("
        rental.nama as nama,
        rental.alamat as alamat,
        rental.tujuan as tujuan,
        rental.tanggal as tanggal,
        wakturental.waktu as lama_proses,
        rental.mobil as mobil,
        rental.no as no,
        rental.email as email,
        rental.image as image,
        wakturental.nama as jenis
        ")->join("wakturental","rental.id_input","=","wakturental.id")
        ->orderBy("wakturental.waktu","DESC")
        ->get();

        $input = Input::all();
        $boking = Boking::all();
        return view('admin.boking.inputboking', compact('rental', 'input', 'boking'));
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
            'no' => 'required',  
            'mobil' => 'required',     
            'plat' => 'required',     
            'tanggal' => 'required',                     
            'waktu' => 'required',                     
            'harga' => 'required',                     
            'denda' => 'required',                     
            'pembayaran' => 'required',                     
        ]);

        $boking=Boking::create([
            'nama'=>$request->nama,
            'no'=>$request->no,
            'mobil'=>$request->mobil,
            'plat'=>$request->plat,
            'tanggal'=>$request->tanggal,
            'waktu'=>$request->waktu,
            'harga'=>$request->harga,
            'denda'=>$request->denda,
            'pembayaran'=>$request->pembayaran,
        
        ]);

        return redirect()->route('admin.boking.inputboking')->with('status', 'Data Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boking  $boking
     * @return \Illuminate\Http\Response
     */
    public function detailboking()
    {
        $boking = Boking::all();
        return view('admin.boking.detailboking', compact('boking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boking  $boking
     * @return \Illuminate\Http\Response
     */
    public function editboking(Boking $boking)
    {
        return view('admin.boking.editboking', compact('boking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boking  $boking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Boking::where("id", $id)
        ->update([

            'nama' => $request->nama,
            'no' => $request->no,
            'mobil' => $request->mobil,
            'plat' => $request->plat,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'harga' => $request->harga,
            'denda' => $request->denda,
            'pembayaran' => $request->pembayaran,

        ]);
      
        return redirect()->route('admin.boking.editboking', $id)->with('status', 'Laporan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boking  $boking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boking $boking)
    {
        $boking->delete();
        return redirect()->route('admin.boking.detailboking')->with('status', 'Laporan Berhasil dihapus!');
    }
}
