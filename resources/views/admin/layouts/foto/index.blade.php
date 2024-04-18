@extends('admin.layouts.main')
  
@section('container')

  <!-- Main Content -->
  <div class="main-content">
    <section class="section">

             <div class="card">
                <div class="card-header">
                  <h4>Foto</h4>
                </div>
                <div class="card-body">
                  <a href="/admin/foto/create" class="btn btn-primary mb-4">Tambah</a>
                  <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Foto</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal unggah</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Album</th>
                      </tr>
                    </thead>
                    <tbody>
          @foreach ($photo as $photo)
           <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $photo->JudulFoto }}</td>
              <td>{{ $photo->DeskripsiFoto }}</td>
              <td>{{ $photo->TanggalUnggah }}</td>
              <td>{{ $photo->LokasiFile }}</td>
              <td>{{ $photo->NamaAlbum }}</td>
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