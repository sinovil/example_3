@extends('layout.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Input Pengaduan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/dasboard') }}">Dasbord</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/pengaduan') }}">Pengaduan</a></li>
                <li class="breadcrumb-item active">Input pengaduan</li>
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
                        <div class="card-body ">
                            <form action="{{ url('pengaduan') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-3 text-right">
                                        <label for="namapengaduan">pengaduan</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <textarea type="text" class="form-control @error ('namapengaduan') is-invalid @enderror" rows="5" id="namapengaduan" name="namapengaduan" value="{{ old('nama_pengaduan') }}"></textarea>
                                    </div>
                                    @error('namapengaduan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3 text-right">
                                        <label for="definisi">Definisi</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <textarea type="text" class="form-control @error ('definisi') is-invalid @enderror" rows="6" id="definisi" name="definisi" value="{{ old('definisi') }}"></textarea>
                                    </div>
                                    @error('definisi')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3 text-right">
                                        <label for="filepengaduan">Upload File pengaduan</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="file" class="form-control @error ('filepengaduan') is-invalid @enderror" id="filepengaduan" name="filepengaduan">
                                        <small id="filepengaduan" class="text-danger">*File harus berupa PDF, max:2500kb</small>
                                    </div>
                                    @error('filepengaduan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="card-footer text-center">
                                    <a href="{{ url('pengaduan') }}" class="btn btn-danger">Batal</a>
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
