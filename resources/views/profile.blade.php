@extends('layout.navbar')
@section('content')
<div>
    <img class="w-full shadow" src="{{ asset('assets/profile/Group 12.png') }}" />
</div>

<div class="mt-10">
    <h1 class="text-center font-bold text-2xl">Sejarah</h1>
    <div class="bg-green-800 bg-opacity-30 columns-2 mx-12 mt-3 rounded-xl shadow-lg">
        <div class=" text-sm m-16 text-justify font-semibold space-y-4 text-[20px] -tracking-2">
            <p>
                Jurusan Teknik Komputer yang sebelumnya bernama Sistem Komputer merupakan salah satu jurusan yang ada di Fakultas Teknologi Informasi Universitas Andalas. Jurusan ini didirikan pada tanggal 15 Juli 2008 melalui Surat Keputusan Jenderal pendidikan tinggi Departemen Pendidikan Nasional Nomor 2204/D/T/2008 dengan program studi S1 Sistem Komputer di bawah Jurusan Matematika Fakultas Matematika dan Ilmu Pengetahuan Alam. Jurusan Sistem Komputer bergabung dengan Jurusan Sistem Informasi membentuk Fakultas Teknologi Informasi pada tanggal 12 Oktober 2012.
            </p>
            <p>
                Jurusan Teknik Komputer yang sebelumnya bernama Sistem Komputer merupakan salah satu jurusan yang ada di Fakultas Teknologi Informasi Universitas Andalas. Jurusan ini didirikan pada tanggal 15 Juli 2008 melalui Surat Keputusan Jenderal pendidikan tinggi Departemen Pendidikan Nasional Nomor 2204/D/T/2008 dengan program studi S1 Sistem Komputer di bawah Jurusan Matematika Fakultas Matematika dan Ilmu Pengetahuan Alam. Jurusan Sistem Komputer bergabung dengan Jurusan Sistem Informasi membentuk Fakultas Teknologi Informasi pada tanggal 12 Oktober 2012.
            </p>
        </div>
        <div class="py-16 ml-10 ">
            <img class="w-[485px] h-[350px]" src="{{ asset('assets/profile/Rectangle 36.png') }}" />
        </div>
    </div>
</div>

<div class="mt-9">
    <h1 class="text-center font-bold text-2xl">Visi</h1>
    <div class="bg-green-800 bg-opacity-30  mt-3 rounded-xl shadow-lg py-16 px-10 mx-12">
        <img class="w-[300px] h-[165px] mx-auto" src="{{ asset('assets/profile/Rectangle 43.png') }}" />
        <h1 class="font-medium italic text-center text-xl mt-10">“Menjadi Program Studi Teknik Komputer yang terkemuka di bidang Rekayasa Sistem Tertanam di
            tingkat Nasional pada tahun 2028”</h1>
    </div>
</div>

<div class="mt-9">
    <h1 class="text-center font-bold text-2xl">Misi</h1>
    <div class="bg-green-800 bg-opacity-30  mt-3 rounded-xl columns-2 shadow-lg py-16 mx-12">
        <img class="w-[480px] h-[280px] m-auto" src="{{ asset('assets/profile/Rectangle 44.png') }}" />
        <ol class="list-decimal text-justify w-4/5 text-lg font-medium space-y-4">
            <li>Menyelenggarakan pendidikan berkualitas tinggi untuk menghasilkan lulusan yang profesional dan mampu memenuhi kebutuhan masyarakat, industri dan pemerintah.</li>
            <li>Melaksanakan riset untuk pengembangan konsep dan ilmu yang berkelanjutan di bidang Teknik Komputer.</li>
            <li>Melaksanakan pengabdian masyarakat dalam rangka penerapan ilmu teknik komputer.</li>
        </ol>
    </div>
</div>

<div class="mt-9">
    <h1 class="text-center font-bold text-2xl">Tujuan & Sasaran</h1>
    <div class="bg-green-800 bg-opacity-30  mt-3 rounded-xl columns-2 shadow-lg py-16 mx-12">
        <ol class="list-disc text-justify text-base font-medium space-y-5 mt-10 mx-10 ">
            <li>Menjalankan sistem pendidikan dengan penjaminan mutu sesuai Standar Nasional Perguruan Tinggi (SNPT).</li>
            <li>Mengembangkan ilmu, keterampilan dan pengalaman untuk pemecahan masalah dalam bidang Teknik Komputer.</li>
            <li>Menghasilkan lulusan yang berkualitas dalam menguasai bidang Teknik Komputer dengan mengaplikasikannya ke dalam dunia kerja serta memiliki keterampilan untuk berwirausaha.</li>
        </ol>
        <img class="w-[500px] h-[350px] ml-10" src="{{ asset('assets/profile/Rectangle 46.png') }}" />
    </div>
</div>
<br>
@endsection
