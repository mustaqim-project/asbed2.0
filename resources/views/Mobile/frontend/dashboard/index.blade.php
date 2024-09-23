@extends('mobile.frontend.layout.master')

@section('content')
    <div class="page-content" style="margin-top:50px;">
        <div class="page-title page-title-large">
            <h2 data-username=""></h2>
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <!-- Jika pengguna sudah login, tampilkan gambar profil -->
                        <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img"
                            data-src="{{ asset(Auth::user()->gambar) }}">
                        </a>
                    @else
                        <!-- Jika pengguna belum login, tampilkan gambar default -->
                        <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img"
                            data-src="{{ asset('mobile/images/logobulat.png') }}">
                        </a>
                    @endauth
                </nav>
            @endif
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <!-- Homepage Slider-->
        <div class="single-slider-boxed text-center owl-no-dots owl-carousel">
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">

                        @if (session('lang') === 'id')
                            {{ 'Kenali Binge Eating Disorder' }}
                        @else
                            {{ $translate->translate('Binge Eating Disorder') }}
                        @endif
                    </h1>
                    <p class="boxed-text-xl">
                        @if (session('lang') === 'id')
                            {{ 'Pelajari tentang Binge Eating Disorder, bagaimana mengenali gejalanya, dan cara mengatasinya dengan bijak.' }}
                        @else
                            {{ $translate->translate('Pelajari tentang Binge Eating Disorder, bagaimana mengenali gejalanya, dan cara mengatasinya dengan bijak.') }}
                        @endif
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy"
                    data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY-kEcR4MozEQYAJ15m3FGY-t8c1tpJpqSdg&s">
                </div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">
                        @if (session('lang') === 'id')
                            {{ 'Kisah Pemulihan' }}
                        @else
                            {{ $translate->translate('Kisah Pemulihan') }}
                        @endif
                    </h1>
                    <p class="boxed-text-xl">
                        @if (session('lang') === 'id')
                            {{ 'Baca cerita inspiratif dari mereka yang berhasil mengatasi Binge Eating Disorder dan menemukan keseimbangan hidup.' }}
                        @else
                            {{ $translate->translate('Baca cerita inspiratif dari mereka yang berhasil mengatasi Binge Eating Disorder dan menemukan keseimbangan hidup.') }}
                        @endif
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy"
                    data-src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1614664558/attached_image/beragam-manfaat-olahraga.jpg">
                </div>
            </div>
            <div class="card rounded-l shadow-l" data-card-height="320">
                <div class="card-bottom">
                    <h1 class="font-24 font-700">
                        @if (session('lang') === 'id')
                            {{ 'Dukungan dan Bantuan' }}
                        @else
                            {{ $translate->translate('Dukungan dan Bantuan') }}
                        @endif
                    </h1>
                    <p class="boxed-text-xl">
                        @if (session('lang') === 'id')
                            {{ 'Temukan sumber daya dan dukungan yang tersedia untuk membantu Anda atau orang yang Anda cintai.' }}
                        @else
                            {{ $translate->translate('Temukan sumber daya dan dukungan yang tersedia untuk membantu Anda atau orang yang Anda cintai.') }}
                        @endif
                    </p>
                </div>
                <div class="card-overlay bg-gradient-fade"></div>
                <div class="card-bg owl-lazy"
                    data-src="https://storage.googleapis.com/ekrutassets/blogs/images/000/004/856/original/Kenali_apa_saja_fungsi_FAQ_dan_tips_membuat_FAQ_yang_efektif.jpg">
                </div>
            </div>
        </div>

        <div class="content mt-0">
            <div class="row">
                <div class="col-6">
                    <a href="#" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight">
                        @if (session('lang') === 'id')
                            {{ 'Mulai Pemulihan' }}
                        @else
                            {{ $translate->translate('Mulai Pemulihan') }}
                        @endif
                    </a>
                </div>
                <div class="col-6">
                    <a href="#"
                        class="btn btn-full btn-border btn-m rounded-s text-uppercase font-900 shadow-l border-highlight color-highlight">
                        @if (session('lang') === 'id')
                            {{ 'Hubungi Ahli' }}
                        @else
                            {{ $translate->translate('Hubungi Ahli') }}
                        @endif
                    </a>
                </div>
            </div>
        </div>

        <div class="content mb-2">
            <h5 class="float-left font-16 font-500">
                @if (session('lang') === 'id')
                    {{ 'Fitur Aplikasi' }}
                @else
                    {{ $translate->translate('Fitur Aplikasi') }}
                @endif
            </h5>
            <a class="float-right font-12 color-highlight mt-n1" href="#">
                @if (session('lang') === 'id')
                    {{ 'Lihat Semua' }}
                @else
                    {{ $translate->translate('Lihat Semua') }}
                @endif
            </a>
            <div class="clearfix"></div>
        </div>

        <div class="double-slider text-center owl-carousel owl-no-dots">
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="heart" data-feather-line="1" data-feather-size="45"
                    data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i>
                <h4 class="font-20 mb-1">Fitur 1</h4>
                <p class="boxed-text-l">
                    @if (session('lang') === 'id')
                        {{ 'Deskripsi singkat fitur 1.' }}
                    @else
                        {{ $translate->translate('Deskripsi singkat fitur 1.') }}
                    @endif
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="star" data-feather-line="1" data-feather-size="45"
                    data-feather-color="yellow2-dark" data-feather-bg="yellow2-fade-light"></i>
                <h4 class="font-20 mb-1">Fitur 2</h4>
                <p class="boxed-text-l">
                    @if (session('lang') === 'id')
                        {{ 'Deskripsi singkat fitur 2.' }}
                    @else
                        {{ $translate->translate('Deskripsi singkat fitur 2.') }}
                    @endif
                </p>
            </div>
            <div class="item bg-theme rounded-m shadow-m">
                <i class="mt-4 mb-4" data-feather="sun" data-feather-line="1" data-feather-size="45"
                    data-feather-color="green2-dark" data-feather-bg="green2-fade-light"></i>
                <h4 class="font-20 mb-1">Fitur 3</h4>
                <p class="boxed-text-l">
                    @if (session('lang') === 'id')
                        {{ 'Deskripsi singkat fitur 3.' }}
                    @else
                        {{ $translate->translate('Deskripsi singkat fitur 3.') }}
                    @endif
                </p>
            </div>
        </div>

        <div class="card mt-4 preload-img" data-src="images/pictures/bed4.jpg">
            <div class="card-body">
                <h4 class="color-white">Bersama Kita Bisa</h4>
                <p class="color-white">
                    Dapatkan dukungan penuh dari aplikasi kami yang didesain untuk mendampingi perjalanan pemulihan Anda.
                </p>
                <div class="card card-style ml-0 mr-0 bg-white">
                    <div class="row mt-3 pt-1 mb-3">
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" data-feather="smile" data-feather-line="1"
                                data-feather-size="35" data-feather-color="orange1-dark"
                                data-feather-bg="orange1-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Motivasi<br>Harian
                            </h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" data-feather="book-open" data-feather-line="1"
                                data-feather-size="35" data-feather-color="blue2-dark"
                                data-feather-bg="blue2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">
                                Panduan<br>Pemulihan</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" data-feather="user-check" data-feather-line="1"
                                data-feather-size="35" data-feather-color="brown2-dark"
                                data-feather-bg="brown2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">Konsultasi<br>Online</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" data-feather="phone-call" data-feather-line="1"
                                data-feather-size="35" data-feather-color="green1-dark"
                                data-feather-bg="green1-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">Bantuan<br>Darurat</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
        </div>

        <div class="card card-style">
            <div class="content text-center">
                <h2>Langkah Mudah Memulai</h2>
                <p class="boxed-text-xl">
                    Aplikasi ini dirancang untuk mempermudah proses pemulihan dengan panduan yang jelas dan mudah dipahami.
                </p>
            </div>
            <div class="divider divider-small mb-3 bg-highlight"></div>

            <div class="content">
                <div class="d-flex mb-4 pb-3">
                    <div>
                        <i class="far fa-edit color-yellow1-dark fa-3x pt-3 icon-size"></i>
                    </div>
                    <div>
                        <h5 class="font-16 font-600">Tulis Perasaan Anda</h5>
                        <p>
                            Jurnal harian membantu Anda mengenali pola emosi dan perilaku.
                        </p>
                    </div>
                </div>
                <div class="d-flex mb-4 pb-3">
                    <div>
                        <i class="fa fa-headset color-blue2-dark fa-3x pt-3 icon-size"></i>
                    </div>
                    <div>
                        <h5 class="font-16 font-600">Dapatkan Dukungan</h5>
                        <p>
                            Konsultasi dengan ahli atau bergabung dengan komunitas pendukung.
                        </p>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div>
                        <i class="far fa-lightbulb color-green1-dark fa-3x pt-3 icon-size"></i>
                    </div>
                    <div>
                        <h5 class="font-16 font-600">Pelajari dan Praktekkan</h5>
                        <p>
                            Terapkan panduan pemulihan dalam kehidupan sehari-hari.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style preload-img" data-src="images/pictures/bed5.jpg">
            <div class="card-body">
                <h4 class="color-white">Jaga Motivasi Anda</h4>
                <p class="color-white">
                    Tetap terinspirasi dan termotivasi dengan tips harian yang mendorong Anda untuk terus maju.
                </p>
                <a href="#" class="btn btn-full bg-highlight font-600 rounded-sm text-uppercase">Temukan
                    Inspirasi</a>
            </div>
            <div class="card-overlay bg-black opacity-80"></div>
        </div>


        <div class="card card-style text-center">
            <div class="content pb-2">
                <h1>
                    <i data-feather="heart" data-feather-line="1" data-feather-size="55" data-feather-color="red2-dark"
                        data-feather-bg="red2-fade-dark">
                    </i>
                </h1>
                <h3 class="font-700 mt-2">Dukungan Penuh</h3>
                <p class="font-12 mt-n1 color-highlight mb-3">Kami Ada untuk Anda</p>
                <p class="boxed-text-xl">
                    Dapatkan dukungan dan pemahaman mendalam untuk membantu Anda melalui setiap langkah perjalanan Anda.
                </p>
                <a href="#"
                    class="btn btn-center-xl btn-m text-uppercase font-900 bg-highlight rounded-sm shadow-l">Dapatkan
                    Bantuan Sekarang</a>
            </div>
        </div>


        <!-- footer and footer card-->
        <div class="footer">
            @include('mobile.frontend.dashboard.menu-footer')
        </div>
    </div>
    <!-- end of page content-->
@endsection
