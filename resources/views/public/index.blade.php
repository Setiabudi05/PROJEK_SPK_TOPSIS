@extends('public.layouts.app')

@push('css')
@endpush
@push('js')
@endpush

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Sistem Pendukung Keputusan Pemilihan Guru</h1>
                    <p data-aos="fade-up" data-aos-delay="100">Aplikasi ini berguna untuk proses pemilihan guru pada jurusan teknik komputer dan jaringan (TKJ)</p>
                    <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                        @auth
                            <a href="{{ route('public.pendaftaran.index') }}" class="btn-get-started">Daftar Sekarang <i class="bi bi-arrow-right"></i></a>
                        @else
                            <a href="{{ route('login') }}" class="btn-get-started">Mulai Sekarang <i class="bi bi-arrow-right"></i></a>
                        @endauth
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('assets/public/img/teacher.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>SIPEGU</h3>
                        <h2>Sistem Pendukung Keputusan Pemilihan Guru Pada Jurusan Teknik Komputer & Jaringan.</h2>
                        <p>
                        Sistem Pendukung Keputusan Pemilihan Guru TKJ (SIPEGU) adalah sistem yang dirancang
                        untuk membantu dalam proses pengambilan keputusan dalam memilih guru untuk mata pelajaran 
                        Teknik Komputer dan Jaringan (TKJ). Sistem ini menggunakan berbagai teknik dan metode komputasi untuk 
                        menganalisis data calon guru, seperti pengalaman kerja, pendidikan, keterampilan teknis, dan evaluasi
                        kinerja sebelumnya. Tujuannya adalah untuk memastikan bahwa seleksi guru TKJ dilakukan secara objektif 
                        dan berdasarkan kriteria yang telah ditentukan, sehingga dapat memilih calon yang paling sesuai untuk 
                        mengajar dalam bidang tersebut.
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/public/img/computerteacher.png') }}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- /About Section -->

    
    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Features</h2>
            <p>Our Advacedd Features<br></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('assets/public/img/features.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-xl-6 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Dashboard</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Kriteria</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Sub Kriteria</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Alternatif</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Penilaian</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Data Penilaian</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Hasil Akhir</h3>
                            </div>
                        </div><!-- End Feature Item -->

                        
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Data User</h3>
                            </div>
                        </div><!-- End Feature Item -->

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Alt Features Section -->
    <section id="alt-features" class="alt-features section">

        <div class="container">

            <div class="row gy-5">

                <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">

                    <div class="row align-self-center gy-5">

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-patch-check"></i>
                            <div>
                                <h4>dashboard</h4>
                                <p>Dashboard mencakup total data kriteria, subkriteria, alternatif, serta penilaian user. 
                                    selain itu juga penjelasan tentang SIPEGU</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <div>
                                <h4>Kriteria</h4>
                                <p>Kriteria adalah faktor-faktor atau atribut yang digunakan untuk mengevaluasi dan membandingkan 
                                    berbagai alternatif</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <div>
                                <h4>Sub Kriteria</h4>
                                <p>Subkriteria adalah faktor-faktor yang lebih spesifik yang berada di bawah kriteria utama. Mereka membantu dalam 
                                    menguraikan kriteria utama menjadi komponen yang lebih terperinci dan spesifik untuk evaluasi yang lebih akurat</p>
                            </div>
                        </div><!-- End Feature Item -->
                
                        <div class="col-md-6 icon-box">
                            <i class="bi bi-dribbble"></i>
                            <div>
                                <h4>Alternatif</h4>
                                <p>Alternatif adalah calon guru yang akan dievaluasi</p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-filter-circle"></i>
                            <div>
                                <h4>Penilaian</h4>
                                <p>Penilaian setiap alternatif dengan menggunakan sistem pendukung keputusan metode TOPSIS  (Technique for Order of Preference by Similarity to Ideal Solution) </p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-lightning-charge"></i>
                            <div>
                                <h4>Data Penilaian</h4>
                                <p>Hasil dari penilaian setiap alternatif dengan menggunakan metode TOPSIS  (Technique for Order of Preference by Similarity to Ideal Solution) </p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-award"></i>
                            <div>
                                <h4>Hasil Akhir</h4>
                                <p>Hasil akhir dengan Peringkat atau urutan dari semua calon guru berdasarkan skor preferensi </p>
                            </div>
                        </div><!-- End Feature Item -->

                        <div class="col-md-6 icon-box">
                            <i class="bi bi-patch-check"></i>
                            <div>
                                <h4>User</h4>
                                <p>Jumlah User yang sudah daftar atau login pada aplikasi SIPEGU</p>
                            </div>
                        </div><!-- End Feature Item -->

                    </div>

                </div>

                <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('assets/public/img/alt-features.png') }}" class="img-fluid" alt="">
                </div>

            </div>

        </div>

    </section><!-- /Alt Features Section -->


    <!-- Values Section -->
    <section id="values" class="values section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Perhitungan</h2>
            <p>Metode TOPSIS <br></p>
        </div><!-- End Section Title -->
    
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="{{ asset('assets/public/img/values-1.png') }}" class="img-fluid" alt="">
                        <h3>Normalisasi Matriks Keputusan</h3>
                        <p>Setiap nilai dalam matriks keputusan dinormalisasi agar berada dalam skala yang sama.</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="{{ asset('assets/public/img/values-2.png') }}" class="img-fluid" alt="">
                        <h3>Menghitung Matriks Keputusan Ternormalisasi Berbobot</h3>
                        <p>Bobot diberikan untuk setiap kriteria, dan nilai yang dinormalisasi dikalikan dengan bobot kriteria yang bersangkutan.</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="{{ asset('assets/public/img/values-3.png') }}" class="img-fluid" alt="">
                        <h3>Menentukan Solusi Ideal Positif dan Negatif.</h3>
                        <p></p>Solusi ideal positif terdiri dari nilai terbaik (maksimum) untuk setiap kriteria, sedangkan solusi ideal negatif terdiri dari nilai terburuk (minimum) untuk setiap kriteria.
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="{{ asset('assets/public/img/market-growth.png') }}" class="img-fluid" alt="">
                        <h3>Menghitung Jarak Euclidean dari Solusi Ideal Positif dan Negatif.</h3>
                        <p>Jarak antara setiap alternatif dengan solusi ideal positif dan negatif dihitung menggunakan rumus Euclidean.</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="{{ asset('assets/public/img/check-list .png') }}" class="img-fluid" alt="">
                        <h3>Menghitung Skor Preferensi untuk Setiap Alternatif.</h3>
                        <p>Skor preferensi dihitung berdasarkan jarak relatif dari solusi ideal positif dan negatif. Alternatif dengan skor tertinggi dianggap sebagai alternatif terbaik.</p>
                    </div>
                </div><!-- End Card Item -->
            </div>

        </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="faq-container">
                        <div class="faq-item">
                            <h3>Apa itu Sistem Pendukung Keputusan (DSS)?</h3>
                            <div class="faq-content">
                                <p>Sistem Pendukung Keputusan (DSS) adalah sistem informasi berbasis 
                                    komputer yang mendukung proses pengambilan keputusan dengan 
                                    mengumpulkan, memproses, dan menyajikan informasi yang relevan.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item faq-active">
                            <h3>Apa itu SIPEGU?</h3>
                            <div class="faq-content">
                                <p>SIPEGU adalah singkatan dari Sistem Pendukung Keputusan 
                                    Pemilihan Guru Teknik Komputer dan Jaringan. Ini adalah 
                                    sistem komputer yang membantu dalam proses pemilihan
                                    guru untuk jurusan TKJ berdasarkan analisis data dan kriteria tertentu.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Bagaimana SIPEGU membantu dalam proses pemilihan guru TKJ</h3>
                            <div class="faq-content">
                                <p>SIPEGU menggunakan algoritma dan teknik analisis data untuk mengevaluasi
                                   informasi mengenai calon guru, seperti pengalaman kerja, pendidikan, dan 
                                   keterampilan teknis. Ini membantu pengambil keputusan dalam memilih kandidat
                                   yang paling sesuai dengan kebutuhan spesifik mata pelajaran TKJ.
                                 </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Apa saja kriteria yang dipertimbangkan dalam SIPEGU??</h3>
                            <div class="faq-content">
                                <p>Kriteria yang dipertimbangkan meliputi pendidikan formal, 
                                   sertifikasi, pengalaman kerja terkait, 
                                   keterampilan dalam teknologi informasi dan jaringan, 
                                   serta hasil evaluasi kinerja sebelumnya.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-container">

                        <div class="faq-item">
                            <h3>Bagaimana proses kerja SIPEGU?</h3>
                            <div class="faq-content">
                                <p>SIPEGU mengumpulkan data tentang calon guru, melakukan analisis 
                                  berdasarkan kriteria yang telah ditetapkan, dan menghasilkan rekomendasi 
                                  atau peringkat untuk setiap calon berdasarkan kesesuaian mereka dengan 
                                  kebutuhan posisi guru TKJ.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Siapa yang menggunakan SIPEGU?</h3>
                            <div class="faq-content">
                                <p>MSIPEGU digunakan oleh pihak sekolah atau 
                                    lembaga pendidikan yang bertanggung jawab dalam pengelolaan 
                                    sumber daya manusia dan penempatan guru, terutama 
                                    untuk jurusan TKJ.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Bagaimana SIPEGU memastikan bahwa proses seleksi guru TKJ dilakukan secara adil dan transparan?</h3>
                            <div class="faq-content">
                                <p>SIPEGU memastikan bahwa proses seleksi dilakukan secara adil dan transparan dengan menggunakan algoritma yang 
                                    objektif untuk menilai dan membandingkan calon guru berdasarkan kriteria yang telah ditetapkan. 
                                    Semua data dan analisis yang digunakan dalam proses seleksi dapat ditinjau dan diaudit, 
                                    sehingga mengurangi kemungkinan adanya bias atau diskriminasi dalam pengambilan keputusan.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item">
                            <h3>Bagaimana SIPEGU menangani situasi di mana terdapat beberapa kandidat dengan kualifikasi yang hampir sama?</h3>
                            <div class="faq-content">
                                <p>SIPEGU menggunakan metode pembobotan dan algoritma analitik untuk menilai dan membandingkan setiap aspek 
                                    kualifikasi kandidat. Jika terdapat beberapa kandidat dengan kualifikasi yang hampir sama, 
                                    sistem dapat memberikan rekomendasi berdasarkan analisis yang lebih mendalam, seperti 
                                    evaluasi kinerja sebelumnya atau keterampilan tambahan yang relevan. Selain itu, sistem dapat 
                                    menyediakan simulasi atau skenario untuk membantu pengambil keputusan dalam memilih kandidat terbaik.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div><!-- End Faq Column-->

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Team Section -->
    {{-- <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Our hard working team</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/public/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/public/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/public/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/public/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section> --}}
    <!-- /Team Section -->

    <!-- Recent Posts Section -->
    {{-- <section id="recent-posts" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Recent Posts</h2>
                <p>Recent posts form our Blog</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/public/img/blog/blog-1.jpg') }}" class="img-fluid" alt="">
                                <span class="post-date">December 12</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/public/img/blog/blog-2.jpg') }}" class="img-fluid" alt="">
                                <span class="post-date">July 17</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/public/img/blog/blog-3.jpg') }}" class="img-fluid" alt="">
                                <span class="post-date">September 05</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                </div>

            </div>

        </section> --}}
    <!-- /Recent Posts Section -->
@endsection
