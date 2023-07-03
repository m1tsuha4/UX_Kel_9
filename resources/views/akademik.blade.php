@extends('layout.navbar')
@section('content')
    <div class="mx-20 mt-20">
        <img class="w-[1280px] h-[580px] shadow rounded-[25px]" src="{{ asset('assets/akademik/Rectangle 2.png') }}" />
    </div>

    <div class="my-10">
        <h1 class="text-center">SEBARAN MATA KULIAH KURIKULUM 2021 PROGRAM STUDI TEKNIK KOMPUTER </h1>
        <h1 class="text-center"> FAKULTAS TEKNOLOGI INFORMASI-UNIVERSITAS ANDALAS</h1>

        <div class="columns-2 mx-20 mt-10">
            <div class="space-y-10">
                <img class="w-[600px] h-[520px]" src="{{ asset('assets/akademik/ss f 1.png') }}" />
                <img class="w-[600px] h-[570px]" src="{{ asset('assets/akademik/Sem3.png') }}" />
                <img class="w-[600px] h-[570px]" src="{{ asset('assets/akademik/Sem5.png') }}" />
                <img class="w-[600px] h-[480px]" src="{{ asset('assets/akademik/Sem7.png') }}" />
                <h1>Profil Profesional Mandiri</h1>
                <img class="w-[600px] h-[300px]" src="{{ asset('assets/akademik/Screenshot 2023-05-24 203640 1.png') }}" />
            </div>
            <div class="space-y-10">
                <img class="w-[600px] h-[420px]" src="{{ asset('assets/akademik/Sem2.png') }}" />
                <img class="w-[610px] h-[600px]" src="{{ asset('assets/akademik/Sem4.png') }}" />
                <img class="w-[600px] h-[560px]" src="{{ asset('assets/akademik/Sem6.png') }}" />
                <img class="w-[600px] h-[435px]" src="{{ asset('assets/akademik/Sem8.png') }}" />
                <h1>Capaian Pembelajaran</h1>
                <img class="w-[600px] h-[600px]" src="{{ asset('assets/akademik/Screenshot 2023-05-24 203813 1.png') }}" />
            </div>
        </div>
    </div>
@endsection
