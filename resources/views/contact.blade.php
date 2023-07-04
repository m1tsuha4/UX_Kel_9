@extends('layout.navbar')
@section('content')
<div class="m-20">
    <img class="w-[1280px] h-[700px] shadow rounded-[15px] mx-16" src="{{ asset('assets/contact/hero.png') }}" />
</div>

<div>
    <h1 class="font-bold text-2xl mb-5 ml-20">KONTAK</h1>
    <div class="columns-2 mx-20 text-lg font-regular">
        <div class="bg-[#09702E] rounded-2xl bg-opacity-30 mb-16 h-[250px] pt-8 px-8">
            <h1>Jurusan Teknik Komputer</h1>
            <h1>Fakultas Teknologi Informasi</h1>
            <h1>Universitas Andalas</h1>
            <h1>Kampus UNAND</h1>
            <h1>Limau Manis, Padang, Sumatera Barat, Indonesia</h1>
            <h1>25163</h1>
        </div>
        <div class="bg-[#09702E] rounded-2xl bg-opacity-30 px-6 h-[250px] pt-8 text-justify">
            <h1>Masukan dan saran dari pengguna sangat kami butuhkan agar dapat mejadi pemicu perkembangan Teknik Komputer UA ke arah yang lebih  baik lagi nantinya.Sampaikan pertanyaan, kritik dan saran anda  kepada Teknik Komputer UA melalui dibawah ini.</h1>
        </div>
    </div>
</div>

<div class="bg-[#09702E] rounded-2xl bg-opacity-30 px-6 mx-20 py-4">
    <h1 class="ml-4 py-4">Layanan pada hari dan jam kerja, dengan nomor sebagai berikut:</h1>
    <div class="text-justify ml-4">
        <div class="">
            <h1 class="font-bold">Teknik Komputer Center   : 08+++++++</h1>
            <h1>Pertanyaan umum  </h1>
            <h1 class="font-bold mt-4">Teknik Komputer Lab      : 08+++++++</h1>
            <h1>Pertanyaan seputar Laboratorium Teknik Komputer                 </h1>
            <h1 class="font-bold mt-4">Teknik Komputer Akademik  :08+++++++</h1>
            <h1>Pertanyaan seputar Akademik                                      </h1>
            <h1 class="font-bold mt-4">Email                     : ce@it.unand.ac.id</h1>
        </div>
    </div>
</div>

<div class="bg-[#09702E] rounded-2xl bg-opacity-30 mx-20 px-32 py-5 items-center mt-5 mb-10">
    <img class="w-[1050px] h-[825px] shadow rounded-[15px] " src="{{ asset('assets/contact/image 1.png') }}" />
</div>

<div class="mb-10">
    <h1 class="text-2xl font-bold ml-20 mb-8">MEDIA SOSIAL</h1>
    <div class="bg-[#09702E] rounded-2xl bg-opacity-30 mx-20">
        <div class="flex flex-row justify-between px-20 py-16">
            <div class="font-bold text-center">
                <img class="w-[90px] h-[90px] shadow rounded-full mx-auto" src="{{ asset('assets/contact/image 6.png') }}" />
                <h1>EMAIL</h1>
                <a href="#" class="underline">ce@it.unand.ac.id</a>
            </div>
            <div class="font-bold text-center">
                <img class="w-[90px] h-[90px] shadow rounded-full mx-auto" src="{{ asset('assets/contact/image 5.png') }}" />
                <h1>YOUTUBE</h1>
                <a href="#" class="underline">Teknik Komputer Universitas Andalas</a>
            </div>
            <div class="font-bold text-center">
                <img class="w-[90px] h-[90px] shadow rounded-full mx-auto" src="{{ asset('assets/contact/image 4.png') }}" />
                <h1>FACEBOOK</h1>
                <a href="#" class="underline">Sistem Komputer - Universitas Andalas</a>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center font-bold text-2xl my-8">“Tidak ada yang begitu menghargai nilai kritik membangun seperti orang yang memberikannya."</h1>

@endsection
