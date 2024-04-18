@extends('main.layouts.main')
  
@section('container')
            <div class="container-fluid tm-container-content tm-mt-60">
                <div class="row mb-4">
                    <h2 class="col-6 tm-text-primary">
                        Photos
                    </h2>
                </div>
            

                <div class="row pb-3">
                    @foreach ($photo as $photo)
                    <div class="col-lg-4 mb-4">
                      <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{asset('storage/images/photo-images/'.$photo->LokasiFile)}}" alt="" style="width: 100%;" />
                        <div class="card-body bg-light text-center p-4">
                          <h4>{{$photo->JudulFoto}}</h4>
                          <div class="d-flex justify-content-center mb-3">
                            <small class="mr-3"><i class="fa-regular fa-user"></i> {{$photo->user->username}}</small>
                            <small class="mr-3"><i class="fa-regular fa-folder"></i> {{ $photo->NamaAlbum }}</small>
                            <small class="mr-3"><i class="fa-regular fa-comment"></i> 15</small>
                            <small class="mr-3"><i class="fa-regular fa-heart"></i> 15</small>
                          </div>
                          <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
                  
@endsection
