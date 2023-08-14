@extends('templates.default')

@section('content')
<div class="mt-24 mx-auto w-[90%] h-[500px] border-2 rounded-[50px] rounded-tr-[250px] bg-[#FFEEFE] text-[#F7F1F1] flex">
        <div class="w-1/2 h-full bg-[#8404F4] rounded-tl-[50px] rounded-bl-[50px]">
            <h1 class="font-bold text-[#FCF304] ml-12 pt-8 text-4xl">DELAPAN DIMENSI <br> KEPEMIMPINAN</h1>
            <h1 class="ml-12 text-1xl mt-4 text-[#F7F1F1]">
                Dalam asessment ini, Anda akan mengeksplorasi tiga area utama,  yaitu
            </h1>
            <h1 class="ml-12 text-1xl mt-4 text-[#F7F1F1]">
                1. Dimensi kepemimpinan dominan<br>
                2. Pendorong psikologis, motiasi, dan "titik buta" khas gaya kepemimpinan <br>
                3. Apa yang paling penting dalam pengembangan kepemimpinan Anda saat ini dan yang akan datang
            </h1>
            <h1 class="text-2xl text-center mt-8">Mulai ekplorasi, klik tombol dibawah ini</h1>
            <img src="dist/ArrowDown1.png" alt="" width="75" height="75" class="mx-auto mt-4">
        </div>
        <div class="w-1/2 h-full">
            <img src="dist/body1image.png" alt="" width="500" height="500">
        </div>
    </div>
    <div class="mt-24 w-[90%] h-[520px] border-2 bg-[#8404F4] rounded-[50px] mx-auto">
        <h1 class="text-4xl font-semibold ml-12 mt-12 text-[#F7F1F1]">
            Luangkan waktu 15 menit saja !! <br>
            Yuk langsung klik tombol mulai di bawah ini!
        </h1>
        <h1 class="text-xl ml-12 mt-5 text-[#F7F1F1] italic font-light">
            *Gunakan kode akses yang sudah anda terima dari admin
        </h1>
        <div class="container mx-auto">
            <button class="block mx-auto text-3xl text-center rounded-full font-bold mt-24 text-[#8404F4] bg-[#FCF304] py-3 px-10">
                <a href="/user/form?destination=Section-1-1">Mulai</a>
            </button>
        </div>
        <h1 class="text-md font-light italic text-[#F7F1F1] text-center mt-24">
            Sudah mengerjakan? Lihat hasilnya <span class="underline cursor-pointer hover:text-sky-500">disini!</span>
        </h1>
    </div>
    <div class="mt-24 w-[90%] h-[540px] border-2 bg-[#8404F4] rounded-[50px] mx-auto">
        <h1 class="text-4xl text-center mt-12 mb-4 text-[#F7F1F1]">
            Selamat! Dimensi Kepemimpinan Anda Adalah :
        </h1>
        <hr class="w-3/4 mx-auto">
        <h1 class="text-6xl mt-12 font-black text-[#F7F1F1] text-center">
            Baik Hati dan <br> Tidak Sombong
        </h1>
        <h1 class="mt-24 font-light text-center text-[#F7F1F1] italic">
            *Untuk mengetahui detail lebih lanjut, silahkan unduh file di bawah ini
        </h1>
        <button class="mt-12 mx-auto block border-2 rounded-full border-[#FCF304] text-[#FCF304] py-3 px-10">Unduh Hasil Tes</button>
    </div>
    <div class="mt-24 w-[90%] h-[520px] border-2 bg-[#8404F4] rounded-[50px] text-[#F7F1F1] mx-auto">
        <h1 class="mt-12 mb-4 text-4xl text-[#F7F1F1] text-center font-bold">
            WAH, TERNYATA KAMU BELUM MENGISI FORMNYA
            <br> 
            Klik <span class="font-bold underline cursor-pointer">DISINI</span> untuk segera mengisi
        </h1>
        <hr class="w-3/4 mx-auto"> 
    </div>
@endsection