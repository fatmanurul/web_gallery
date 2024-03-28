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
                        <th scope="col">Foto</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Tanggal unggah</th>
                        <th scope="col">Kategori</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>


        </div>
    </section>
  </div>

@endsection