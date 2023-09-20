{{-- @dd(Auth::guard('dosen')->check()) --}}


<!-- Navigation -->
<nav class="fixed flex justify-between pt-7 pb-4 w-full lg:px-48 md:px-12 px-4 content-center bg-white z-10">
    <div class="flex items-center">
        <img src='{{ asset('assets/Logo_black.svg') }}' alt="Logo" class="h-4" />
    </div>
    <ul class="font-open items-center hidden md:flex">
        <li class="mx-3">
            <a class="font-medium growing-underline" href="{{ route('dashboard') }}#beranda">
                Beranda
            </a>
        </li>
        <li class="font-medium growing-underline mx-3">
            <a href="{{ route('dashboard') }}#informasi-survei">Informasi Survei</a>
        </li>
        <li class="font-medium growing-underline mx-3">
            <a href="{{ route('dashboard') }}#isi-survei">Isi Survei</a>
        </li>
        <li class="font-medium growing-underline mx-3">
            <a href="{{ route('dashboard') }}#hasil-survei">Hasil Survei</a>
        </li>
        <li class="font-medium growing-underline mx-3">
            <a href="{{ route('dashboard') }}#tindak-lanjut">Tindak Lanjut</a>
        </li>
    </ul>


    {{-- if user is logged in show hello user, else show login button --}}
    @if (Auth::guard('mahasiswa')->check() || Auth::guard('dosen')->check() || Auth::guard('tendik')->check())
        <div class="flex items-center">
            <div class="flex items-center">
                {{-- <img src='{{ asset('assets/logos/User.svg') }}' alt="User icon" /> --}}
                <span class="hidden md:block ml-1">Hello,
                    {{ Auth::guard('mahasiswa')->check()
                        ? ucwords(strtolower(Auth::guard('mahasiswa')->user()->nama_mahasiswa))
                        : (Auth::guard('dosen')->check()
                            ? ucwords(strtolower(Auth::guard('dosen')->user()->nama_tanpa_gelar))
                            : ucwords(strtolower(Auth::guard('tendik')->user()->nama_tanpa_gelar))) }}
                </span>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="flex items-center ml-4">
                    <span class="hidden md:block ml-1">Logout
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

@include('partials.modal_login')


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const formLogin = document.getElementById('form-login');

        formLogin.addEventListener('submit', async function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            const response = await fetch(this.action, {
                method: this.method,
                body: new FormData(this),
            });

            const responseData = await response.json();

            // console.log(responseData);

            if (response.ok) {
                window.location.href = responseData.redirect_url;
            } else {
                const errorElement = document.getElementById('loginError');
                errorElement.innerHTML = responseData.error_message;
                errorElement.classList.remove('hidden');
            }
        });
    });
</script>
