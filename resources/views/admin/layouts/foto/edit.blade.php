@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-4 border-bottom">
    <h3>Edit Album</h3>
</div>
<br>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Foto</h4>
        </div>

        <form method="post" action="/admin/foto/{{$photo->FotoID}}" class="mb-5" enctype="multipart/form-data">
          {{ method_field('PUT') }}
            @csrf
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label for="JudulFoto" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Foto</label>
                    <div class="col-sm-12 col-md-7">
                        <input class="form-control @error('JudulFoto') is-invalid @enderror" type="text" id="JudulFoto" name="JudulFoto" value="{{$album->JudulFoto}}">
                    </div>
                </div>
                @error('JudulFoto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        
                <div class="form-group row mb-4">
                    <label for="DeskripsiFoto" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Foto</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea id="DeskripsiFoto" type="hidden" class="summernote-simple" name="DeskripsiFoto">{{$album->DeskripsiFoto}}</textarea>
                        {{-- <script>
                            $(document).ready(function() {
                                $('.summernote-simple').summernote();
                            });
                        </script> --}}
                    </div>
                </div>

                <div class="form-group row mb-4">
                  <label for="TanggalUnggah" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Unggah</label>
                  <div class="col-sm-12 col-md-7">
                      <input type="datetime-local" class="form-control @error('TanggalUnggah') is-invalid @enderror" type="text" id="TanggalUnggah" name="TanggalUnggah" value="{{old('TanggalUnggah', $album->TanggalUnggah)}}">
                  </div>
              </div>
              @error('TanggalUnggah')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror

              <div class="form-group row mb-4">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control @error ('LokasiFile') is-invalid @enderror" id="LokasiFile" name="LokasiFile" type="file" id="formFile">
              </div>

              <div class="form-group row mb-4">
                <label for="Album" class="form-label">Album</label>
                <select class="form-select" name="AlbumID">
                    <option value="">Pilih Album</option>
                    @foreach ($Album as $Album)
                        <option value="{{$Album->AlbumID}}">{{ $Album->NamaAlbum}}</option>
                    @endforeach
                </select>


        
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </form>
        
      </div>
    </div>
  </div>
    
@endsection