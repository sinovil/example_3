<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Jenispengaduan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pengaduan $pengaduan)
    {
        $pengaduan = $pengaduan->orderBy('created_at', 'desc')->get();
        return view('pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenispengaduan = Jenispengaduan::all();
        $user = User::all();
        return view('pengaduan.create', compact('jenispengaduan', 'user'));
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
            'namaterlapor' => 'required',
            'nipterlapor' => 'required',
            'jenispengaduan' => 'required',
            'tglkejadian' => 'required',
            'waktukejadian' => 'required',
            'lokasikejadian' => 'required',
            'kronologiskejadian' => 'required',
            'filebukti' => 'required|mimes:pdf,jpeg,png,jpg,bmp,mp4,avi|max:3000',
        ]);

        $filebukti = $request->file('filebukti');
        $namafile = 'fileBukti-' . 'timestamp()' . $filebukti->getClientOriginalName();
        $filebukti->move('fileBukti/', $namafile);

        Pengaduan::create([
            'nama_terlapor' => $request->namaterlapor,
            'nip_terlapor' => $request->nipterlapor,
            'jenis_pengaduan' => $request->jenispengaduan,
            'tgl_kejadian' => $request->tglkejadian,
            'waktu_kejadian' => $request->waktukejadian,
            'lokasi_kejadian' => $request->lokasikejadian,
            'kronologis_kejadian' => $request->kronologiskejadian,
            'status' => '0',
            'file_bukti' => $namafile,
            'id_user' => Auth::user()->id,
        ]);
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
    }
}