@extends('layout.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit PERATURAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/dasboard') }}">Dasbord</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/peraturan') }}">Peraturan</a></li>
                <li class="breadcrumb-item active">Edit Peraturan</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">

                        <div class="card-body">
                            <form action="{{ url('peraturan/update', $peraturan->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-3 text-right">
                                        <label for="namaperaturan">Peraturan</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <textarea type="text" class="form-control @error ('namaperaturan') is-invalid @enderror" rows="5" id="namaperaturan" name="namaperaturan" value="{{ $peraturan->namaperaturan }}">{{ $peraturan->nama_peraturan }}</textarea>
                                    </div>
                                    @error('namaperaturan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3 text-right">
                                        <label for="definisi">Definisi</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <textarea type="text" class="form-control @error ('definisi') is-invalid @enderror" rows="6" id="definisi" name="definisi" value="{{ $peraturan->definisi }}">{{ $peraturan->definisi }}</textarea>
                                    </div>
                                    @error('definisi')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3 text-right">
                                        <label for="fileperaturan">Upload File Peraturan</label>
                                    </div>
                                    <input type="hidden" name="fileLama" value="{{ $peraturan->file_peraturan }}">
                                    <div class="form-group col-md-6">
                                        <p>File Lama : {{ $peraturan->file_peraturan }}</p>
                                        <input type="file" class="form-control @error ('fileperaturan') is-invalid @enderror" id="fileperaturan" name="fileperaturan">
                                        <small id="fileperaturan" class="text-danger">*File harus berupa PDF, max:2500kb</small>
                                    </div>
                                    @error('fileperaturan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="card-footer text-center">
                                    <a href="{{ url('peraturan') }}" class="btn btn-danger">Batal</a>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection
