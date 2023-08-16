@extends('templates.default')

@section('content')
<div class="mt-24 mx-auto w-[90%] h-fit border-2 rounded-xl lg:rounded-[50px] lg:rounded-tr-[250px] bg-[#8404F4] lg:bg-[#FFEEFE] text-[#F7F1F1] lg:flex">
    <div class="lg:w-1/2 h-max lg:bg-[#8404F4] rounded-xl lg:rounded-tl-[50px] lg:rounded-bl-[50px]">
        <h1 class="font-bold text-center lg:text-left text-[#FCF304] lg:ml-12 pt-8 text-4xl mx-4">DELAPAN DIMENSI <br> KEPEMIMPINAN</h1>
        <h1 class="mx-4 lg:mx-12 text-center lg:text-left text-1xl mt-4 text-[#F7F1F1]">
            Dalam asessment ini, Anda akan mengeksplorasi tiga area utama, yaitu
        </h1>
        <h1 class="mx-4 lg:mx-12 text-1xl mt-4 text-[#F7F1F1]">
            1. Dimensi kepemimpinan dominan<br>
            2. Pendorong psikologis, motiasi, dan "titik buta" khas gaya kepemimpinan <br>
            3. Apa yang paling penting dalam pengembangan kepemimpinan Anda saat ini dan yang akan datang
        </h1>
        <h1 class="mx-4 text-xl lg:text-2xl text-center mt-8">Mulai ekplorasi, klik tombol dibawah ini</h1>
        <img src="dist/ArrowDown1.png" alt="" width="75" height="75" class="mx-auto mt-4 mb-8">
    </div>
    <div class="max-lg:hidden lg:w-1/2 h-full">
        <img src="dist/body1image.png" alt="" width="500" height="500">
    </div>
</div>
<div class="mt-8 lg:mt-12 w-[90%] h-fit border-2 bg-[#8404F4] rounded-xl lg:rounded-[50px] mx-auto">
    <h1 class="text-2xl lg:text-4xl text-center lg:text-left font-semibold mx-4 lg:ml-12 mt-8 lg:mt-12 text-[#F7F1F1]">
        Luangkan waktu 15 menit saja !! <br>
        Yuk langsung klik tombol mulai di bawah ini!
    </h1>
    <h1 class="text-base lg:text-xl text-center lg:text-left mx-4 lg:ml-12 mt-2 text-[#F7F1F1] italic font-light">
        *Gunakan kode akses yang sudah anda terima dari admin
    </h1>
    <div class="group w-fit mx-auto">
        <img src="dist/play.png" alt="" class="w-[60px] mx-auto mt-8 lg:mt-24 transition ease-in-out delay-150 duration-300 group-hover:hidden ">
        <button class="hidden transition ease-in-out delay-150 duration-300 group-hover:block mx-auto text-3xl text-center rounded-full font-bold mt-8 lg:mt-24 text-[#8404F4] bg-[#FCF304] py-3 px-10">
            <a href="/user/form?destination=Section-1-1">Mulai</a>
        </button>
    </div>
    <h1 class="text-md font-light italic text-[#F7F1F1] text-center mt-8 lg:mt-24 mb-8">
        Sudah mengerjakan? Lihat hasilnya <span class="underline cursor-pointer hover:text-sky-500">disini!</span>
    </h1>
</div>
<div class="mt-8 lg:mt-12 w-[90%] h-fit border-2 bg-[#8404F4] rounded-xl lg:rounded-[50px] mx-auto">
    <h1 class="text-xl lg:text-4xl text-center mx-4 mt-8 mb-2 lg:mb-4 text-[#F7F1F1]">
        Selamat! Dimensi Kepemimpinan Anda Adalah :
    </h1>
    <hr class="w-3/4 mx-auto">
    <h1 class="text-4xl lg:text-6xl mx-4 mt-8 lg:mt-24 font-bold md:font-black text-[#F7F1F1] text-center">
        Baik Hati dan <br> Tidak Sombong
    </h1>
    <h1 class="mx-4 mt-8 lg:mt-24 font-light text-center text-[#F7F1F1] italic">
        *Untuk mengetahui detail lebih lanjut, silahkan unduh file di bawah ini
    </h1>
    <button class="mt-12 mb-8 mx-auto block border-2 rounded-full border-[#FCF304] text-[#FCF304] py-3 px-10">Unduh Hasil Tes</button>
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