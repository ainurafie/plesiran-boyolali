<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/boyolali.png">
    <title>Plesir Boyolali</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style_index.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>PLESIR </span>Boyolali</a>

        <nav class="navbar">
            <a href="#home">Beranda</a>
            <a href="#packages">Wisata</a>
            <a href="#contact">Kontak</a>
        </nav>

    </header>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Boyolali Tersenyum</h3>
            <p>Let's Explore beauty of Central Java, Boyolali</p>
            <a href="#packages" class="btn-yellow">Jelajahi</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="assets/images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="assets/images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="assets/images/vid-3.mp4"></span>
        </div>

        <div class="video-container">
            <video src="assets/images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- wisata section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>W</span>
            <span>I</span>
            <span>S</span>
            <span>A</span>
            <span>T</span>
            <span>A</span>
        </h1>

        <div class="box-container">
            @foreach ($wisata as $key => $wisata)
                <div class="box">
                    <img src="{{ $wisata->gambar }}" alt="">
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"></i> {{ $wisata->nama }}</h3>
                        <div class="stars mt-3">
                            @for ($i = 0; $i < $wisata->bintang; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                        <div class="price"> IDR {{ $wisata->harga_disc }}
                            <span class="text-decoration-line-through">{{ $wisata->harga_normal }}</span>
                        </div>
                        <button class="btn-yellow" type="button" data-bs-toggle="modal"
                            data-bs-target="#detailModal" 
                            data-bs-title="{{ $wisata->nama }}"
                            data-bs-gambar="{{ $wisata->gambar }}"
                            data-bs-deskripsi="{{ $wisata->deskripsi }}"
                            data-bs-hargaTiket="{{ $wisata->harga_disc }}" data-bs-hotel1="{{ $wisata->hotel1 }}"
                            data-bs-alamatHotel1="{{ $wisata->alamat_hotel1 }}"
                            data-bs-hotel2="{{ $wisata->hotel2 }}"
                            data-bs-alamatHotel2="{{ $wisata->alamat_hotel2 }}"
                            data-bs-hotel3="{{ $wisata->hotel3 }}"
                            data-bs-alamatHotel3="{{ $wisata->alamat_hotel3 }}">Selengkapnya</button>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    <!-- packages section ends -->


    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading">
            <span>K</span>
            <span>O</span>
            <span>N</span>
            <span>T</span>
            <span>A</span>
            <span>K</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="assets/images/Trip-pana.svg" alt="">
            </div>

            <form action="{{ route('kontak.store') }}" method="post">
                @csrf
                <div class="inputBox">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" name="nama" value="{{ old('nama')}}">
                    @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Nomor Hp" name="no_hp" value="{{ old('no_hp')}}">
                    @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="inputBox">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email')}}">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    <input type="text" class="form-control @error('subjek') is-invalid @enderror" placeholder="Subjek" name="subjek" value="{{ old('subjek ')}}">
                    @error('subjek') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <textarea placeholder="Pesan" class="form-control @error('pesan') is-invalid @enderror" cols="30" rows="10" name="pesan">{{ old('subjek') }}</textarea>
                @error('pesan') <span class="text-danger">{{ $message }}</span> @enderror
                <button type="submit" class="btn-yellow">Kirim Pesan</button>
            </form>

        </div>

    </section>

    <!-- contact section ends -->


    <!-- footer section  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Tentang Kami</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est
                    accusantium voluptas enim nemo facilis sit debitis.</p>
            </div>

            <div class="box">
                <h3>Link Cepat</h3>
                <a href="#home">Beranda</a>
                <a href="#packages">Wisata</a>
                <a href="#contact">Kontak</a>
            </div>

            <div class="box">
                <h3>Ikuti Kami</h3>
                <a href="https://id-id.facebook.com/">Facebook</a>
                <a href="https://www.instagram.com/">Instagram</a>
            </div>

        </div>

        <h1 class="credit"> Created by <span> Cheat Engine </span> | All Rights Reserved! </h1>

    </section>

    <!-- Modal -->
    <div class="modal fade" id="detailModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-title">
                    <p class="text-center fs-2 fw-bold title-wisata p-3"></p>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="mx-auto flex">
                            <p class="fs-2 fw-normal lh-sm mt-3 deskripsi"></p>
                            <h3 class="fw-bold">Harga Tiket</h3>
                            <p class="fs-3 hargaTiket"></p>

                            <h3 class="text-center fw-bold">Hotel & Homestay Terdekat</h3>
                            <p class="fs-3 hotel1"></p>
                            <span class="fas fa-map-marker-alt fs-3 p-3"></span><span class="fs-3 alamatHotel1 lokasiihotel"></span>

                            <p class="fs-3 hotel2"></p>
                            <span class="fas fa-map-marker-alt fs-3 p-3"></span><span class="fs-3 alamatHotel2 lokasiihotel"></span>

                            <p class="fs-3 hotel3"></p>
                            <span class="fas fa-map-marker-alt fs-3 p-3"></span><span class="fs-3 alamatHotel3 lokasiihotel"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script rel="text/javascript" src="assets/js/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script rel="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <script rel="text/javascript" src="assets/js/modal.js"></script>
    <script rel="text/javascript" src="assets/js/script.js"></script>

</body>

</html>
