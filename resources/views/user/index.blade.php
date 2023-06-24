@extends('template.front')
@section('user')
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="{{asset('malefashion-master')}}/img/hero/changbok-ko-F8t2VGnI47I-unsplash.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Penerimaan Peserta Didik Baru</h6>
                            <h2>Tahun Akademik 2023-2024</h2>
                            <p class="text-white">Penerimaan peserta didik baru di sekolah kita bersama. Daftarkan segera sebelum pendaftarannya ditutup!</p>
                            <a href="{{route('Checkout')}}" class="primary-btn">Registrasi Sekarang <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
@endsection