<!-- Navigation -->
<nav class="fixed flex justify-between pt-7 pb-4 w-full lg:px-48 md:px-12 px-4 content-center bg-white z-10">
    <div class="flex items-center">
        <img src='{{ asset('assets/img/tpmf-black.png') }}' alt="Logo" class="h-10" />
    </div>
    <ul class="font-open items-center mr-24 hidden md:flex">
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
        <div class="flex items-center mt-2 pt-1 sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center">
                    <div class="block px-0 py-2 font-open font-semibold transition-all ease-nav-brand text-sm">
                        <i class="fa fa-user sm:mr-1"></i>
                        <span class="hidden sm:inline">
                            {{ Auth::guard('mahasiswa')->check()
                                ? Auth::guard('mahasiswa')->user()->id_mahasiswa
                                : (Auth::guard('dosen')->check()
                                    ? Auth::guard('dosen')->user()->NIP_dosen
                                    : Auth::guard('tendik')->user()->NIP_pegawai) }}</span>
                    </div>
                </li>

                <li class="relative flex items-center px-4">

                    <div x-data="{
                        open: false,
                        toggle() {
                            if (this.open) {
                                return this.close()
                            }
                    
                            this.$refs.button.focus()
                    
                            this.open = true
                        },
                        close(focusAfter) {
                            if (!this.open) return
                    
                            this.open = false
                    
                            focusAfter && focusAfter.focus()
                        }
                    }" x-on:keydown.escape.prevent.stop="close($refs.button)"
                        x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                        x-id="['dropdown-button']" class="relative">

                        <button x-ref="button" x-on:click="toggle()" :aria-expanded="open"
                            :aria-controls="$id('dropdown-button')" type="button"
                            class="block font-open p-0 transition-all text-sm ease-nav-brand">
                            <i class="cursor-pointer fa fa-cog"></i>
                        </button>

                        <div x-ref="panel" x-show="open" x-transition.origin.top.left
                            x-on:click.outside="close($refs.button)" :id="$id('dropdown-button')" style="display: none;"
                            class="text-sm before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 absolute right-0 top-0 mt-5 w-40 rounded-lg bg-[#FBFAFB] shadow-md z-50 bg-clip-padding px-2 py-4 text-left text-slate-500 sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:block lg:cursor-pointer">
                            <div
                                class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm">

                                <div class="flex flex-col">
                                    <p class="font-open font-medium text-slate-500">ROLE</p>
                                    <div class="flex flex-col mt-2 ml-1.5">
                                        <label class="flex text-sm items-center" for="oke">
                                            <input type="radio" name="oke" class="mr-2">
                                            <button class="">oke</button>
                                        </label>
                                        <label class="flex text-sm items-center" for="oke">
                                            <input type="radio" name="oke" class="mr-2">
                                            <button class="">oke</button>
                                        </label>
                                        <label class="flex text-sm items-center" for="oke">
                                            <input type="radio" name="oke" class="mr-2">
                                            <button class="">oke</button>
                                        </label>
                                        <label class="flex text-sm items-center" for="oke">
                                            <input type="radio" name="oke" class="mr-2">
                                            <button class="">oke</button>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            </a>
                            <form action="/logout" method="POST" class="">
                                @csrf
                                <button
                                    class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-600 disabled:text-gray-500">
                                    <span class="font-open text-red-600">Log
                                        Out</span></button>
                            </form>

                        </div>
                    </div>
                </li>
            </ul>
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
