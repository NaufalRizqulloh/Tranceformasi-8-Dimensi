<!-- navBar -->

<header class="w-full grid grid-cols-2 md:grid-cols-3 bg-primary mb-10 drop-shadow-2xl absolute top-0 left-0 right-0">
    <h1 class="my-4 mx-auto text-secondary font-bold max-md:hidden">Tranceformasi</h1>
    <h1 class="w-full md:w-auto mx-auto my-4 text-bgcolor text-center">Delapan Dimensi Kepemimpinan</h1>
    <img src="/dist/profile.png" alt="" class="w-8 h-8 ml-72 md:mx-auto my-auto cursor-pointer" onclick="onoverlay()">
</header>

<!-- overlay -->

<div id="overlay" class="bg-black top-0 left-0 w-full h-full opacity-30 z-20" onclick="offoverlay()"></div>
<div id="overlay1" class="bg-white dark:bg-slate-800 dark:text-slate-300 top-0 right-0 w-full lg:w-3/12 h-3/12 lg:h-full z-30">
    <div class="w-full lg:w-3/12 flex bg-[#8404F4] drop-shadow-2xl items-center fixed top-0 right-0">
        <img src="/dist/profile.png" alt="" class="w-8 h-8 ml-8 my-auto cursor-pointer" onclick="offoverlay()">
        <h1 class="ml-4 pl-4 text-white my-4 border-l-2">Nama</h1>
    </div> 
    <div class="block">
        <a href="/home">  
            <input type="submit" class="hidden"/>  
            <button class="mt-[3.3rem] py-4 flex mx-auto w-full text-lg border-b-2 border-slate-500">
                <div class="w-auto mx-auto flex">
                    <img src="/dist/dashboardbook.png" alt="" class="h-8 w-auto">
                    <h1 class="w-auto ml-5 text-slate-800 dark:text-slate-300">Dashboard</h1>
                </div>
            </button>
        </a>
        <a href="/tprofile">
            <input type="submit" class="hidden"/>
            <button class="py-4 flex mx-auto w-full text-lg border-b-2 border-slate-500">
                <div class="w-auto mx-auto flex items-center">
                    <img src="/dist/editprofile.png" alt="" class="h-9 w-auto">
                    <h1 class="font-montserrat w-auto ml-5 text-slate-800 dark:text-slate-300">Edit Profil</h1>
                </div>
            </button>
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="py-4 flex mx-auto w-full text-lg border-b-2 border-slate-500">
                <div class="w-auto mx-auto flex">
                    <img src="/dist/logoutlogo.png" alt="" class="h-8 w-auto">
                    <h1 class="w-auto ml-5 text-red-600">Log Out</h1>
                </div>
            </button>
        </form>
        <div class="flex w-full select-none">
            <input type="checkbox" name="" id="toggle" class="peer hidden"/>
            <label for="toggle" class="py-4 flex mx-auto w-full text-lg border-b-2 border-slate-500 justify-center items-center cursor-pointer">
                <img src="/dist/moon-dark.png" alt="" class="w-9 h-auto">
                <h1 class="w-auto ml-5 text-slate-800 dark:text-slate-300">Dark Mode</h1>
            </label> 
        </div>
    </div>
</div>
