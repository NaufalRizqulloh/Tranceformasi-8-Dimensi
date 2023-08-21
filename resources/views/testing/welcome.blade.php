<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="/public/dist/output.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                        montserrat: ['Montserrat'], 
                    },
                    colors: {
                        primary: '#8404F4',
                        secondary: '#FCF304',
                        bgcolor: '#F7F1F1',
                        // ...
                    },
                    spacing: {
                        '25' : '25rem',
                    },
                },
            },
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <title>Tranceformasi - Login</title>
</head>
<body class="bg-[#8404F4] md:bg-[#F7F1F1] h-full">
    <!-- <div class="flex space-x-0">
        <section class="w-1/2 h-[100vh] bg-yellow-300">
            <h1>hehllo</h1>
        </section>
        <section class="w-1/2 h-full bg-purple-500">
            <h1>hihiih</h1>
        </section>
    </div> -->

    <div class="flex space-x-0 justify-center">
        <section class="w-full md:w-1/2 h-[100vh]">
            <div class="max-md:my-72 h-fit">
                <h1 class="md:hidden text-[#FCF304] text-center font-bold text-7xl md:text-4xl mt-12 mb-10 font-montserrat">
                    #8 Dimensi Kepemimpinan
                </h1>
                <h1 class="text-[#F7F1F1] md:text-black text-center font-bold text-6xl md:text-4xl mt-12 md:mt-48 mb-10 font-montserrat">
                    Masuk
                </h1>
                <form action="" class="max-w-lg mx-auto">
                    <label for="email" id="">
                        <input type="email" placeholder="Masukkan Email" class="mb-10 rounded-xl md:rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full max-md:h-16 md:w-3/4 block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer max-md:placeholder:text-2xl max-md:placeholder:text-slate-400"
                        />
                    </label>
                    <label for="password" id="">
                        <input type="password" placeholder="Masukkan Password" class="mb-10 rounded-xl md:rounded-md border-black ring-black mx-auto px-3 py-2 border shadow rounder w-full md:w-3/4 max-md:h-16 block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer max-md:placeholder:text-2xl max-md:placeholder:text-slate-400"
                        />
                    </label>
                </form>
                    <a href="" class="text-[#F7F1F1] text-2xl md:text-base md:text-black w-max block mx-auto underline font-montserrat hover:text-blue-400">
                        Lupa Kata Sandi?
                    </a>
                <br>
                <div class="flex space-x-20 justify-center mb-12">
                    <button class="w-48 md:w-32 border-solid rounded-2xl md:rounded-lg border-2 bg-[#F7F1F1] md:bg-transparent md:border-[#8404F4]">
                        <h1 class="text-[#8404F4] text-4xl md:text-base text-center font-semibold italic my-4 md:m-1">Masuk</h1>
                    </button>
                    <button class="w-48 md:w-32 border-solid rounded-2xl md:rounded-lg border-2 md:bg-[#8404F4]">
                        <h1 class="text-[#F7F1F1] text-4xl md:text-base text-center font-semibold italic my-4 md:m-1">Daftar</h1>
                    </button>
                </div>
                <h1 class="md:hidden font-montserrat justify-center align-middle text-center text-[#F7F1F1] italic font-light text-md mb-56">
                    PT. TRANCEFORMASI INDONESIA - 2023
                </h1>
            </div>
        </section>
        <section class="hidden md:block w-1/2 justify-end bg-[#8404F4] h-[100vh]">
            <img src="/dist/title.png" alt="title" class="hidden md:block w-9/12 mx-auto mt-36">
            <h1 class="font-montserrat justify-center align-middle text-center text-[#F7F1F1] italic mt-24 text-4xl">
                SELF ASSESMENT
            </h1>
            <h1 class="font-montserrat justify-center align-middle text-center text-[#F7F1F1] italic mt-24 font-light text-xs">
                PT. TRANCEFORMASI INDONESIA - 2023
            </h1>
        </section>
    </div>
</body>
</html>