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
                            <small id="like-icon-{{ $photo->FotoID }}" class="mr-3 like-icon" data-photo-id="{{ $photo->FotoID }}">
                                <i class="fa-regular fa-heart"></i>
                            </small>


                          </div>
                    
                          <a href="/foto/{{ $photo->FotoID }}/detail" class="btn btn-primary px-4 mx-auto my-2">Read More</a>

                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
                  
                <script>
// Inisialisasi likeIcons dan unlikeIcons
const likeIcons = document.querySelectorAll('.like-icon');
const unlikeIcons = document.querySelectorAll('.unlike-icon');

// Event listener untuk setiap ikon hati yang belum dilike
likeIcons.forEach(icon => {
    icon.addEventListener('click', function() {
        const FotoID = this.getAttribute('data-photo-id');
        const likeIcon = document.getElementById(`like-icon-${FotoID}`);
        
        // Mengambil status like saat ini dari class ikon hati
        const isLiked = likeIcon.classList.contains('liked');

        // Mengatur metode berdasarkan status like saat ini
        const method = isLiked ? 'DELETE' : 'POST';
        
        fetch(`/photos/${FotoID}/like`, {
            method: method, // Menggunakan DELETE untuk unlike, POST untuk like
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ photo_id: FotoID })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const likeCount = data.likes;
                likeIcon.innerHTML = `<i class="fa-regular fa-heart"></i> ${likeCount}`;
                
                // Mengubah status like pada class ikon hati
                likeIcon.classList.toggle('liked');
            }
        })
        .catch(error => console.error('Error:', error));
    });
});

// Event listener untuk setiap ikon hati yang sudah dilike
unlikeIcons.forEach(icon => {
    icon.addEventListener('click', function() {
        const FotoID = this.getAttribute('data-photo-id');
        const likeIcon = document.getElementById(`like-icon-${FotoID}`);
        
        fetch(`/photos/${FotoID}/unlike`, {
            method: 'DELETE', // Menggunakan DELETE untuk unlike
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ photo_id: FotoID })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const likeCount = data.likes;
                likeIcon.innerHTML = `<i class="fa-regular fa-heart"></i> ${likeCount}`;
                
                // Menghapus class 'liked' untuk menunjukkan bahwa foto tidak disukai lagi
                likeIcon.classList.remove('liked');
            }
        })
        .catch(error => console.error('Error:', error));
    });
});


                </script>
                
                
                
@endsection
