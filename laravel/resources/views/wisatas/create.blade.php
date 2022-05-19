@extends('adminlte::page')

@section('title', 'Tambah Data Wisata')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Wisata</h1>
@stop

@section('content')
    <form action="{{ route('wisata.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputName">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputName"
                                placeholder="Nama Tempat" name="nama" value="{{ old('nama') }}">
                            @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFoto">Gambar</label>
                            <input type="file" class="form-control-file border-0 @error('gambar') is-invalid @enderror"
                                id="exampleInputFoto" name="gambar" value="{{ old('gambar') }}">
                            @error('gambar') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDetail">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="exampleInputDetail"
                                placeholder="Deskripsi Tempat" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>
                            @error('deskripsi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputRating">Rating</label>
                            <input type="number" min="1" max="5" class="form-control @error('bintang') is-invalid @enderror" id="exampleInputRating"
                                placeholder="Rating" name="bintang" value="{{ old('bintang') }}" />
                            @error('bintang') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputHarga">Harga Diskon</label>
                            <input type="text" class="form-control @error('harga_disc') is-invalid @enderror"
                                id="exampleInputHarga" placeholder="10.000" name="harga_disc"
                                value="{{ old('harga_disc') }}">
                            @error('harga_disc') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputHarga">Harga Normal</label>
                            <input type="text" class="form-control @error('harga_normal') is-invalid @enderror"
                                id="exampleInputHarga" placeholder="10.000" name="harga_normal"
                                value="{{ old('harga_normal') }}">
                            @error('harga_normal') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputHotel1">Hotel 1</label>
                            <input type="text" class="form-control @error('hotel1') is-invalid @enderror"
                                id="exampleInputHotel1" placeholder="Hotel" name="hotel1" value="{{ old('hotel1') }}">
                            @error('hotel1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAlamatHotel1">Alamat Hotel 1</label>
                            <input type="text" class="form-control @error('alamat_hotel1') is-invalid @enderror"
                                id="exampleInputAlamatHotel1" placeholder="Hotel" name="alamat_hotel1"
                                value="{{ old('alamat_hotel1') }}">
                            @error('alamat_hotel1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputHotel2">Hotel 2</label>
                            <input type="text" class="form-control @error('hotel2') is-invalid @enderror"
                                id="exampleInputHotel2" placeholder="Hotel" name="hotel2" value="{{ old('hotel2') }}">
                            @error('hotel2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAlamatHotel2">Alamat Hotel 2</label>
                            <input type="text" class="form-control @error('alamat_hotel2') is-invalid @enderror"
                                id="exampleInputAlamatHotel2" placeholder="Hote2" name="alamat_hotel2"
                                value="{{ old('alamat_hotel2') }}">
                            @error('alamat_hotel2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputHotel1">Hotel 3</label>
                            <input type="text" class="form-control @error('hotel3') is-invalid @enderror"
                                id="exampleInputHotel3" placeholder="Hote3" name="hotel3" value="{{ old('hotel3') }}">
                            @error('hotel3') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAlamatHotel3">Alamat Hotel 3</label>
                            <input type="text" class="form-control @error('alamat_hotel3') is-invalid @enderror"
                                id="exampleInputAlamatHotel1" placeholder="Hotel" name="alamat_hotel3"
                                value="{{ old('alamat_hotel3') }}">
                            @error('alamat_hotel3') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('wisata.index') }}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @stop
