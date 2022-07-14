@extends('layout.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jenis Pengaduan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/dasboard') }}">Dasbord</a></li>
              <li class="breadcrumb-item active">Jenis Pengaduan</li>
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
                            <a href="jenispengaduan/create" class="btn btn-outline-primary" title="Tambah Jenis Pengaduan"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-hover table-bordered table-responsive-sm">
                                <thead>
                                    <tr class="text-center bg-secondary">
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Pengaduan</th>
                                        <th scope="col">Definisi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($jenispengaduan as $jenis)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $jenis->jenis_pengaduan }}</td>
                                            <td>{{ $jenis->definisi }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('jenispengaduan/edit', $jenis->id) }}" class="btn btn-success"><i class="far fa-edit"></i></a>
                                                <form action="{{ url('jenispengaduan/delete', $jenis->id) }}" method="POST" class="d-inline">
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





