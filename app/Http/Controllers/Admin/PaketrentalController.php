<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketrentalController extends Controller
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
    public function inputinfo()
    {
        $paket = Paket::all();
        return view('admin.informasi.inputinfo', compact('paket'));
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
            'judul' => 'required',
            'harga' => 'required',
            'waktu' => 'required',
            'keterangan' => 'required',
        ]);

        $paket=Paket::create([
            'judul'=>$request->judul,
            'harga'=>$request->harga,
            'waktu'=>$request->waktu,
            'keterangan'=>$request->keterangan,
        ]);

        return redirect()->route('admin.informasi.inputinfo')->with('status', 'Informasi ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function showinfo()
    {
        $paket = Paket::all();
        return view('admin.informasi.showinfo', compact('paket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function editpaket(Paket $paket)
    {
        return view('admin.informasi.editpaket', compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Paket::where("id", $id)
        ->update([

            'judul' => $request->judul,
            'harga' => $request->harga,
            'waktu' => $request->waktu,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.informasi.editpaket', $id)->with('status', 'Informasi berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        $paket->delete();
        return redirect()->route('admin.informasi.showinfo')->with('status', 'Data berhasil dihapus!');
    }
}
