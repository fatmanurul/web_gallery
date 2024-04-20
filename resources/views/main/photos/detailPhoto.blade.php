@extends('main.layouts.main')
  
@section('container')

<div class="container-fluid tm-container-content tm-mt-60">
    @foreach ($we as $photo)
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">Detail Foto : {{ $photo->JudulFoto }}</h2>
    </div>
    <div class="row pb-3">
       
        <div class="row">
            <div class="card">
                <div class="card-header p-4">
                    <h4>Judul Foto : {{$photo->JudulFoto}}</h4>
                </div>
                <div class="card-body text-center">
                  <blockquote class="blockquote mb-0">
                    <p><h5>Deskripsi Foto :{{$photo->Deskripsi}}</h5>
                        <h5>Nama Album : {{$photo->NamaAlbum}}</h5></p>
                    <footer class="blockquote-footer"> <cite title="Source Title">Tanggal Unggah : {{$photo->TanggalUnggah}}</cite></footer>
                  </blockquote>
                </div>
              </div>
           
                  <div class="row">
                    <div class="card-body p-4">
                        <form id="commentForm" method="post" action="" class="mb-5" data-parsley-validate>
                            @csrf
                            <div class="text-center ml-5 mr-5">
                            <h5><b><p style="font-family:Perpetua; color:RGB(160, 97, 36); margin-top:100px;">
                                Tulis Tanggapanmu !
                            </p></b></h5>
                            </div>
                                <small style="line-height:5px"></small>
                                <div class="form-floating mb-3">
                                    <label for="floatingTextarea2">Komentar</label>
                                    <textarea class="form-control @error('cmn_comment') is-invalid @enderror" id="cmn_comment" name="cmn_comment" style="height: 100px" required data-parsley-inputs data-parsley-trigger="keyup">{{ old('cmn_comment') }}</textarea>
                                    @error('cmn_comment')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="floatingInput">Nama</label>
                                    <input type="name" class="form-control @error ('cmn_name') is-invalid @enderror" id="cmn_name" name="cmn_name" value="{{ old('cmn_name') }}" required data-parsley-inputs data-parsley-trigger="keyup">
                                    
                                    @error('cmn_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="floatingInput">Email</label>
                                    <input type="text" class="form-control @error ('cmn_email') is-invalid @enderror" id="cmn_email" name="cmn_email" value="{{ old('cmn_email') }}" required data-parsley-inputs data-parsley-type="email" data-parsley-trigger="keyup">
                                    
                                    @error('cmn_email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <button type="submit" class="btn btn-primary custom-button">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div> 
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
