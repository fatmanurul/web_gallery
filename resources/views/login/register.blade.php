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
                <form action="/register" method="post"> 
                  @csrf      
                  <div class="form-floating">
                    <input type="text" name="usr_email" class="form-control @error('usr_email') is-invalid @enderror" id="usr_email" autofocus  value="{{old('usr_email')}}" required>
                    <label for="usr_email">Email</label>
                    @error('usr_email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="usr_password" class="form-control class @error('usr_password') is-invalid @enderror" id="usr_password" placeholder="usr_password" required>
                    <label for="usr_password">Kata Sandi</label>
                    @error('usr_password')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                              @enderror
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
                  <p>Sudah punya akun  <a href="/register">Login</a></p>
                </form>
              </main>
          </div>
      </div>

@endsection
