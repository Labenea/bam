@extends('main.layout.app')

@section('content')
<div id="compro" class="container py-5 navbar-compen">
    <div class="row">
        <div class="col-6 px-3">

            <h1 class="fw-bold blue-700 pt-2">Think Big to do Better</h1>
            <h4 class="fw-light pt-2">
                Menjadi perusahaan
                nasional yang dapat memberikan solusi multi bidang dalam ruang lingkup
                teknologi kesehatan, sehingga dapat memberikan pelayanan terbaik, serta sumbangsih kepada masyarakat dan
                negara.
            </h4>
            <div class="d-grid gap-2 mt-5">

                <a class="btn btn-primary" href="#aboutUs">About Us</a>
            </div>
        </div>
        <div class="col-6">
            <img src="{{asset("images/cover/image-015.jpg")}}" class="img-fluid" alt="">
        </div>
    </div>
</div>
<div class="py-5 bg-blue-700">
    <div id="aboutUs" class="container">
        <h2 class="text-white text-center">ABOUT US</h2>
        <div class="row justify-content-end py-5">

            <div class="col-6">
                <div class="">
                    <img src="{{asset("images/icon/map-nganjuk.png")}}" class="map-nganjuk mx-auto d-block" alt="">
                    <p class="text-white text-center">NGANJUK</p>
                </div>
            </div>
            <div class="col-6">
                <p class="text-white">
                    PT. BAWERA ARTHA MAKMUR berdiri pada tanggal 14 Juni 2021 dengan alamat Perum Zahro In 2 Blok A
                    No.14 Nganjuk – Jawa Timur
                </p>
                <p class="text-white">PT. BAWERA ARTHA MAKMUR memiliki ijin Usaha Sesuai Bidang Perusahaan</p>
                <ul class="text-white">
                    <li>NIB (Nomor Induk Berusaha)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 1225000633908</li>
                    <li>NPWP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 42.752.534.0-655.000</li>
                    <li>Surat Keterangan Domisili&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        470/455/411.509/03.2020</li>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="bg-light-gray">
    <div id="visi" class="container  py-5">
        <h2 class="text-center blue-700">VISI</h2>
        <blockquote class="blockquote text-center">
            <p> Menjadi perusahaan
                nasional yang dapat memberikan solusi multi bidang dalam ruang lingkup
                teknologi kesehatan, sehingga dapat memberikan pelayanan terbaik, serta sumbangsih kepada masyarakat dan
                negara.</p>
        </blockquote>
        <br><br>
    </div>
</div>

<div class="bg-white-pure">
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <h2 class="blue-700">Misi Perusahaan</h2>
                <br>
                <ul>
                    <li>Menjadi distributor nasional alat kesehatan dengan meng ageni produk - produk terbaik.</li>
                    <li>Selalu memberikan pelayanan terbaik dan tepat waktu kepada pelanggan.</li>
                    <li>Menjalin hubungan kerjasama
                        dengan perusahaan, organisasi, instansi pemerintahan dan pihak – pihak terkait dengan menawarkan
                        solusi terbaik untuk membantu dalam meningkatkan taraf kesehatan masyarakat.</li>
                    <li>Mengelola SDM yang unggul, jujur, dan berkomitmen sehingga dapat memberikan pelayanan prima</li>
                </ul>
            </div>
            <div class="col-6">
                <div class="px-4">
                    <img src="{{asset("images/pengadaan/misi.jpeg")}}" class="img-misi d-block mx-auto" alt="">
                </div>
            </div>
        </div>

    </div>
</div>
<div id="keunggulan" class="bg-blue-700">
    <div class="container py-4">
        <div class="py-5">
            <h6 data-aos="zoom-in" class="text-center fw-bold text-white ">KENAPA</h6>
            <h2 data-aos="zoom-in" class="text-center fw-bold text-white">MEMILIH KAMI</h2>
        </div>
        <div class="row justify-content-evenly ">
            <div data-aos="fade-up" class="col-md-2 mb-5 mb-md-0">
                <div class="px-4 mb-4 d-flex justify-content-center">
                    <img src="{{ asset('images/icon/medal.png') }}" class="img-fluid choose-us-image " alt="">
                </div>
                <h4 class="text-center text-white mb-4">QUALITY</h4>
                <p class="text-center text-white">Memberikan kualitas pelayanan dalam mendukung terciptanya pembangunan dan kebutuhan konsumen.</p>
            </div>
            <div data-aos="fade-up" class="col-md-2 mb-5 mb-md-0">
                <div class="px-4 mb-4 d-flex justify-content-center">
                    <img src="{{ asset('images/icon/handshake.png') }}" class="img-fluid choose-us-image " alt="">
                </div>
                <h4 class="text-center text-white mb-4">TRUST</h4>
                <p class="text-center text-white">Kami sangat menjunjung tinggi Kepercayaan bermitra </p>
            </div>
            <div data-aos="fade-up" class="col-md-2 mb-5 mb-md-0">
                <div class="px-4 mb-4 d-flex justify-content-center">
                    <img src="{{ asset('images/icon/network.png') }}" class="img-fluid choose-us-image " alt="">
                </div>
                <h4 class="text-center text-white mb-4">CONNECTION</h4>
                <p class="text-center text-white">Kami memiliki jaringan dan pekerja profesional yang siap membantu anda dengan hasil terbaik</p>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <h2 class="text-center blue-700">
        OUR BUSSINES & SERVICES
    </h2>
    <br><br>
    <div class="row">
        <div class="col-6">
            <img src="{{asset("images/pengadaan/room.jpeg")}}" class="img-misi d-block mx-auto"" alt="">
        </div>
        <div class=" col-6">
            <br>
            <h3 class="blue-700">
                Medical devices unit
            </h3>
            <ul>
                <li>Critical Care
                </li>
                <li>OT Room </li>
                <li>Laboratorium</li>
            </ul>
            <h3 class="blue-700">
                Services
            </h3>
            <ul>
                <li>Repair
                </li>
                <li> Spare part and Accesories</li>
                <li>Maintance</li>
                <li> Installation and Displacement</li>
            </ul>
        </div>
    </div>
</div>
@endsection
