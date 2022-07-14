@extends('layout.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">PERATURAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/dasboard') }}">Dasbord</a></li>
              <li class="breadcrumb-item active">Peraturan</li>
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
                        <div class="card-header text-right">
                            <a href="peraturan/create" class="btn btn-outline-primary" title="Tambah aturan Pengaduan"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-hover table-bordered table-responsive-sm">
                                <thead>
                                    <tr class="text-center bg-secondary">
                                        <th scope="col">No</th>
                                        <th scope="col">Peraturan</th>
                                        <th scope="col">Definisi</th>
                                        <th scope="col">File</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($peraturan as $aturan)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $aturan->nama_peraturan }}</td>
                                            <td>{{ $aturan->definisi }}</td>
                                            <td class="text-center"><a href="{{ asset('/filePeraturan/'. $aturan->file_peraturan) }}" target="_blank" class="btn btn-warning" title="Lihat File"><i class="fas fa-eye"</td>
                                            <td class="text-center">
                                                <a href="{{ url('peraturan/edit', $aturan->id) }}" class="btn btn-success"><i class="far fa-edit"></i></a>
                                                <form action="{{ url('peraturan/delete', $aturan->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Kahhhh...?')"><i class="far fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <h2>Tidak ada Data</h2>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection





