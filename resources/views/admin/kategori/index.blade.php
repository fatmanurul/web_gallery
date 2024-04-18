@extends('admin.layouts.main')
  
@section('container')

  <!-- Main Content -->
  <div class="main-content">
    <section class="section">

             <div class="card">
                <div class="card-header">
                  <h4>Album</h4>
                </div>
                <div class="card-body">
          @if(session()->has('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
          @endif
                  <a href="/admin/album/create" class="btn btn-primary mb-4">Tambah</a>
                  <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama album</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal dibuat</th>
                      </tr>
                    </thead>
                    <tbody>
          @foreach ($album as $album)
           <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $album->NamaAlbum }}</td>
              <td>{{ $album->Deskripsi }}</td>
              <td>{{ $album->TanggalDibuat }}</td>
            </tr>
            @endforeach
                    </tbody>
                  </table>
                </div>
              </div>


        </div>
    </section>
  </div>

@endsection