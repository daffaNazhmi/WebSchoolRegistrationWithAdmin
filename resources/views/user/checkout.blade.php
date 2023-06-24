@extends('template.front')
@section('user')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Registrasi Sekolah Kita Bersama</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{route('Registrasi')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            @foreach ($query as $item)
                            <input type="hidden" name="barang" value="{{ $item->id }}" id="">
                            @endforeach
                            <h6 class="coupon__code"><span class="icon_tag_alt"></span> Pendaftaran untuk sekolah kita bersama</h6>
                            <h6 class="checkout__title">Form Registrasi</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Nomor Registrasi<span>*</span></p>
                                        <input type="text" name="noreg">
                                        @error('noreg')
                                            <small class="text-danger">
                                                {{$message}}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Nama<span>*</span></p>
                                        <input type="text" name="nama">
                                        @error('nama')
                                            <small class="text-danger">
                                                {{$message}}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="checkout__input col-md-12">
                                    <p>Jenis Kelamin<span>*</span></p>
                                    <select name="jeniskelamin" class="form-control">
                                        
                                        <option>Laki Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                    
                                </div>
                                <div class="checkout__input col-md-12 mt-3">
                                    <p>Alamat<span>*</span></p>
                                    <input type="text" placeholder="Street Address" class="checkout__input__add" name="alamat">
                                    @error('alamat')
                                        <small class="text-danger">
                                            {{$message}}
                                        </small>
                                    @enderror
                                </div>
                                <div class="checkout__input col-md-12">
                                    <p>Agama<span>*</span></p>
                                    <select name="agama" class="form-control">
                                        
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Kong Hu Cu</option>
                                        <option>Buddha</option>
                                        <option>Shinto</option>
                                    </select>
                                    
                                </div>
                                <div class="checkout__input col-md-12 mt-3">
                                    <p>Asal Sekolah<span>*</span></p>
                                    <input type="text" name="asalsekolah">
                                    @error('asalsekolah')
                                        <small class="text-danger">
                                            {{$message}}
                                        </small>
                                    @enderror
                                </div>
                                <div class="checkout__input col-md-12">
                                    <p>Jurusan<span>*</span></p>
                                    <select name="jurusan" class="form-control">
                                        
                                        <option>PPL (Pengembangan Perangkat Lunak)</option>
                                        <option>PSJ (Pengelolaan Sistem dan Jaringan)</option>
                                        <option>Desain Grafis</option>
                                    </select>
                                    
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <center>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-4">Daftar</button>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->  
@endsection