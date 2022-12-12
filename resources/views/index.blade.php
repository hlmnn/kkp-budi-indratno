<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>{{ $title }}</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- jQuery first, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Slick Slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.logo-carousel').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1000,
                    arrows: true,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 2
                    }
                }]
            });
        });
    </script>
</head>
<body>
    {{-- navbar section--}}
	@include('partials.navbar')

    {{-- content --}}
    <div id="image-text" class="d-flex align-items-center justify-content-center mb-3 image-index" style="background-image: url('{{ asset('img/index_img.jpg')}}') ">
        <div class="text-center">
            <p class="display-3">KKP Budi Indratno</p>
        </div>
    </div>

    <div id="license" class="container-md text-center">
        <img src="{{url('/img/logo_bi.png')}}" height="200" width="200" alt="Logo KKP BI">
        <p class="display-6 mt-4">Izin Praktek KEP-3229/IP.B/PJ/2016 <br> Register License Level B</p>
    </div>

    <div id="about" class="container-md mb-3">
        <div class="text-center">
            <div class="row mt-4">
                <div class="col-md">
                    <p class="text-md-start">
                        Kantor Konsultan Pajak Budi Indratno adalah kantor konsultan pajak yang telah mendapat 
                        Izin Praktik Konsultan Pajak dari Direktur Jenderal Pajak dengan Register Level B dan 
                        Izin Kuasa Hukum Pajak dari Pengadilan Pajak yang siap  melayani klien baik badan maupun 
                        perseorangan dalam bidang Accounting  Service, Auditing, Tax Planning, Konsultasi dan Pemeriksaan Pajak. 
                    </p>
                </div>
                <div class="col-md">
                    <p class="text-md-start">
                        Pengalaman staf kami yang telah bekerja lebih dari 10 tahun sebagai konsultan  pajak, konsultan akuntansi 
                        dan auditor pada kantor akuntan publik, membuat  kami mampu memahami kewajiban perpajakan, baik secara konsep 
                        maupun  praktek sehingga menjadi bekal utama kami untuk mendampingi klien dalam  menghadapi masalah-masalah
                        perpajakan serta dapat memberikan solusi  komprehensif atas seluruh permasalahan perpajakan perusahaan anda.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="team" class="container-md mb-3">
        <div class="row text-center mb-1">
            <h2 class="fw-bold">Our Team</h2>
        </div>
        <div class="row text-center mx-auto">
            <div class="col mb-3">
                <img src="{{url('/img/budi_indratno.png')}}" width="300" height="400" class="d-inline-block align-top mb-3" alt="Budi Indratno">
                <div class="row text-center">
                    <p class="h5">
                        BUDI INDRATNO,<br> 
                        SE., M.Ak., BKP., CTAP.
                    </p>
                </div>
            </div>
            <div class="col mb-3">
                <img src="{{url('/img/bambang_ariwibowo.png')}}" width="300" height="400" class="d-inline-block align-top mb-3" alt="Bambang Ariwibowo">
                <div class="row text-center">
                    <p class="h5">
                        BAMBANG ARIBOWO,<br>
                        SE., Ak., CA., CTA., ACPA.
                    </p>
                </div>
            </div>
            <div class="col mb-3">
                <img src="{{url('/img/erfan_erfiansyah.png')}}" width="300" height="400" class="d-inline-block align-top mb-3" alt="Erfan Erfiansyah">
                <div class="row text-center">
                    <p class="h5">
                        ERFAN ERFIANSYAH,<br>
                        SE., M.Ak., CTA., ACPA., CPRM.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="container-md mb-3">
        <div class="text-center">
            <h2 class="fw-bold">Our Services</h2>
        </div>

        <div class="row mx-auto mt-3">
            <div class=" col-lg border rounded mx-2 hover-div">
                <div class="row align-items-center p-1 mt-2">
                    <div class="col-md-2 text-center">
                        <i class="fa-sharp fa-solid fa-building fa-2xl"></i>
                    </div>
                    <div class="col-md">
                        <p class="fs-5 mt-3">Penyusunan Manual Pajak Perusahaan</p>
                    </div>
                </div>
                <div class="row align-items-center ms-1 mb-3">
                    <p>Membantu klien perusahaan menyusun pedoman perpajakan yang berisis kebijakan, strategi, prosedur, pelaporan, dan petunjuk teknis perhitungan pajak.</p>
                </div>
            </div>
            <div class="col-lg border rounded mx-2 hover-div">
                <div class="row align-items-center p-1 mt-2">
                    <div class="col-md-2 text-center">
                        <i class="fa-sharp fa-solid fa-file-lines fa-2xl"></i>
                    </div>
                    <div class="col-md">
                        <p class="fs-5 mt-3">Penyusunan Transfer Pricing Documentation</p>
                    </div>
                </div>
                <div class="row align-items-center ms-1 mb-3">
                    <p>Memberikan masukan pada dokumen dan strategi yang diperlukan untuk mencegah kerugian dari transaksi pihak terkait dan skenario transfer pricing.</p>
                </div>
            </div>
            <div class=" col-lg border rounded mx-2 hover-div">
                <div class="row align-items-center p-1 mt-2">
                    <div class="col-md-2 text-center">
                        <i class="fa-sharp fa-solid fa-scale-balanced fa-2xl"></i>
                    </div>
                    <div class="col-md">
                        <p class="fs-5 mt-3">Penyusunan Asistensi Pajak</p>
                    </div>
                </div>
                <div class="row align-items-center ms-1 mb-3">
                    <p>Memberikan masukan pada dokumen dan strategi yang diperlukan untuk mencegah kerugian dari transaksi pihak terkait dan skenario transfer pricing.</p>
                    <a href="#">Selengkapnya...</a>
                </div>
            </div>
        </div>
    </div>

    <div id="client" class="container-md mb-5">
        <div class="text-center">
            <h2 class="fw-bold">Our Client</h2>
        </div>
        <div class="row">
            <div class="container">
                <section class="logo-carousel slider" data-arrows="true">
                    <div class="slide">
                        <img src="{{url('/img/pt_garindo_persada_trans.jpg')}}" height="150">
                    </div>
                    <div class="slide">
                        <img src="{{url('/img/pt_niaga_handal_cemerlang.jpg')}}" height="150">
                    </div>
                    <div class="slide">
                        <img src="{{url('/img/irman_jaya_express.png')}}" height="150">
                    </div>
                    <div class="slide">
                        <img src="{{url('/img/pt_indomas_putrajaya.png')}}" height="150">
                    </div>
                    <div class="slide">
                        <img src="{{url('/img/cv_padajaya_pelita.png')}}" height="150">
                    </div>
                    <div class="slide">
                        <img src="{{url('/img/pt_pradia_tours_travel.jpg')}}" height="150">
                    </div>
                    <div class="slide">
                        <img src="{{url('/img/pt_putihbersih_dermaessen_indonesia.png')}}" height="150">
                    </div>
                    <div class="slide">
                        <img src="{{url('/img/mks.png')}}" height="150">
                    </div>
                </section>
            </div>
          </div>
    </div>

    {{-- footer section--}}
	@include('partials.footer')
</body>
</html>