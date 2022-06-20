<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use App\Models\Input;
use App\Models\Paket;
use App\Models\Mobil;
use App\Models\Boking;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 
    public function paket()
    {
        $paket = Paket::all();
        return view('user.paketrental', compact('paket'));
    }

    public function pilihan()
    {
        $mobil = Mobil::all();
        return view('user.jenismobil', compact('mobil'));
    }

    public function daftarboking()
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

        $boking = Boking::all();
        return view('user.mobilboking', compact('boking', 'rental'));
    }

    public function informasirental()
    {
        $rental = Rental::selectRaw("
        rental.nama as nama,
        rental.alamat as alamat,
        rental.tujuan as tujuan,
        wakturental.waktu as lama_proses,
        rental.mobil as mobil,
        rental.no as no,
        rental.email as email,
        rental.image as image,
        wakturental.nama as jenis
        ")->join("wakturental","rental.id_input","=","wakturental.id")
        ->orderBy("wakturental.waktu","DESC")
        ->get();

        return view('user.informasirental', compact('rental'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createrental()
    {
        $input = Input::all();
        $rental = Rental::with('input')->get(); 
        
        return view('user.rental', compact('input', 'rental'));
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
            'alamat' => 'required',
            'tujuan' => 'required',
            'tanggal' => 'required',      
            'id_input' => 'required',
            'mobil' => 'required',
            'no' => 'required',   
            'email' => 'required',
            // validatenya haru image kalau gak error
            'image' => 'image|file'                        
        ]);

        if($request->file('image')) {
            $path = $request->file('image')->store('post-images');
        }

        $result = explode('|',$request->mobil);
        $plat = $result[0];
        $mobil = $result[1];
        $harga =  $result[2];

        // dd($plat,$mobil,$harga);

        $rental=Rental::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'tujuan'=>$request->tujuan,
            'tanggal'=>$request->tanggal,
            'id_input'=>$request->id_input,
            'mobil'=>$mobil,
            'plat'=>$plat,
            'harga'=>(int)$harga,
            'no'=>$request->no,
            'email'=>$request->email,   
            'image'=> $path, 
            'denda'=> 0,   
            'sewa'=> 0,
            'selesai'=> 0,      
        ]);

        return redirect()->route('user.rental')->with('status', 'anda berhasil mendaftar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rental $rental)
    {
        //
    }
}
