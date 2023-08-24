
<div class="w-full flex bg-[#8404F4] mb-10 drop-shadow-2xl fixed top-0 left-0 right-0">
    <div class="block md:hidden w-8 h-8 ml-8"></div>
    <h1 class="my-4 mx-auto text-[#FCF304] font-bold max-md:hidden">Tranceformasi</h1>
    <h1 class="block mx-auto my-4 text-[#F7F1F1]">Delapan Dimensi Kepemimpinan</h1>
    <img src="/dist/profile.png" alt="" class="w-8 h-8 mx-0 mr-8 md:mx-auto my-auto cursor-pointer" onclick="onoverlay()">
</div>
    
</div>
<div id="overlay" class="bg-black top-0 left-0 w-full h-full opacity-30" onclick="offoverlay()"></div>
<div id="overlay1" class="bg-white dark:bg-slate-800 dark:text-slate-300 top-0 right-0 w-3/12 h-full z-10">
    <div class="w-3/12 flex bg-[#8404F4] drop-shadow-2xl items-center fixed top-0 right-0">
        <img src="/dist/profile.png" alt="" class="w-8 h-8 ml-8 my-auto cursor-pointer" onclick="offoverlay()">
        <h1 class="ml-4 pl-4 text-white my-4 border-l-2">Nama</h1>
        
    </div>
    <div class="block">
        <button class="mt-[3.3rem] py-4 flex mx-auto w-full text-lg border-b-2 border-slate-500">
            <div class="w-auto mx-auto flex">
                <img src="/dist/dashboardbook.png" alt="" class="h-8 w-auto">
                <h1 class="w-auto ml-5">Dashboard</h1>
            </div>
        </button>
        <button class="py-4 flex mx-auto w-full text-lg border-b-2 border-slate-500">
            <div class="w-auto mx-auto flex items-center">
                <img src="/dist/editprofile.png" alt="" class="h-9 w-auto">
                <h1 class="w-auto ml-5">Edit Profil</h1>
            </div>
        </button>
        <button class="py-4 flex mx-auto w-full text-lg border-b-2 border-slate-500">
            <div class="w-auto mx-auto flex">
                <img src="/dist/logoutlogo.png" alt="" class="h-8 w-auto">
                <h1 class="w-auto ml-5 text-red-600">Log Out</h1>
            </div>
        </button>
        <div class="flex w-full select-none">
            <input type="checkbox" name="" id="toggle" class="peer hidden"/>
            <label for="toggle" class="py-4 flex mx-auto w-full text-lg border-b-2 border-slate-500 justify-center items-center cursor-pointer">
                <img src="/dist/moon-dark.png" alt="" class="w-9 h-auto">
                <h1 class="w-auto ml-5">Dark Mode</h1>
            </label>
        </div>
    </div>
</div>
