@extends('main.layouts.main')
  
@section('container')

      <div class="container mt-4">
              <!-- memberitahu halaman child -->
          <div class="row justify-content-center">
          <div class="col-md-4">

            @if(session()->has ('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
              @endif
              <main class="form-signin">
                  <h1 class="h3 mb-3 fw-normal text-center">Silahkan Register</h1>
                <form action="/login" method="post"> 
                  @csrf      
                  <div class="form-floating">
                    <label for="">Username</label>
                    <input type="text" name="" class="form-control @error('') is-invalid @enderror" id="" autofocus  value="{{old('')}}" required>
                    @error('')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                  </div>
                  <div class="form-floating">
                    <label for="">Password</label>
                    <input type="password" name="" class="form-control class @error('') is-invalid @enderror" id="" placeholder="" required>
                    
                    @error('')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                  </div>
                  <div class="form-floating">
                    <label for="">Email</label>
                    <input type="email" name="" class="form-control class @error('') is-invalid @enderror" id="" placeholder="" required>
                    
                    @error('')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                  </div>
                  <div class="form-floating">
                    <label for="">Nama lengkap</label>
                    <input type="text" name="" class="form-control class @error('') is-invalid @enderror" id="" placeholder="" required>
                 
                    @error('')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                  </div>
                  <div class="form-floating">
                    <label for="">Alamat</label>
                    <input type="text" name="" class="form-control class @error('') is-invalid @enderror" id="" placeholder="" required>
                    @error('')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                  </div>
                  <p>Sudah punya akun <a href="/login">login</a></p>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
                </form>
              </main>
          </div>
      </div>

@endsection

