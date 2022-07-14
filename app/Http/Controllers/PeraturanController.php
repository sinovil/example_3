<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peraturan;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peraturan = Peraturan::all();
        return view('peraturan.index', compact('peraturan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peraturan.create');
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
            'namaperaturan' => 'required',
            'definisi' => 'required',
            'fileperaturan' => 'required|mimes:pdf|max:2500',
        ]);

        $fileperaturan = $request->file('fileperaturan');
        $namafile = 'filePeraturan-' . $fileperaturan->getClientOriginalName();
        $fileperaturan->move('filePeraturan/', $namafile);

        Peraturan::create([
            'nama_peraturan' => $request->namaperaturan,
            'definisi' => $request->definisi,
            'file_peraturan' => $namafile,
        ]);

        return redirect()->intended('peraturan')->with('status', 'Data berhasil ditambahkan');
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
        $peraturan = Peraturan::find($id);
        return view('peraturan.edit', compact('peraturan'));
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
            'namaperaturan' => 'required',
            'definisi' => 'required',
            'fileperaturan' => 'required|mimes:pdf|max:2500',
        ]);

        if (!$request->fileperaturan) {
            $fileperaturan = $request->fileLama;
        } else {
            @unlink(public_path('fileperaturan/' . $request->fileLama));
            $fileperaturan = $request->file('fileperaturan');
            $namafile = 'filePeraturan-' . $fileperaturan->getClientOriginalName();
            $fileperaturan->move('filePeraturan', $namafile);
            $fileperaturan = $namafile;
        }

        Peraturan::find($id)->update([
            'nama_peraturan' => $request->namaperaturan,
            'definisi' => $request->definisi,
            'file_peraturan' => $namafile,
        ]);

        return redirect()->intended('peraturan')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $peraturan = Peraturan::findorfail($id);
        $fileperaturan = public_path('fileperaturan/') . $peraturan->file_peraturan;
        if (file_exists($fileperaturan)) {
            unlink($fileperaturan);
        }
        if (Peraturan::destroy($id)) {
            $request->session()->flash('status', 'Data berhasil dihapus');
            return redirect()->intended('peraturan')->with('status', 'Data berhasil dihapus');
        } else {
            $request->session()->flash('status', 'Data gagal dihapus');
            return redirect()->intended('peraturan')->with('status', 'Data gagal dihapus');
        }
    }
}