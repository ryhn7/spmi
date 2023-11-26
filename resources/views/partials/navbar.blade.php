{{-- @dd($namaJabatan) --}}
<!-- Navigation -->
<nav class="fixed flex justify-between pt-7 pb-4 w-full lg:px-48 md:px-12 px-4 content-center bg-white z-10">
    <div class="flex items-center">
        <img src='{{ asset('assets/img/tpmf-black.png') }}' alt="Logo" class="h-10" />
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
        @if (Auth::guard('tpmf')->check() ||
                Auth::guard('dekan')->check() ||
                Auth::guard('gpm')->check() ||
                Auth::guard('kaprodi')->check() ||
                Auth::guard('wadek')->check())
            <li class="font-medium growing-underline mx-3">
                <a href="{{ route('dashboard') }}#tanggapan-survei">Tanggapan Survei</a>
            </li>
        @else
            <li class="font-medium growing-underline mx-3">
                @if (Auth::guard('tendik')->check())
                    <a href="/surveiTendik">Isi Survei</a>
                @elseif (Auth::guard('dosen')->check())
                    <a href="/surveiDsn">Isi Survei</a>
                @elseif (Auth::guard('mahasiswa')->check())
                    <a href="/surveiMhs">Isi Survei</a>
                @else
                    <a href="{{ route('dashboard') }}#isi-survei">Isi Survei</a>
                @endif
            </li>
        @endif
        <li class="font-medium growing-underline mx-3">
            <a href="{{ route('dashboard') }}#hasil-survei">Hasil Survei</a>
        </li>
        <li class="font-medium growing-underline mx-3">
            <a href="{{ route('dashboard') }}#tindak-lanjut">Tindak Lanjut</a>
        </li>
        <li class="font-medium growing-underline mx-3">
            @if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check())
                <a href="https://drive.google.com/file/d/1SiA0LxlEwc_TSfPYvyvG9Vf2uF1JpArA/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('kaprodi')->check())
                <a href="https://drive.google.com/file/d/1i3gALgIB-Cs4Flspwu4D8Apg8PNTssk2/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('dosen')->check())
                <a href="https://drive.google.com/file/d/1iydMq7Z-0NB799fRIelagnyaBSmUamzK/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('tpmf')->check())
                <a href="https://drive.google.com/file/d/1eA-uE33Si-3CcjsJS44jhVRdR_ii_VDK/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('gpm')->check())
                <a href="https://drive.google.com/file/d/1Um9dpWKUCIb-LFhbZw2kVl1xlKehojKX/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('mahasiswa')->check())
                <a href="https://drive.google.com/file/d/1Lb1tT-phMQynIsfhBic-hc4MI2BTBUnL/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('tendik')->check())
                <a href="https://drive.google.com/file/d/1mky15AtFeN6yqRwmWPTKa4jrWgAiofXA/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @else
                <a href="https://drive.google.com/file/d/1tkj9e3hae3cly7nNz1j59ix0PNBmupEx/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @endif
        </li>
    </ul>


    {{-- if user is logged in show hello user, else show login button --}}
    @if (Auth::guard('mahasiswa')->check() ||
            Auth::guard('dosen')->check() ||
            Auth::guard('tendik')->check() ||
            Auth::guard('tpmf')->check() ||
            Auth::guard('dekan')->check() ||
            Auth::guard('wadek')->check() ||
            Auth::guard('kaprodi')->check() ||
            Auth::guard('gpm')->check())
        <div class="flex items-center mt-2 pt-1 sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center">
                    <div class="block px-0 py-2 font-open font-semibold transition-all ease-nav-brand text-sm">
                        <i class="fa fa-user mr-1"></i>
                        <span class="hidden sm:inline">
                            @if (Auth::guard('mahasiswa')->check())
                                {{ Auth::guard('mahasiswa')->user()->id_mahasiswa }}
                            @elseif (Auth::guard('dosen')->check())
                                {{ Auth::guard('dosen')->user()->NIP_dosen }}
                            @elseif (Auth::guard('tendik')->check())
                                {{ Auth::guard('tendik')->user()->user_admin }}
                            @elseif (Auth::guard('tpmf')->check())
                                {{ Auth::guard('tpmf')->user()->NIP_dosen }}
                            @elseif (Auth::guard('dekan')->check())
                                {{ Auth::guard('dekan')->user()->NIP_dosen }}
                            @elseif (Auth::guard('wadek')->check())
                                {{ Auth::guard('wadek')->user()->NIP_dosen }}
                            @elseif (Auth::guard('kaprodi')->check())
                                {{ Auth::guard('kaprodi')->user()->NIP_dosen }}
                            @elseif (Auth::guard('gpm')->check())
                                {{ Auth::guard('gpm')->user()->NIP_dosen }}
                            @endif
                        </span>
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
                            @if (
                                (Auth::guard('dosen')->check() ||
                                    Auth::guard('tpmf')->check() ||
                                    Auth::guard('gpm')->check() ||
                                    Auth::guard('dekan')->check() ||
                                    Auth::guard('kaprodi')->check() ||
                                    Auth::guard('wadek')->check()) &&
                                    request()->is('/'))
                                @if ($namaJabatan)
                                    <div
                                        class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 pt-2 text-left text-sm">
                                        <div class="flex flex-col">
                                            <p class="font-open font-medium text-slate-500">ROLE</p>
                                            <div class="flex flex-col mt-2 ml-1.5">
                                                <form action="{{ route('backDosen') }}" method="POST">
                                                    @csrf
                                                    <label class="flex text-sm items-center mb-2" for="role">
                                                        <input disabled id="dosenInput" type="radio" name="role"
                                                            class="mr-2">
                                                        <button id="dosenBtn">Dosen</button>
                                                    </label>
                                                </form>
                                                @if (strpos($namaJabatan, 'Tim Penjaminan Mutu Fakultas Sains dan Matematika') !== false)
                                                    <form action="{{ route('changeRole') }}" method="POST">
                                                        @csrf
                                                        <label class="flex text-sm items-center mb-2" for="role">
                                                            <input disabled id="tpmfInput" type="radio" name="role"
                                                                class="mr-2">
                                                            <button id="tpmfBtn">TPMF</button>
                                                        </label>
                                                    </form>
                                                @elseif (strpos($namaJabatan, 'Gugus Penjaminan Mutu') !== false)
                                                    <form action="{{ route('changeRole') }}" method="POST">
                                                        @csrf
                                                        <label class="flex text-sm items-center mb-2" for="role">
                                                            <input disabled id="gpmInput" type="radio" name="role"
                                                                class="mr-2">
                                                            <button id="gpmBtn">GPM</button>
                                                        </label>
                                                    </form>
                                                @elseif ($namaJabatan == 'Dekan Fakultas Sains dan Matematika')
                                                    <form action="{{ route('changeRole') }}" method="POST">
                                                        @csrf
                                                        <label class="flex text-sm items-center mb-2" for="role">
                                                            <input disabled id="dekanInput" type="radio"
                                                                name="role" class="mr-2">
                                                            <button id="dekanBtn">Dekan</button>
                                                        </label>
                                                    </form>
                                                @elseif (Str::startsWith($namaJabatan, 'Ketua Program Studi') || Str::startsWith($namaJabatan, 'Ketua Departemen'))
                                                    <form action="{{ route('changeRole') }}" method="POST">
                                                        @csrf
                                                        <label class="flex text-sm items-center mb-2" for="role">
                                                            <input disabled id="kaprodiInput" type="radio"
                                                                name="role" class="mr-2">
                                                            <button id="kaprodiBtn">Kaprodi</button>
                                                        </label>
                                                    </form>
                                                @elseif ($namaJabatan == 'Wakil Dekan Akademik dan Kemahasiswaan' || $namaJabatan == 'Wakil Dekan Sumber Daya dan Inovasi')
                                                    <form action="{{ route('changeRole') }}" method="POST">
                                                        @csrf
                                                        <label class="flex text-sm items-center mb-2" for="role">
                                                            <input disabled id="wadekInput" type="radio"
                                                                name="role" class="mr-2">
                                                            <button id="wadekBtn">Wadek</button>
                                                        </label>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
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
    <div id="showMenu" class="md:hidden flex justify-center">
        <img src='{{ asset('assets/logos/Menu.svg') }}' alt="Menu icon" />
    </div>
</nav>
<div id='mobileNav'
    class="hidden md:hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-white z-20 animate-fade-in-down">
    <div id="hideMenu" class="flex justify-end">
        <img src='{{ asset('assets/logos/Cross.svg') }}' alt="" class="h-16 w-16" />
    </div>
    <ul class="font-open flex flex-col mx-8 mb-24 items-center text-3xl">
        <li class="my-6">
            <a href="/#beranda">Beranda</a>
        </li>
        <li class="my-6">
            <a href="{{ route('dashboard') }}#informasi-survei">Informasi Survei</a>
        </li>
        @if (Auth::guard('tpmf')->check() ||
                Auth::guard('dekan')->check() ||
                Auth::guard('gpm')->check() ||
                Auth::guard('kaprodi')->check() ||
                Auth::guard('wadek')->check())
            <li class="my-6">
                <a href="{{ route('dashboard') }}#tanggapan-survei">Tanggapan Survei</a>
            </li>
        @else
            <li class="my-6">
                @if (Auth::guard('tendik')->check())
                    <a href="/surveiTendik">Isi Survei</a>
                @elseif (Auth::guard('dosen')->check())
                    <a href="/surveiDsn">Isi Survei</a>
                @elseif (Auth::guard('mahasiswa')->check())
                    <a href="/surveiMhs">Isi Survei</a>
                @else
                    <a href="{{ route('dashboard') }}#isi-survei">Isi Survei</a>
                @endif
            </li>
        @endif
        <li class="my-6">
            <a href="{{ route('dashboard') }}#hasil-survei">Hasil Survei</a>
        </li>
        <li class="my-6">
            <a href="{{ route('dashboard') }}#tindak-lanjut">Tindak Lanjut</a>
        </li>
        <li class="my-6">
            @if (Auth::guard('dekan')->check() || Auth::guard('wadek')->check())
                <a href="https://drive.google.com/file/d/1SiA0LxlEwc_TSfPYvyvG9Vf2uF1JpArA/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('kaprodi')->check())
                <a href="https://drive.google.com/file/d/1i3gALgIB-Cs4Flspwu4D8Apg8PNTssk2/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('dosen')->check())
                <a href="https://drive.google.com/file/d/1iydMq7Z-0NB799fRIelagnyaBSmUamzK/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('tpmf')->check())
                <a href="https://drive.google.com/file/d/1eA-uE33Si-3CcjsJS44jhVRdR_ii_VDK/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('gpm')->check())
                <a href="https://drive.google.com/file/d/1Um9dpWKUCIb-LFhbZw2kVl1xlKehojKX/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('mahasiswa')->check())
                <a href="https://drive.google.com/file/d/1Lb1tT-phMQynIsfhBic-hc4MI2BTBUnL/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @elseif (Auth::guard('tendik')->check())
                <a href="https://drive.google.com/file/d/1mky15AtFeN6yqRwmWPTKa4jrWgAiofXA/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @else
                <a href="https://drive.google.com/file/d/1tkj9e3hae3cly7nNz1j59ix0PNBmupEx/view?usp=sharing"
                    target="_blank"> Cara Penggunaan </a>
            @endif
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
                // console.log(responseData.error_message);
                const errorElement = document.getElementById('loginError');
                errorElement.innerHTML = responseData.error_message;
                errorElement.classList.remove('hidden');
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dosenBtn = document.getElementById('dosenBtn');
        const dosenInput = document.getElementById('dosenInput');
        const tpmfBtn = document.getElementById('tpmfBtn');
        const tpmfInput = document.getElementById('tpmfInput');
        const gpmBtn = document.getElementById('gpmBtn');
        const gpmInput = document.getElementById('gpmInput');
        const dekanBtn = document.getElementById('dekanBtn');
        const dekanInput = document.getElementById('dekanInput');
        const wadekBtn = document.getElementById('wadekBtn');
        const wadekInput = document.getElementById('wadekInput');
        const kaprodiBtn = document.getElementById('kaprodiBtn');
        const kaprodiInput = document.getElementById('kaprodiInput');

        const selectedRole = "{{ session('role') }}";
        const isDosen = "{{ Auth::guard('dosen')->check() }}";

        console.log(selectedRole);

        if (isDosen) {
            dosenInput.checked = true;
            tpmfInput.checked = false;
            gpmInput.checked = false;
            dekanInput.checked = false;
            kaprodiInput.checked = false;
            wadekInput.checked = false;
        }

        if (selectedRole === 'dosen') {
            dosenInput.checked = true;
            tpmfInput.checked = false;
            gpmInput.checked = false;
            dekanInput.checked = false;
            kaprodiInput.checked = false;
            wadekInput.checked = false;
        } else if (selectedRole === 'tpmf') {
            tpmfInput.checked = true;
            dosenInput.checked = false;
        } else if (selectedRole === 'gpm') {
            gpmInput.checked = true;
            dosenInput.checked = false;
        } else if (selectedRole === 'dekan') {
            dekanInput.checked = true;
            dosenInput.checked = false;
        } else if (selectedRole === 'wadek') {
            wadekInput.checked = true;
            dosenInput.checked = false;
        } else if (selectedRole === 'kaprodi') {
            kaprodiInput.checked = true;
            dosenInput.checked = false;
        }
    });
</script>
