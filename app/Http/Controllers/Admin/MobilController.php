<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
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
    public function inputmobil()
    {
        $mobil = Mobil::all();
        return view('admin.mobil.inputmobil', compact('mobil'));
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
            'plat' => 'required',
            'tarif' => 'required',
            'status' => 'required',
        ]);

        $mobil=Mobil::create([
            'nama'=>$request->nama,
            'plat'=>$request->plat,
            'tarif'=>$request->tarif,
            'status'=>$request->status,
        ]);

        return redirect()->route('admin.mobil.inputmobil')->with('status', 'Mobil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function detailmobil()
    {
        $mobil = Mobil::all();
        return view('admin.mobil.detailmobil', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function editmobil(Mobil $mobil)
    {
        return view('admin.mobil.editmobil', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Mobil::where("id", $id)
        ->update([

            'nama' => $request->nama,
            'plat' => $request->plat,
            'tarif' => $request->tarif,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.mobil.editmobil', $id)->with('status', 'Informasi berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        $mobil->delete();
        return redirect()->route('admin.mobil.detailmobil')->with('status', 'Data berhasil dihapus!');
    }
}
