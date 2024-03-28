@extends('admin.layouts.main')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
@section('container')

  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
             <div class="card">
                <div class="card-header">
                  <h4>Tambah Foto</h4>
                </div>
                <div class="mb-3 ml-4 mr-4">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="formFile">
                  </div>
                  <div class="mb-3 ml-4 mr-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <div class="mb-3 mt-4 ml-4 mr-4">
                        <label for="formFile" class="form-label">Tanggal Unggah</label>
                        <input type="datetime-local" name="finished" class="form-control">
                    </div>
                  </div>
                <div class="card-body">
                    <label for="formFile" class="form-label"></label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  <a href="/admin/foto" class="btn btn-warning" style="color: white">kembali</a>
                  <a href="/admin/foto/create" class="btn btn-primary mb-4 mt-4">Tambah</a>
                </div>
              </div>


        </div>
    </section>
  </div>

@endsection