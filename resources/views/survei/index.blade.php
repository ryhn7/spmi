{{-- @dd(Auth::guard('tpmf')->check() ? 'tpmf' : 'not tpmf') --}}
{{-- @dd(Auth::guard('dekan')->check() ? 'dekan' : 'not dekan') --}}
{{-- @dd(Auth::guard('wadek')->check() ? 'wadek' : 'not wadek') --}}
{{-- @dd(Auth::guard('gpm')->check() ? 'gpm' : 'not gpm') --}}

<section id="isi-survei" class="sectionSize bg-white">
    <div>
        <h2 class="secondaryTitle bg-underline3 bg-100%">Isi Survei</h2>
    </div>

    <div class="w-full max-w-sm p-4 bg-white rounded-lg sm:p-6">
        <!-- <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700"> -->
        <ul class="my-4 space-y-3">
            <li>
                @if (Auth::guard('dosen')->check())
                    <a href="/surveiDsn"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Dosen</span>
                    </a>
                @elseif (Auth::guard('mahasiswa')->check() || Auth::guard('tendik')->check())
                    <a href="{{ route('forbidden') }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Dosen</span>
                    </a>
                @else
                    <a id="surveiDsnLink" href="/surveiDsn"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow"
                        data-te-toggle="modal" data-te-target="#modalLogin" data-te-ripple-init
                        data-te-ripple-color="light">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Dosen</span>
                    </a>
                @endif
            </li>
            <li>
                @if (Auth::guard('tendik')->check())
                    <a href="/surveiTendik"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Tenaga Kependidikan</span>
                    </a>
                @elseif (Auth::guard('mahasiswa')->check() || Auth::guard('dosen')->check())
                    <a href="{{ route('forbidden') }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Tenaga Kependidikan</span>
                    </a>
                @else
                    <a id="surveiTendikLink" href="/surveiTendik"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow"
                        data-te-toggle="modal" data-te-target="#modalLogin" data-te-ripple-init
                        data-te-ripple-color="light">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Tenaga Kependidikan</span>
                    </a>
                @endif
            </li>
            <li>
                @if (Auth::guard('mahasiswa')->check())
                    <a href="/surveiMhs"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Mahasiswa</span>
                    </a>
                @elseif (Auth::guard('dosen')->check() || Auth::guard('tendik')->check())
                    <a href="{{ route('forbidden') }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Mahasiswa</span>
                    </a>
                @else
                    <a id="surveiMhsLink" href="/surveiMhs"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow"
                        data-te-toggle="modal" data-te-target="#modalLogin" data-te-ripple-init
                        data-te-ripple-color="light">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Mahasiswa</span>
                    </a>
                @endif
            </li>
            <li>
                @if (Auth::guard('mahasiswa')->check() || Auth::guard('dosen')->check() || Auth::guard('tendik')->check())
                    <a href="{{ route('restricted') }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Mitra Kerjasama</span>
                    </a>
                @else
                    <a href="/surveiMitra"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Mitra Kerjasama </span>
                    </a>
                @endif
            </li>
            <li>
                @if (Auth::guard('mahasiswa')->check() || Auth::guard('dosen')->check() || Auth::guard('tendik')->check())
                    <a href="{{ route('restricted') }}"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Pengguna Lulusan</span>
                    </a>
                @else
                    <a href="/surveiPenggunaLulusan"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Pengguna Lulusan</span>
                    </a>
                @endif
            </li>
        </ul>
    </div>
</section>

<!-- Modal -->

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const surveiMhs = document.getElementById('surveiMhsLink');
            const surveiDsn = document.getElementById('surveiDsnLink');
            const surveiTendik = document.getElementById('surveiTendikLink');
            const customLink = document.getElementById('intendedUrl');

            surveiMhs.addEventListener('click', function() {
                customLink.value = '/surveiMhs';
            });

            surveiDsn.addEventListener('click', function() {
                customLink.value = '/surveiDsn';
            });

            surveiTendik.addEventListener('click', function() {
                customLink.value = '/surveiTendik';
            });
        });
    </script>
@endsection
