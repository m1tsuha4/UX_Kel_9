<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Engineering</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function showMore(){
            if(document.getElementById("navbar-tambahan").style.display == "flex"){
                document.getElementById("navbar-tambahan").style.display = "none";
                document.getElementById("about").style.textDecoration = "none";
            } else {

                document.getElementById("navbar-tambahan").style.display = "flex";
                document.getElementById("about").style.textDecoration = "underline";
                document.getElementById("about").style.textDecorationColor = "#FFFFFF";
                document.getElementById("about").style.textDecorationThickness = "2px";
                document.getElementById("about").style.textUnderlineOffset = "auto";
            }
        }
        // function collapse() {
        //     document.getElementById("navbar-tambahan").style.display = "none";
        //     document.getElementById("about").style.textDecoration = "none";
        // }
    </script>
</head>
<body>

<div id="navbar">
    <div class="bg-[#10AE52] flex flex-row justify-between py-[28px] pl-[100px] pr-[50px]">
        <div class="logo kiri">
            <img src="{{ asset('assets/image 1.png') }}" alt="logo jurusan" width="125" height="65">
        </div>
        <div class="my-auto text-white font-medium space-x-12 text-sm">
            <a href="/" >
                HOME
            </a>
            <a href="#" onmouseover="showMore()" onmouseout="collapse()" id="about">
                ABOUT
            </a>
            <a href="/contact">
                CONTACT
            </a>
        </div>
        <div class="columns-2 mt-3">
            <img src="{{ asset('assets/indonesia 1.png') }}" alt="indonesia" width="20" >
            <img src="{{ asset('assets/uk 1.png') }}" alt="inggris" width="20">
        </div>
    </div>
    <div class="flex flex-row space-x-10 px-64  py-10 bg-[#D9D9D9]" id="navbar-tambahan" style="display: none;">
        <a href="/about/profile" class="font-bold">Profil</a>
        <a href="/about/staff" class="font-bold">Staff</a>
        <a href="/about/berita" class="font-bold">Berita</a>
        <a href="/about/akademik" class="font-bold">Akademik</a>
        <div>
            <a class="font-bold">Lab</a>
            <ul class="opacity-50 mt-6">
                <li><a href="http://reslab.sk.fti.unand.ac.id/">Lab Robotika dan Sistem Tertanam</a></li>
                <li><a href="http://lkj.sk.fti.unand.ac.id/">Lab Komputer dan Jaringan</a></li>
                <li><a href="http://lss.sk.fti.unand.ac.id/">Lab Sinyal dan Sistem</a></li>
                <li><a href="http://dijikom.sk.fti.unand.ac.id/">Lab Digital dan Arsitektur Kompute</a></li>
            </ul>
        </div>
        <div>
            <a class="font-bold">Jurnal</a>
            <ul class="opacity-50 mt-6">
                <li><a href="http://jitce.fti.unand.ac.id/index.php/JITCE">Jurnal JITCE</a></li>
                <li><a href="http://chipset.fti.unand.ac.id/index.php/chipset">Jurnal Chipset</a></li>
            </ul>
        </div>
        <div>
            <a class="font-bold">Tracer Study</a>
            <ul class="opacity-50 mt-6">
                <li><a href="http://karir.unand.ac.id/content/view?id=144&t=tracer-study-alumni-unand-lulusan-2018">Alumni</a></li>
                <li><a href="http://karir.unand.ac.id/content/view?id=175&t=survei-dudi-unand-2022">Pengguna Alumni</a></li>
            </ul>
        </div>
        <a href="/about/document" class="font-bold">Dokumen</a>
    </div>
</div>


@yield('content')


<div class="bg-gradient-to-b from-green-700 to-green-800">
    <div class=" flex flex-row justify-between pt-20 px-16">
        <div id="kiri">
            <img src="{{ asset('assets/image 1.png') }}" alt="logo jurusan" width="125" height="65">
            <div class="text-white">
                <p class="font-medium font-xl">Departemen Teknik Komputer</p>
                <p>Fakultas Teknologi Informasi</p>
                <p>Universitas Andalas</p>
                <p>Kampus UNAND Limau Manis</p>
                <p>Padang, Sumatera Barat, Indonesia</p>
                <p>25163</p>
            </div>
        </div>
        <div id="tengah" class="text-white text-center font-medium font-xl">
            <p>People who are really serious about software should make their  own hardware</p>
            <p>Alan kay</p>
        </div>
        <div id="kanan">
            <p class="text-white font-xl text-center">Get in touch with us</p>
            <div class="flex flex-row space-x-2">
                <img src="{{ asset('assets/google logo.png') }}" class="w-[51px] h-[51px] rounded shadow">
                <img src="{{ asset('assets/fb logo.png') }}" class="w-[51px] h-[51px] rounded shadow">
                <img src="{{ asset('assets/apple logo.png') }}" class="w-[51px] h-[51px] rounded shadow">
            </div>
        </div>
    </div>
    <p class="text-white text-center font-medium font-xl py-8">2023 Computer Engineering FTI Universitas Andalas</p>
</div>


</body>
</html>
