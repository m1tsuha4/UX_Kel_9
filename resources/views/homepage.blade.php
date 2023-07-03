@extends('layout.navbar')
@section('content')
    <img src="{{ asset('assets/hero.png') }}" alt="hero" width="100%" >
    <div id="berita" class="mt-24">
    <div class="ml-20">
        <h1 class="text-3xl font-medium underline">Berita</h1>
        <div>
            <div class="flex flex-row space-x-10 mt-10">
                <div class="w-[500px] h-[350px]">
                    <img src="{{ asset('assets/berita/Rectangle 4 (6).png') }}" alt="berita1" width="100%">
                    <p class="text-sm font-medium text-center">Lorem Ipsummm</p>
                </div>
                <div class="w-[500px] h-[350px]">
                    <img src="{{ asset('assets/berita/Rectangle 4 (7).png') }}" alt="berita2" width="100%">
                    <p class="text-sm font-medium text-center">Lorem Ipsummm</p>
                </div>
                <div class="w-[500px] h-[300px]">
                    <img src="{{ asset('assets/berita/berita 3.png') }}" alt="berita3" width="100%">
                    <p class="text-sm font-medium text-center">Lorem Ipsummm</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="sorotan" class="mt-24">
    <div class="mx-20">
        <h1 class="text-3xl font-medium underline mb-7">Sorotan</h1>
        <div class="bg-[#09702E] bg-opacity-30 p-28 rounded-3xl space-y-20">
            <div class="flex flex-row justify-between mt-10">
                <div class="w-[150px] h-[150px]">
                    <img src="{{ asset('assets/sorotan/Rectangle 4.png') }}" alt="sorotan1" width="100%">
                    <p class="text-sm font-medium text-center">“Kurikulum yang selalu mengikuti kemajuan teknologi dan perkembangan zaman.”</p>
                </div>
                <div class="w-[150px] h-[150px]">
                    <img src="{{ asset('assets/sorotan/Rectangle 4 (1).png') }}" alt="sorotan2" width="100%">
                    <p class="text-sm font-medium text-center">“70% lulusan memiliki waktu tunggu dibawah 6 bulan untuk mendapatkan pekerjaan pertama”</p>
                </div>
                <div class="w-[150px] h-[150px] ">
                    <img src="{{ asset('assets/sorotan/Rectangle 4 (2).png') }}" alt="sorotan3" width="100%">
                    <p class="text-sm font-medium text-center">“Terakreditasi B oleh Badan Akreditasi Nasional Perguruan Tinggi</p>
                </div>
            </div>
            <br>
            <br>
            <div class="flex flex-row justify-between ">
                <div class="w-[150px] h-[150px]">
                    <img src="{{ asset('assets/sorotan/Rectangle 4 (3).png') }}" alt="sorotan1" width="100%">
                    <p class="text-sm font-medium text-center">“Komposisi dosen dengan kualifikasi S3 mencapai 25%.”</p>
                </div>
                <div class="w-[150px] h-[150px]">
                    <img src="{{ asset('assets/sorotan/Rectangle 4 (4).png') }}" alt="sorotan2" width="100%">
                    <p class="text-sm font-medium text-center">“10 besar ratio keketatan dari seluruh jurusan di Universitas Andalas”</p>
                </div>
                <div class="w-[150px] h-[150px] ">
                    <img src="{{ asset('assets/sorotan/Rectangle 4 (5).png') }}" alt="sorotan3" width="100%">
                    <p class="text-sm font-medium text-center">“5 besar kinerja publikasi dari seluruh jurusan di Universitas Andalas”</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="w-[1440px] h-[1700px] relative bg-white">
    <div class=" left-[79px] top-[57px] absolute">
        <div class="w-[189px] left-[9px] top-0 absolute text-black text-3xl underline font-medium">Topik</div>
        <div class="w-[1299px] h-[316px] left-0 top-[50px] absolute">
            <img class="w-[603px] h-[314px] left-0 top-[2px] absolute rounded-[25px]" src="{{ asset('assets/topik/Rectangle 4 (10).png') }}" />
            <img class="w-[260px] h-[314px] left-[697px] top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/Rectangle 4 (11).png') }}" />
            <img class="w-[260px] h-[314px] left-[1039px] top-[2px] absolute rounded-[25px]" src="{{ asset('assets/topik/Rectangle 4 (12).png') }}" />
        </div>
        <div class="w-[1295.73px] h-[314px] left-[9px] top-[450px] absolute">
            <img class="w-[260px] h-[314px] left-[688px] top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/lss.png') }}" />
            <img class="w-[260px] h-[314px] left-0 top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/reslab.png') }}" />
            <img class="w-[260px] h-[314px] left-[1035.73px] top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/digikom.png') }}" />
            <img class="w-[260px] h-[314px] left-[335.91px] top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/ljk.png') }}" />
        </div>
    </div>
    <div class="w-[1301px] h-[314px] left-[83px] top-[1300px] absolute">
        <img class="w-[260px] h-[314px] left-[698px] top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/himatekom.png') }}" />
        <img class="w-[260px] h-[314px] left-0 top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/perpustakaan.png') }}" />
        <img class="w-[260px] h-[314px] left-[1041px] top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/karir.png') }}" />
        <img class="w-[260px] h-[314px] left-[351px] top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/pusatbahasa.png') }}" />
    </div>
    <img class="w-[603px] h-[314px] left-[777px] top-[900px] absolute rounded-[25px]" src="{{ asset('assets/topik/Rectangle 4 (19).png') }}" />
    <div class="w-[603px] h-[314px] left-[79px] top-[900px] absolute">
        <img class="w-[260px] h-[314px] left-0 top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/portalakademik.png') }}" />
        <img class="w-[260px] h-[314px] left-[343px] top-0 absolute rounded-[25px]" src="{{ asset('assets/topik/portalmbkm.png') }}" />
    </div>
    </div>
@endsection
