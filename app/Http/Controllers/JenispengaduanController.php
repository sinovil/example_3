<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenispengaduan;

use function PHPUnit\Framework\returnSelf;

class JenispengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenispengaduan = Jenispengaduan::all();
        return view('jenispengaduan.index', compact('jenispengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenispengaduan.create');
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
            'jenispengaduan' => 'required',
            'definisi' => 'required',
        ]);

        Jenispengaduan::create([
            'jenis_pengaduan' => $request->jenispengaduan,
            'definisi' => $request->definisi,
        ]);

        return redirect()->intended('jenispengaduan')->with('status', 'Data berhasil ditambahkan');
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
        $jenispengaduan = Jenispengaduan::find($id);
        return view('jenispengaduan.edit', compact('jenispengaduan'));
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
        $request->validate([
            'jenispengaduan' => 'required',
            'definisi' => 'required',
        ]);
        Jenispengaduan::find($id)->update([
            'jenis_pengaduan' => $request->jenispengaduan,
            'definisi' => $request->definisi,
        ]);
        return redirect()->intended('jenispengaduan')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jenispengaduan::find($id)->delete();
        return redirect()->intended('jenispengaduan')->with('status', 'Data berhasil dihapus');
    }
}