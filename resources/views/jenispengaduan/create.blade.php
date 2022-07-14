@extends('layout.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Input Jenis Pengaduan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/dasboard') }}">Dasbord</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/jenispengaduan') }}">Jenis Pengaduan</a></li>
                <li class="breadcrumb-item active">Input Jenis Pengaduan</li>
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
                            <form action="{{ url('jenispengaduan') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-3 text-right">
                                        <label for="jenispengaduan">Jenis Pengaduan</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control @error ('jenispengaduan') is-invalid @enderror" id="jenispengaduan" name="jenispengaduan" value="{{ old('jenis_pengaduan') }}">
                                    </div>
                                    @error('jenispengaduan')<div class="invalid-feedback">{{ $message }}</div>@enderror
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

                                <div class="card-footer text-center">
                                    <a href="{{ url('jenispengaduan') }}" class="btn btn-danger">Batal</a>
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
