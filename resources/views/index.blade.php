<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    {{-- navbar section--}}
	@include('partials.navbar')

    {{-- content --}}
    <div id="image-text" class="d-flex align-items-center justify-content-center mb-3 image-index" style="background-image: url('{{ asset('img/index_img.jpg')}}')">
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
            <h2>Our Team</h2>
        </div>
        <div class="row text-center">
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
            <h2>Our Services</h2>
        </div>
    </div>

    <div id="client" class="container-md mb-3">
        <div class="text-center">
            <h2>Our Client</h2>

        </div>
    </div>

    {{-- footer section--}}
	@include('partials.footer')
</body>
</html>