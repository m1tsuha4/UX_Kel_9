@extends('layout.navbar')
@section('content')
<div>
    <img class="w-full shadow" src="{{ asset('assets/staff/hero (1).png') }}" />
</div>

<input type="text" placeholder="Search..." class="w-4/5 bg-gray-200 placeholder:text-slate-400 pl-10 rounded-xl h-10 mx-32 mt-20 h-10">

<h1 class="text-2xl ml-32 font-bold underline mt-10">Dosen</h1>
<div class="columns-2 space-y-10 mx-28 mt-10">
    <div class="bg-[#09702E] w-[600px] bg-opacity-30 columns-2 rounded-2xl shadow-xl">
        <img class="w-[200px] h-[200px] rounded-full my-10 ml-8" src="{{ asset('assets/staff/Pak Arrya.jpeg') }}" />
        <div class="py-10">
            <div class="font-bold mb-[35px]">
                <h1>Arrya Anandika, S.Kom., M.T.</h1>
                <h1>NIP : 199506232022031014</h1>
                <h1>arrya.anandika@it.unand.ac.id</h1>
            </div>
            <div class="flex flex-row">
                <img src="{{ asset('assets/staff/Sinta_Bulat 1.png') }}" class=" w-[40px] rounded-full mr-7" >
                <img src="{{ asset('assets/staff/1920px-Scopus_logo 1.png') }}" class="rounded-full w-[120px] h-10 mr-4" >
                <button class="bg-[#4CAF50] px-4 py-2 rounded-[13px]">Detail</button>
            </div>
        </div>
    </div>

    <div class="bg-[#09702E] w-[600px] bg-opacity-30 columns-2 rounded-2xl shadow-xl">
        <img class="w-[200px] h-[200px] rounded-full my-10 ml-8" src="{{ asset('assets/staff/budi.jpeg') }}" />
        <div class="py-10">
            <div class="font-bold mb-[35px]">
                <h1>Dr.Eng. Budi Rahmadya, M.Eng</h1>
                <h1>NIP: 198112222008121004</h1>
                <h1>budi-r@it.unand.ac.id</h1>
            </div>
            <div class="flex flex-row">
                <img src="{{ asset('assets/staff/Sinta_Bulat 1.png') }}" class=" w-[40px] rounded-full mr-7" >
                <img src="{{ asset('assets/staff/1920px-Scopus_logo 1.png') }}" class="rounded-full w-[120px] h-10 mr-4" >
                <button class="bg-[#4CAF50] px-4 py-2 rounded-[13px]">Detail</button>
            </div>
        </div>
    </div>

    <div class="bg-[#09702E] w-[600px] bg-opacity-30 columns-2 rounded-2xl shadow-xl">
        <img class="w-[200px] h-[200px] rounded-full my-10 ml-8" src="{{ asset('assets/staff/Desta-Yolanda.jpg') }}" />
        <div class="py-10">
            <div class="font-bold mb-[35px]">
                <h1>Desta Yolanda, M.T.</h1>
                <h1>NIDK:8835411019</h1>
                <h1>destayola@fti.unand.ac.id</h1>
            </div>
            <div class="flex flex-row">
                <img src="{{ asset('assets/staff/Sinta_Bulat 1.png') }}" class=" w-[40px] rounded-full mr-7" >
                <img src="{{ asset('assets/staff/1920px-Scopus_logo 1.png') }}" class="rounded-full w-[120px] h-10 mr-4" >
                <button class="bg-[#4CAF50] px-4 py-2 rounded-[13px]">Detail</button>
            </div>
        </div>
    </div>

    <div class="bg-[#09702E] w-[600px] bg-opacity-30 columns-2 rounded-2xl shadow-xl">
        <img class="w-[200px] h-[200px] rounded-full my-10 ml-8" src="{{ asset('assets/staff/dodon.jpg') }}" />
        <div class="py-10">
            <div class="font-bold mb-[35px]">
                <h1>Dodon Yendri, S.Kom., M.Kom</h1>
                <h1>NIP: 196603091986031001</h1>
                <h1>dodon@it.unand.ac.id</h1>
            </div>
            <div class="flex flex-row">
                <img src="{{ asset('assets/staff/Sinta_Bulat 1.png') }}" class=" w-[40px] rounded-full mr-7" >
                <img src="{{ asset('assets/staff/1920px-Scopus_logo 1.png') }}" class="rounded-full w-[120px] h-10 mr-4" >
                <button class="bg-[#4CAF50] px-4 py-2 rounded-[13px]">Detail</button>
            </div>
        </div>
    </div>

    <div class="bg-[#09702E] w-[600px] bg-opacity-30 columns-2 rounded-2xl shadow-xl">
        <img class="w-[200px] h-[200px] rounded-full my-10 ml-8" src="{{ asset('assets/staff/199111192018032001_2108181118_10.jpg') }}" />
        <div class="py-10">
            <div class="font-bold mb-[35px]">
                <h1>Nefy Puteri Novani, S.Kom., M.T.</h1>
                <h1>NIP: 199111192018032001</h1>
                <h1>nefyputeri@it.unand.ac.id</h1>
            </div>
            <div class="flex flex-row">
                <img src="{{ asset('assets/staff/Sinta_Bulat 1.png') }}" class=" w-[40px] rounded-full mr-7" >
                <img src="{{ asset('assets/staff/1920px-Scopus_logo 1.png') }}" class="rounded-full w-[120px] h-10 mr-4" >
                <button class="bg-[#4CAF50] px-4 py-2 rounded-[13px]">Detail</button>
            </div>
        </div>
    </div>

    <div class="bg-[#09702E] w-[600px] bg-opacity-30 columns-2 rounded-2xl shadow-xl">
        <img class="w-[200px] h-[200px] rounded-full my-10 ml-8" src="{{ asset('assets/staff/rizka-hadelina.jpg') }}" />
        <div class="py-10">
            <div class="font-bold mb-[35px]">
                <h1>Rizka Hadelina, S.Kom., M.T.</h1>
                <h1>NIP: 199404292022032014</h1>
                <h1>rizkahadelina@it.unand.ac.id</h1>
            </div>
            <div class="flex flex-row">
                <img src="{{ asset('assets/staff/Sinta_Bulat 1.png') }}" class=" w-[40px] rounded-full mr-7" >
                <img src="{{ asset('assets/staff/1920px-Scopus_logo 1.png') }}" class="rounded-full w-[120px] h-10 mr-4" >
                <button class="bg-[#4CAF50] px-4 py-2 rounded-[13px]">Detail</button>
            </div>
        </div>
    </div>

</div>

<div class="columns-4 w-1/12 mx-auto space-x-1">
    <h1 class="bg-[#09702E] bg-opacity-30 rounded-full text-center">1</h1>
    <h1>2</h1>
    <h1>3</h1>
    <h1>4</h1>
</div>

<h1 class="text-2xl ml-32 font-bold underline mt-10">Tenaga Kependidikan</h1>
<div class="columns-2 space-y-10 mx-28 mt-10">
    <div class="bg-[#09702E] w-[600px] bg-opacity-30 columns-2 rounded-2xl shadow-xl">
        <img class="w-[200px] h-[200px] rounded-full my-10 ml-8" src="{{ asset('assets/staff/mala.jpg') }}" />
        <div class="py-10">
            <div class="font-bold mb-[35px]">
                <h1>Nur Kumala Sari, S.Kom</h1>
                <h1>NIP</h1>
                <h1>ce@it.unand.ac.id</h1>
            </div>
            <div class="flex flex-row">
                <img src="{{ asset('assets/staff/Sinta_Bulat 1.png') }}" class=" w-[40px] rounded-full mr-7" >
                <img src="{{ asset('assets/staff/1920px-Scopus_logo 1.png') }}" class="rounded-full w-[120px] h-10 mr-4" >
                <button class="bg-[#4CAF50] px-4 py-2 rounded-[13px]">Detail</button>
            </div>
        </div>
    </div>

    <div class="bg-[#09702E] w-[600px] bg-opacity-30 columns-2 rounded-2xl shadow-xl">
        <img class="w-[200px] h-[200px] rounded-full my-10 ml-8" src="{{ asset('assets/staff/Ellipse 31 (6).png') }}" />
        <div class="py-10">
            <div class="font-bold mb-[35px]">
                <h1>Sari Purnama</h1>
                <h1>NIP</h1>
                <h1>nama@email.com</h1>
            </div>
            <div class="flex flex-row">
                <img src="{{ asset('assets/staff/Sinta_Bulat 1.png') }}" class=" w-[40px] rounded-full mr-7" >
                <img src="{{ asset('assets/staff/1920px-Scopus_logo 1.png') }}" class="rounded-full w-[120px] h-10 mr-4" >
                <button class="bg-[#4CAF50] px-4 py-2 rounded-[13px]">Detail</button>
            </div>
        </div>
    </div>
</div>
@endsection
