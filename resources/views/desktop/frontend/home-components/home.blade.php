
@extends('desktop.frontend.layouts.master')

@section('content')
 <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <!-- Slide 1: Unduh Aplikasi -->
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Unduh Aplikasi Kami</h4>
                                <h1 class="display-1 text-white mb-4">Dapatkan Bantuan Kapan Saja, Di Mana Saja</h1>
                                <p class="mb-5 fs-5">Unduh aplikasi Binge Eating Disorder untuk mendapatkan dukungan dan
                                    melacak perjalanan Anda, dengan akses langsung ke sumber daya dan saran.</p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-download me-2"></i> Download Aplikasi</a>
                                    {{-- <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Pelajari
                                        Lebih Lanjut</a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover;">
                                <img src="desktop/frontend/img/bed.png"
                                    class="img-fluid w-100" alt="Unduh Aplikasi">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Video Informasi -->
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/OAx0W0ZI2Uk?si=OHHtHDDQhdwltGsI"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Informasi Binge Eating Disorder</h4>
                                <h1 class="display-1 text-white mb-4">Pelajari Lebih Lanjut Tentang Binge Eating
                                    Disorder</h1>
                                <p class="mb-5 fs-5">Tonton video ini untuk memahami Binge Eating Disorder, gejalanya,
                                    dan cara mendapatkan bantuan untuk Anda atau orang yang Anda pedulikan.</p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    {{-- <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Tonton Video</a>
                                    <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Pelajari
                                        Lebih Lanjut</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Fitur Kami</h4>
                <h1 class="display-4 mb-4">Layanan Kesehatan & Komunitas untuk Hidup Sehat</h1>
                <p class="mb-0">Kami menyediakan berbagai fitur yang membantu Anda dalam mengelola kesehatan, mencegah
                    Binge Eating Disorder (BED), dan mendapatkan dukungan dari komunitas yang peduli.</p>
            </div>
            <div class="row g-4">
                <!-- Tracing Nutrisi -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-apple-alt fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Tracing Nutrisi Harian</h4>
                        <p class="mb-4">Pantau asupan nutrisi harian Anda untuk memastikan tubuh Anda mendapatkan
                            nutrisi yang tepat dan seimbang setiap harinya.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                {{-- <!-- Assessment BED Harian -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-clipboard-check fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Assessment BED Harian</h4>
                        <p class="mb-4">Lakukan evaluasi harian untuk mengetahui risiko Binge Eating Disorder dan
                            dapatkan saran yang tepat berdasarkan hasil penilaian Anda.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Mulai Assessment</a>
                    </div>
                </div> --}}
                <!-- Blog Informasi -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-blog fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Blog Informasi</h4>
                        <p class="mb-4">Baca artikel-artikel terbaru seputar kesehatan, tips diet sehat, dan berbagai
                            informasi tentang pengelolaan BED dari para ahli.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Baca Blog</a>
                    </div>
                </div>
                <!-- Komunitas Dukungan -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Komunitas Dukungan</h4>
                        <p class="mb-4">Bergabung dengan komunitas yang mendukung perjalanan Anda dalam mengatasi
                            BED, berbagi pengalaman, dan saling memberi semangat.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Gabung Komunitas</a>
                    </div>
                </div>
                <!-- Layanan Kesehatan -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="feature-item p-4 pt-0">
                        <div class="feature-icon p-4 mb-4">
                            <i class="fas fa-stethoscope fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Layanan Kesehatan 24/7</h4>
                        <p class="mb-4">Dapatkan layanan konsultasi kesehatan kapan saja, di mana saja, dengan
                            dukungan dokter dan tenaga kesehatan profesional.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- About Start -->
    <div class="container-fluid bg-light about pb-5">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item-content bg-white rounded p-5 h-100">
                        <h4 class="text-primary">Tentang Binge Eating Disorder (BED)</h4>
                        <h1 class="display-4 mb-4">Apa itu Binge Eating Disorder?</h1>
                        <p>Binge Eating Disorder (BED) adalah gangguan makan serius yang ditandai dengan pola makan
                            berlebihan dalam waktu singkat, sering kali tanpa rasa lapar dan disertai dengan perasaan
                            kehilangan kendali. Penderita BED biasanya merasa malu atau bersalah setelah episode makan
                            berlebihan.</p>
                        <p>BED dapat mempengaruhi kesehatan fisik dan mental seseorang, termasuk peningkatan risiko
                            obesitas, diabetes, dan masalah kesehatan mental seperti depresi dan kecemasan.</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Mengidentifikasi dan
                            mengatasi BED sangat penting untuk kesehatan dan kesejahteraan secara keseluruhan.</p>
                        <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Program dan dukungan terapi
                            dapat membantu individu mengatasi BED dan mengembangkan kebiasaan makan yang lebih sehat.
                        </p>
                        <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Konsultasikan dengan
                            profesional kesehatan untuk penanganan dan dukungan yang sesuai.</p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Lebih Banyak Informasi</a>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-white rounded p-5 h-100">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="rounded bg-light">
                                    <img src="img/bed-awareness.png" class="img-fluid rounded w-100"
                                        alt="Binge Eating Disorder Awareness">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">100+</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Konselor Terlatih</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">50+</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Program Dukungan</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">200+</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Materi Edukasi</h4>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="counter-item bg-light rounded p-3 h-100">
                                    <div class="counter-counting">
                                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">300+</span>
                                        <span class="h1 fw-bold text-primary">+</span>
                                    </div>
                                    <h4 class="mb-0 text-dark">Sesi Terapi</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Healthcare Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Layanan Kesehatan Kami</h4>
                <h1 class="display-4 mb-4">Kami Menyediakan Layanan Terbaik</h1>
                <p class="mb-0">Kami memberikan layanan kesehatan berkualitas tinggi yang mencakup berbagai
                    spesialisasi medis, perawatan psikologis, dan dukungan nutrisi untuk memenuhi kebutuhan Anda.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Doctor Service -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="desktop/frontend/img/3.png"
                                class="img-fluid rounded-top w-100" alt="Dokter">
                            <div class="service-icon p-3">
                                <i class="fa fa-stethoscope fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Layanan Dokter</a>
                                <p class="mb-4">Dokter berpengalaman siap membantu Anda dengan diagnosa akurat dan
                                    perawatan medis yang optimal.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nurse Service -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="desktop/frontend/img/2.png"
                                class="img-fluid rounded-top w-100" alt="Perawat">
                            <div class="service-icon p-3">
                                <i class="fa fa-user-nurse fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Layanan Perawat</a>
                                <p class="mb-4">Tim perawat kami memberikan perawatan berkualitas tinggi dengan penuh
                                    perhatian untuk kebutuhan kesehatan Anda.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Psychologist Service -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="desktop/frontend/img/4.png" class="img-fluid rounded-top w-100" alt="Psikolog">
                            <div class="service-icon p-3">
                                <i class="fa fa-brain fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Layanan Psikolog</a>
                                <p class="mb-4">Psikolog berlisensi siap membantu Anda menangani masalah kesehatan
                                    mental seperti kecemasan, depresi, dan stres.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nutritionist Service -->
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="desktop/frontend/img/1.png" class="img-fluid rounded-top w-100" alt="Ahli Gizi">
                            <div class="service-icon p-3">
                                <i class="fa fa-apple-alt fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Layanan Ahli Gizi</a>
                                <p class="mb-4">Ahli gizi kami siap memberikan panduan dan rencana nutrisi yang
                                    sesuai untuk meningkatkan kesehatan Anda.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Lihat Layanan Lainnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Healthcare Services End -->

    <!-- FAQs Start -->
    <div class="container-fluid faq-section bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="h-100">
                        <div class="mb-5">
                            <h4 class="text-primary">Pertanyaan Umum</h4>
                            <h1 class="display-4 mb-0">Pertanyaan yang Sering Diajukan tentang BED</h1>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Q: Apa itu Binge Eating Disorder (BED)?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show active"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body rounded">
                                        A: Binge Eating Disorder (BED) adalah gangguan makan di mana seseorang sering
                                        mengonsumsi makanan dalam jumlah besar dalam waktu singkat dan merasa kehilangan
                                        kendali selama episode makan tersebut. BED sering kali disertai dengan rasa malu
                                        dan penyesalan setelah makan berlebihan.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Q: Apa gejala umum dari BED?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Gejala umum dari BED termasuk makan dalam porsi besar, makan dengan cepat,
                                        makan meskipun tidak lapar, dan merasa tertekan, malu, atau bersalah setelah
                                        makan berlebihan. Penderita juga mungkin mengalami perasaan kehilangan kendali
                                        saat makan.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Q: Bagaimana cara mengatasi Binge Eating Disorder?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Mengatasi BED biasanya melibatkan kombinasi terapi psikologis, seperti terapi
                                        perilaku kognitif (CBT), serta dukungan medis untuk mengelola aspek fisik dari
                                        gangguan tersebut. Pendekatan lain termasuk pelatihan kesadaran makan, dukungan
                                        kelompok, dan pendidikan nutrisi.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <img src="img/bed-awareness.png" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Dari Blog Kami</h4>
                <h1 class="display-4 mb-4">Berita dan Pembaruan Terkait BED</h1>
                <p class="mb-0">Dapatkan informasi terbaru, panduan, dan tips mengenai Binge Eating Disorder (BED).
                    Kami berkomitmen untuk menyediakan konten yang mendidik dan mendukung untuk membantu Anda memahami
                    dan mengatasi BED.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-bed-1.jpg" class="img-fluid rounded-top w-100" alt="Apa itu BED">
                            <div class="blog-categiry py-2 px-4">
                                <span>Kesehatan Mental</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Dr. Sarah</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 1 Okt 2024</div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 8 Comments
                                </div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Apa Itu Binge Eating Disorder (BED)?</a>
                            <p class="mb-3">BED adalah gangguan makan yang ditandai dengan makan berlebihan secara
                                berkala. Pelajari lebih lanjut tentang gejala, penyebab, dan dampaknya.</p>
                            <a href="#" class="btn p-0">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-bed-2.jpg" class="img-fluid rounded-top w-100"
                                alt="Cara Mengatasi BED">
                            <div class="blog-categiry py-2 px-4">
                                <span>Kesehatan Mental</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Dr. Sarah</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 15 Okt 2024
                                </div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 5 Comments
                                </div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Cara Mengatasi Binge Eating Disorder
                                (BED)</a>
                            <p class="mb-3">Temukan berbagai metode dan strategi efektif untuk mengatasi BED,
                                termasuk terapi dan perubahan gaya hidup yang dapat membantu.</p>
                            <a href="#" class="btn p-0">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-bed-3.jpg" class="img-fluid rounded-top w-100"
                                alt="Dukungan dan Sumber Daya">
                            <div class="blog-categiry py-2 px-4">
                                <span>Kesehatan Mental</span>
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between mb-3">
                                <div class="small"><span class="fa fa-user text-primary"></span> Dr. Sarah</div>
                                <div class="small"><span class="fa fa-calendar text-primary"></span> 25 Okt 2024
                                </div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span> 7 Comments
                                </div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Dukungan dan Sumber Daya untuk BED</a>
                            <p class="mb-3">Dapatkan informasi tentang dukungan komunitas, layanan kesehatan, dan
                                sumber daya yang tersedia untuk mereka yang mengalami BED.</p>
                            <a href="#" class="btn p-0">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
