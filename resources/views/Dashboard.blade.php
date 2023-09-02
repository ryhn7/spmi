@extends('index')

@section('dashboard')
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-open font-semibold leading-normal text-sm">Total Penjualan BBM
                                </p>
                                <h5 class="mb-0 font-bold">
                                    {{-- @currency($totalPendapatan) --}}
                                    {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+55%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-[#060764] to-[#00b7dd]">
                                <i class="fa-solid fa-book text-white py-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-open font-semibold leading-normal text-sm">Total Pengeluaran</p>
                                <h5 class="mb-0 font-bold">
                                    {{-- @currency($totalPengeluaran) --}}
                                    {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+3%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-[#060764] to-[#00b7dd]">
                                <i class="fa-solid fa-money-check text-white py-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-open font-semibold leading-normal text-sm">Total Laba Kotor</p>
                                <h5 class="mb-0 font-bold">
                                    {{-- @currency($totalLabaKotor) --}}
                                    {{-- <span class="leading-normal text-red-600 text-sm font-weight-bolder">-2%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-[#060764] to-[#00b7dd]">
                                <i class="fa-solid fa-money-bill-trend-up text-white py-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-open font-semibold leading-normal text-sm">Total Laba Bersih</p>
                                <h5 class="mb-0 font-bold">
                                    {{-- @currency($totalLabaBersih) --}}
                                    {{-- <span class="leading-normal text-sm font-weight-bolder text-lime-500">+5%</span> --}}
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-[#060764] to-[#00b7dd]">
                                <i class="fa-solid fa-money-bills text-white py-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards row 3 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-5/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="py-4 pr-1 mb-4 bg-gradient-to-tl from-red-500 to-yellow-400 rounded-xl">
                        <div>
                            <canvas id="canvas" class="chart-canvas" height="220"></canvas>
                        </div>
                    </div>
                    <h6 class="mt-6 mb-0 ml-2">Gambaran Umum Laba Bersih BBM</h6>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 lg:w-7/12 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <h6>Gambaran Umum Penjualan BBM</h6>
                </div>
                <div class="flex-auto p-4">
                    <div>
                        <canvas id="chart-line" height="245"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection