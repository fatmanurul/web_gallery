@extends('main.layouts.main')
  
@section('container')
            <div class="container-fluid tm-container-content tm-mt-60">
                <div class="row mb-4">
                    <h2 class="col-6 tm-text-primary">
                        Photos
                    </h2>
                </div>

            @foreach($photo as $photo)
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card" style="height: 900px; width: 700px">
                          <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0,0.7)">
                         
                                 <a href="#" class="text-white text-decoration-none">{{$photo->NamaAlbum}}</a></div>
                                 <img src="{{asset('storage/images/photo-images/'.$photo->LokasiFile)}}"  style="height: 700px; width: 700px" class="card-img-top" alt="...">
                                 <div class="card-body">
                                         <div class="card-title" style="font-family:Lucida Bright;"><h4>{{asset('storage/'.$photo->JudulFoto) }}</h4></div>
                                         {{-- <div class="card-title">
                                         <small>{{ \Carbon\Carbon::parse($articles->art_created_at)->diffForHumans() }}</small>
                                         </div>  --}}
                                         <small style="font-family:Verdana;">{{ $photo->DeskripsiFoto }}</small>
                                 </div>
                
                                 {{-- <div class="card-footer">
                                 <a href="/articles/{{$articles->art_slug}}" class="btn btn-primary custom-button" style="font-family:Optima">Baca Selengkapnya</a>
                                 </div> --}}
                         </div>
                     </div>
                   </div>
            @endforeach
                
                <div class="row tm-mb-90 tm-gallery">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/flw.jpg')}}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Flowers</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div>
                        
                        </div>
                    
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/baju.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Fashion</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/pd.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Nature</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/jehon.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Actor</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/baju.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Plants</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/flw.jpg')}}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Flowers</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div>
                        
                        </div>
                    
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/baju.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Fashion</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/pd.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Nature</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/jehon.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Actor</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/baju.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Plants</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/flw.jpg')}}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Flowers</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div>
                        
                        </div>
                    
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/baju.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Fashion</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/pd.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Nature</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/jehon.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Actor</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/baju.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Plants</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <img src="{{asset('assets/img/jehon.jpg') }}" alt="Image" class="img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Actor</h2>
                                <a href="photo-detail.html">View more</a>
                            </figcaption>                    
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                            <span style="color: black">Dxryn</span>
                            <span><i class="fa-regular fa-heart" style="color: black"></i></span>
                        </div>
                    </div>
                    
                </div>
            </div>
@endsection
