<!-- Navigation -->
<nav class="fixed flex justify-between pt-7 pb-4 w-full lg:px-48 md:px-12 px-4 content-center bg-white z-10">
    <div class="flex items-center">
        <img src='{{ asset('assets/Logo_black.svg') }}' alt="Logo" class="h-4" />
    </div>
    <ul class="font-open items-center hidden md:flex">
        <li class="mx-3">
            <a class="font-medium growing-underline" href="howitworks">
                Beranda
            </a>
        </li>
        <li class="font-medium growing-underline mx-3">
            <a href="features">Informasi Survei</a>
        </li>
        <li class="font-medium growing-underline mx-3">
            <a href="pricing">Isi Survei</a>
        </li>
        <li class="font-medium growing-underline mx-3">
            <a href="pricing">Hasil Survei</a>
        </li>
        <li class="font-medium growing-underline mx-3">
            <a href="pricing">Tindak Lanjut</a>
        </li>
    </ul>


    {{-- if user is logged in show hello user, else show login button --}}
    @if (Auth::guard('mahasiswa')->check() || Auth::guard('dosen')->check())
        <div class="flex items-center">
            <div class="flex items-center">
                {{-- <img src='{{ asset('assets/logos/User.svg') }}' alt="User icon" /> --}}
                <span class="hidden md:block ml-1">Hello, there</span>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button class="flex items-center ml-4">
                    <span class="hidden md:block ml-1">Logout</span>
                </button>
            </form>
        </div>
    @else
        <div class="font-open hidden md:block">
            <button class="py-2 px-4 text-white bg-[#1f2f5f] rounded-3xl" data-te-toggle="modal"
                data-te-target="#modalLogin" data-te-ripple-init data-te-ripple-color="light">
                Login
            </button>
        </div>
    @endif





    <div id="showMenu" class="md:hidden">
        <img src='{{ asset('assets/logos/Menu.svg') }}' alt="Menu icon" />
    </div>
</nav>
<div id='mobileNav' class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-white z-20 animate-fade-in-down">
    <div id="hideMenu" class="flex justify-end">
        <img src='{{ asset('assets/logos/Cross.svg') }}' alt="" class="h-16 w-16" />
    </div>
    <ul class="font-open flex flex-col mx-8 my-24 items-center text-3xl">
        <li class="my-6">
            <a href="howitworks">How it works</a>
        </li>
        <li class="my-6">
            <a href="features">Features</a>
        </li>
        <li class="my-6">
            <a href="pricing">Pricing</a>
        </li>
    </ul>
</div>

<!-- Modal -->
<div data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
        <div
            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none ">

            <!--Modal body-->
            <div class="relative" data-te-modal-body-ref>
                <!-- component -->
                <div class="flex items-center">
                    <!-- Login Container -->
                    <div class="w-full flex-col border bg-white px-6 py-14 shadow-md rounded-[4px] ">
                        <div class="mb-8 flex justify-center">
                            <img class="w-24" src="{{ asset('assets/img/logo-undip.png') }}" alt="logo-undip" />
                        </div>
                        <form action="/login" method="POST">
                            @csrf
                            @if (session()->has('loginError'))
                                <div class="mb-2 ml-1.5 text-sm text-red-700">{{ session('loginError') }}</div>
                            @endif
                            <div class="flex flex-col text-sm rounded-md">
                                <input
                                    class="mb-5 rounded-[4px] border p-3 hover:outline-none focus:outline-none hover:border-yellow-500 "
                                    type="text" name="username" placeholder="Username" required />
                                <input
                                    class="border rounded-[4px] p-3 hover:outline-none focus:outline-none hover:border-yellow-500"
                                    type="password" name="password" placeholder="Password" required />
                            </div>
                            <button
                                class="mt-5 w-full border p-2 bg-gradient-to-r from-gray-800 bg-gray-500 text-white rounded-[4px] hover:bg-slate-400 scale-105 duration-300"
                                type="submit">Masuk</button>
                        </form>
                        <div class="mt-5 flex justify-between text-sm text-gray-600">
                            <a href="#">Masuk sebagai tamu?</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
