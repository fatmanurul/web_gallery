@extends('main.layouts.main')
  
@section('container')

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">Detail Album</h2>
    </div>

    <div class="row pb-3">
        @foreach ($photos as $photo)
        <div class="card">
          <div class="card-header p-4">
              <h4>Judul Album : {{$photo->NamaAlbum}}</h4>
          </div>
          <div class="card-body text-center">
            <blockquote class="blockquote mb-0">
              <p><h5>Deskripsi Album :{{$photo->Deskripsi}}</h5>
              <footer class="blockquote-footer"> <cite title="Source Title">Tanggal Unggah : {{$photo->TanggalDibuat}}</cite></footer>
            </blockquote>
          </div>
      </div>
        

        <div class="col-lg-4 mb-4">
          <div class="card border-0 shadow-sm mb-2">
            <img class="card-img-top mb-2" src="{{asset('storage/images/photo-images/'.$photo->LokasiFile)}}" alt="" style="width: 100%;" />
            <div class="card-body bg-light text-center p-4">
              {{-- <h4>{{$photo->JudulFoto}}</h4> --}}
              <div class="d-flex justify-content-center mb-3">
              </div>
              {{-- <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a> --}}
            </div>
          </div>
        </div>
        @endforeach
    </div>

@endsection