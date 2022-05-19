<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use File;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisatas = Wisata::all();
        return view('wisatas.index', [
            'wisatas' => $wisatas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisatas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationData = $request->validate([
            'nama' => 'required',
            'gambar' => 'file|image|max:1000',
            'deskripsi' => 'required',
            'bintang' => 'required',
            'harga_disc' => 'required',
            'harga_normal' => 'required',
            'hotel1' => 'required',
            'alamat_hotel1' => 'required',
            'hotel2' => 'required',
            'alamat_hotel2' => 'required',
            'hotel3' => 'required',
            'alamat_hotel3' => 'required',
        ]);

        $wisata = new Wisata();
        $wisata->nama = $validationData['nama'];
        if ($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'BY-' . time() . "." . $extFile;
            $path = $request->gambar->move('assets/gambar', $namaFile);
            $wisata->gambar = $path;
        }
        $wisata->deskripsi = $validationData['deskripsi'];
        $wisata->bintang = $validationData['bintang'];
        $wisata->harga_disc = $validationData['harga_disc'];
        $wisata->harga_normal = $validationData['harga_normal'];
        $wisata->hotel1 = $validationData['hotel1'];
        $wisata->alamat_hotel1 = $validationData['alamat_hotel1'];
        $wisata->hotel2 = $validationData['hotel2'];
        $wisata->alamat_hotel2 = $validationData['alamat_hotel2'];
        $wisata->hotel3 = $validationData['hotel3'];
        $wisata->alamat_hotel3 = $validationData['alamat_hotel3'];
        $wisata->save();

        return redirect()->route('wisata.index')
            ->with('success_message', 'Berhasil menambah data baru');
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
        $wisata = Wisata::find($id);
        if (!$wisata) return redirect()->route('admin.index')
            ->with('error_message', 'data dengan id' . $id . ' tidak ditemukan');
        return view('wisatas.edit', [
            'wisata' => $wisata
        ]);
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
        $validationData = $request->validate([
            'nama' => 'required',
            'gambar' => 'file|image|max:1000',
            'deskripsi' => 'required',
            'bintang' => 'required',
            'harga_disc' => 'required',
            'harga_normal' => 'required',
            'hotel1' => 'required',
            'alamat_hotel1' => 'required',
            'hotel2' => 'required',
            'alamat_hotel2' => 'required',
            'hotel3' => 'required',
            'alamat_hotel3' => 'required',
        ]);

        $wisata = Wisata::find($id);
        $wisata->nama = $validationData['nama'];
        if ($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'BY-' . time() . "." . $extFile;
            $path = $request->gambar->move('assets/gambar', $namaFile);
            File::delete($wisata->gambar); 
            $wisata->gambar = $path;
        }
        $wisata->deskripsi = $validationData['deskripsi'];
        $wisata->bintang = $validationData['bintang'];
        $wisata->harga_disc = $validationData['harga_disc'];
        $wisata->harga_normal = $validationData['harga_normal'];
        $wisata->hotel1 = $validationData['hotel1'];
        $wisata->alamat_hotel1 = $validationData['alamat_hotel1'];
        $wisata->hotel2 = $validationData['hotel2'];
        $wisata->alamat_hotel2 = $validationData['alamat_hotel2'];
        $wisata->hotel3 = $validationData['hotel3'];
        $wisata->alamat_hotel3 = $validationData['alamat_hotel3'];
        $wisata->save();

        return redirect()->route('wisata.index')
            ->with('success_message', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::find($id);

        if ($wisata) $wisata->delete();

        return redirect()->route('wisata.index')
            ->with('success_message', 'Berhasil menghapus data');
    }
}
