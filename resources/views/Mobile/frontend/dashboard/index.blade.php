@extends('mobile.frontend.layout.master')

@section('content')
<div class="page-content">
    <div class="page-title page-title-large">
        <h2 data-username="{{ auth()->check() ? auth()->user()->name : 'Everyone' }}" class="greeting-text">
        </h2>
        <a href="#" data-menu="menu-main">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M7.25687 5.89462C8.06884 5.35208 9.02346 5.0625 10 5.0625C11.3095 5.0625 12.5654 5.5827 13.4913 6.50866C14.4173 7.43462 14.9375 8.6905 14.9375 10C14.9375 10.9765 14.6479 11.9312 14.1054 12.7431C13.5628 13.5551 12.7917 14.188 11.8895 14.5617C10.9873 14.9354 9.99452 15.0331 9.03674 14.8426C8.07896 14.6521 7.19918 14.1819 6.50866 13.4913C5.81814 12.8008 5.34789 11.921 5.15737 10.9633C4.96686 10.0055 5.06464 9.01271 5.43835 8.1105C5.81205 7.20829 6.44491 6.43716 7.25687 5.89462ZM8.29857 12.5464C8.80219 12.8829 9.3943 13.0625 10 13.0625C10.8122 13.0625 11.5912 12.7398 12.1655 12.1655C12.7398 11.5912 13.0625 10.8122 13.0625 10C13.0625 9.3943 12.8829 8.80219 12.5464 8.29857C12.2099 7.79494 11.7316 7.40241 11.172 7.17062C10.6124 6.93883 9.99661 6.87818 9.40254 6.99635C8.80847 7.11451 8.26279 7.40619 7.83449 7.83449C7.40619 8.26279 7.11451 8.80847 6.99635 9.40254C6.87818 9.99661 6.93883 10.6124 7.17062 11.172C7.40241 11.7316 7.79494 12.2099 8.29857 12.5464ZM24.7431 14.1054C23.9312 14.6479 22.9765 14.9375 22 14.9375C20.6905 14.9375 19.4346 14.4173 18.5087 13.4913C17.5827 12.5654 17.0625 11.3095 17.0625 10C17.0625 9.02346 17.3521 8.06884 17.8946 7.25687C18.4372 6.44491 19.2083 5.81205 20.1105 5.43835C21.0127 5.06464 22.0055 4.96686 22.9633 5.15737C23.921 5.34789 24.8008 5.81814 25.4913 6.50866C26.1819 7.19918 26.6521 8.07896 26.8426 9.03674C27.0331 9.99452 26.9354 10.9873 26.5617 11.8895C26.1879 12.7917 25.5551 13.5628 24.7431 14.1054ZM23.7014 7.45363C23.1978 7.11712 22.6057 6.9375 22 6.9375C21.1878 6.9375 20.4088 7.26016 19.8345 7.83449C19.2602 8.40882 18.9375 9.18778 18.9375 10C18.9375 10.6057 19.1171 11.1978 19.4536 11.7014C19.7901 12.2051 20.2684 12.5976 20.828 12.8294C21.3876 13.0612 22.0034 13.1218 22.5975 13.0037C23.1915 12.8855 23.7372 12.5938 24.1655 12.1655C24.5938 11.7372 24.8855 11.1915 25.0037 10.5975C25.1218 10.0034 25.0612 9.38763 24.8294 8.82803C24.5976 8.26844 24.2051 7.79014 23.7014 7.45363ZM7.25687 17.8946C8.06884 17.3521 9.02346 17.0625 10 17.0625C11.3095 17.0625 12.5654 17.5827 13.4913 18.5087C14.4173 19.4346 14.9375 20.6905 14.9375 22C14.9375 22.9765 14.6479 23.9312 14.1054 24.7431C13.5628 25.5551 12.7917 26.1879 11.8895 26.5617C10.9873 26.9354 9.99452 27.0331 9.03674 26.8426C8.07896 26.6521 7.19918 26.1819 6.50866 25.4913C5.81814 24.8008 5.34789 23.921 5.15737 22.9633C4.96686 22.0055 5.06464 21.0127 5.43835 20.1105C5.81205 19.2083 6.44491 18.4372 7.25687 17.8946ZM8.29857 24.5464C8.80219 24.8829 9.3943 25.0625 10 25.0625C10.8122 25.0625 11.5912 24.7398 12.1655 24.1655C12.7398 23.5912 13.0625 22.8122 13.0625 22C13.0625 21.3943 12.8829 20.8022 12.5464 20.2986C12.2099 19.7949 11.7316 19.4024 11.172 19.1706C10.6124 18.9388 9.99661 18.8782 9.40254 18.9963C8.80847 19.1145 8.26279 19.4062 7.83449 19.8345C7.40619 20.2628 7.11451 20.8085 6.99635 21.4025C6.87818 21.9966 6.93883 22.6124 7.17062 23.172C7.40241 23.7316 7.79494 24.2099 8.29857 24.5464ZM19.2569 17.8946C20.0688 17.3521 21.0235 17.0625 22 17.0625C23.3095 17.0625 24.5654 17.5827 25.4913 18.5087C26.4173 19.4346 26.9375 20.6905 26.9375 22C26.9375 22.9765 26.6479 23.9312 26.1054 24.7431C25.5628 25.5551 24.7917 26.1879 23.8895 26.5617C22.9873 26.9354 21.9945 27.0331 21.0367 26.8426C20.079 26.6521 19.1992 26.1819 18.5087 25.4913C17.8181 24.8008 17.3479 23.921 17.1574 22.9633C16.9669 22.0055 17.0646 21.0127 17.4383 20.1105C17.8121 19.2083 18.4449 18.4372 19.2569 17.8946ZM20.2986 24.5464C20.8022 24.8829 21.3943 25.0625 22 25.0625C22.8122 25.0625 23.5912 24.7398 24.1655 24.1655C24.7398 23.5912 25.0625 22.8122 25.0625 22C25.0625 21.3943 24.8829 20.8022 24.5464 20.2986C24.2099 19.7949 23.7316 19.4024 23.172 19.1706C22.6124 18.9388 21.9966 18.8782 21.4025 18.9963C20.8085 19.1145 20.2628 19.4062 19.8345 19.8345C19.4062 20.2628 19.1145 20.8085 18.9963 21.4025C18.8782 21.9966 18.9388 22.6124 19.1706 23.172C19.4024 23.7316 19.7949 24.2099 20.2986 24.5464Z" fill="white" stroke="white" stroke-width="0.125" />
            </svg>

        </a>
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
            <div class="card-bg owl-lazy" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY-kEcR4MozEQYAJ15m3FGY-t8c1tpJpqSdg&s">
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
            <div class="card-bg owl-lazy" data-src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1614664558/attached_image/beragam-manfaat-olahraga.jpg">
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
            <div class="card-bg owl-lazy" data-src="https://storage.googleapis.com/ekrutassets/blogs/images/000/004/856/original/Kenali_apa_saja_fungsi_FAQ_dan_tips_membuat_FAQ_yang_efektif.jpg">
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
                <a href="#" class="btn btn-full btn-border btn-m rounded-s text-uppercase font-900 shadow-l border-highlight color-highlight">
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
            <i class="mt-4 mb-4" data-feather="heart" data-feather-line="1" data-feather-size="45" data-feather-color="red2-dark" data-feather-bg="red2-fade-light"></i>
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
            <i class="mt-4 mb-4" data-feather="star" data-feather-line="1" data-feather-size="45" data-feather-color="yellow2-dark" data-feather-bg="yellow2-fade-light"></i>
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
            <i class="mt-4 mb-4" data-feather="sun" data-feather-line="1" data-feather-size="45" data-feather-color="green2-dark" data-feather-bg="green2-fade-light"></i>
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
                        <i class="float-left ml-3 mr-3" data-feather="smile" data-feather-line="1" data-feather-size="35" data-feather-color="orange1-dark" data-feather-bg="orange1-fade-light">
                        </i>
                        <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Motivasi<br>Harian
                        </h5>
                    </div>
                    <div class="col-6">
                        <i class="float-left ml-3 mr-3" data-feather="book-open" data-feather-line="1" data-feather-size="35" data-feather-color="blue2-dark" data-feather-bg="blue2-fade-light">
                        </i>
                        <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">
                            Panduan<br>Pemulihan</h5>
                    </div>
                    <div class="col-6">
                        <i class="float-left ml-3 mr-3" data-feather="user-check" data-feather-line="1" data-feather-size="35" data-feather-color="brown2-dark" data-feather-bg="brown2-fade-light">
                        </i>
                        <h5 class="color-black float-left font-13 font-500 line-height-s">Konsultasi<br>Online</h5>
                    </div>
                    <div class="col-6">
                        <i class="float-left ml-3 mr-3" data-feather="phone-call" data-feather-line="1" data-feather-size="35" data-feather-color="green1-dark" data-feather-bg="green1-fade-light">
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
                <i data-feather="heart" data-feather-line="1" data-feather-size="55" data-feather-color="red2-dark" data-feather-bg="red2-fade-dark">
                </i>
            </h1>
            <h3 class="font-700 mt-2">Dukungan Penuh</h3>
            <p class="font-12 mt-n1 color-highlight mb-3">Kami Ada untuk Anda</p>
            <p class="boxed-text-xl">
                Dapatkan dukungan dan pemahaman mendalam untuk membantu Anda melalui setiap langkah perjalanan Anda.
            </p>
            <a href="#" class="btn btn-center-xl btn-m text-uppercase font-900 bg-highlight rounded-sm shadow-l">Dapatkan
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
