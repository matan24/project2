<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data;
use App\Models\Input;
use App\Models\Rental;
use Illuminate\Http\Request;

class DatarentalController extends Controller
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
    public function datarental()
    {

         $rental = Rental::selectRaw("
         rental.nama as nama,
         rental.alamat as alamat,
         rental.tujuan as tujuan,
         rental.tanggal as tanggal,
         wakturental.waktu as lama_proses,
         rental.mobil as mobil,
         rental.plat as plat,
         rental.harga as harga,
         rental.no as no,
         rental.image as image,
         rental.email as email,
         rental.denda as denda,
         rental.sewa as sewa,
         rental.selesai as selesai,
         wakturental.nama as jenis
         ")->join("wakturental","rental.id_input","=","wakturental.id")
         ->orderBy("wakturental.waktu","DESC")
         ->get();

        return view('admin.datarental', compact('rental'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function showlaporan(Data $data)
    {
        $rental = Rental::selectRaw("
        rental.id as id,
        rental.nama as nama,
        rental.alamat as alamat,
        rental.tujuan as tujuan,
        rental.tanggal as tanggal,
        wakturental.waktu as lama_proses,
        rental.mobil as mobil,
        rental.plat as plat,
        rental.harga as harga,
        rental.no as no,
        rental.image as image,
        rental.email as email,
        rental.denda as denda,
        rental.sewa as sewa,
        rental.selesai as selesai,
        wakturental.nama as jenis
        ")->join("wakturental","rental.id_input","=","wakturental.id")
        ->orderBy("wakturental.waktu","DESC")
        ->get();

        return view('admin.detaillaporan', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function editlaporan($id)
    {
        $rental = Rental::find($id);
       return view('admin.editlaporan',compact("rental"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function updatelaporan(Request $request, $id)
    {
        Rental::where("id", $id)
        ->update([
            'denda' => $request->denda,
            'sewa' => $request->sewa, 
            'selesai' => $request->selesai,

        ]);
      
        return redirect()->route('admin.editlaporan', $id)->with('status', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('admin.detaillaporan')->with('status', 'Data dihapus!');
    }
}
