<section id="beranda"
    class="pt-24 md:mt-0 md:h-screen justify-center text-center md:text-left md:flex-row md:justify-between md:items-center">
    <div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)"
        class="w-full px-3 overflow-hidden rounded-lg shadow-xs">
        @if (session()->has('success'))
            <div alert
                class="relative p-4 pr-12 mb-4 text-white border border-solid rounded-lg bg-gradient-to-tl from-green-600 to-lime-400 border-lime-300"
                role="alert">
                {{-- <strong class="font-bold">Woaa!</strong> --}}
                <strong class="font-bold">{{ session('success') }}</strong>
                <button type="button" alert-close
                    class="box-content absolute top-0 right-0 p-4 text-sm text-white bg-transparent border-0 rounded w-4 h-4 z-2">
                </button>
            </div>
        @endif
    </div>
    <div class="tpmf">
        <div class="w-full h-full bg-gradient-to-b from-black opacity-95 to-[rgba(0,0,0,0.6)] m-auto">
            <div class="flex flex-col items-center justify-center">
                <h3 class="font-rubik font-medium text-[#098cf2] text-sm text-center tracking-wider pt-20 pb-5">
                    SEMARANG, INDONESIA</h3>
                <h1 class="md:w-[750px] lg:w-[500px] h-auto text-center"><strong><span
                            class="font-exo font-bold text-white text-5xl leading-[85px]">Tim Penjaminan Mutu Fakultas
                            Sains dan
                            Matematika</span>
                    </strong></h1>
                <div class="w-36 h-1 bg-[#098cf2] my-10"></div>
                <h2 class="font-exo text-[26px] text-white text-center">Universitas Diponegoro</h2>
            </div>
        </div>
    </div>
</section>

<div id='mobileNav' class="md:hidden">
    <div class="tpmf">
        <div class="w-full h-full bg-gradient-to-b from-black opacity-95 to-[rgba(0,0,0,0.6)] m-auto">
            <div class="flex flex-col items-center justify-center">
                <h3 class="font-rubik font-medium text-[#098cf2] text-sm text-center tracking-wider pt-20 pb-5">
                    SEMARANG, INDONESIA</h3>
                <h1 class="md:w-[750px] lg:w-[500px] h-auto text-center"><strong><span
                            class="font-exo font-bold text-white text-5xl leading-[85px]">Tim Penjaminan Mutu Fakultas
                            Sains dan
                            Matematika</span>
                    </strong></h1>
                <div class="w-36 h-1 bg-[#098cf2] my-10"></div>
                <h2 class="font-exo text-[26px] text-white text-center">Universitas Diponegoro</h2>
            </div>
        </div>
    </div>
</div>
