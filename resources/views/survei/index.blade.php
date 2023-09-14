<section class="sectionSize bg-white">
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
                @elseif (Auth::guard('mahasiswa')->check())
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
                <a href="/surveiTendik"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Survei Tenaga Kependidikan</span>
                </a>
            </li>
            <li>
                @if (Auth::guard('mahasiswa')->check())
                    <a href="/surveiMhs"
                        class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                        <span class="flex-1 ml-3 whitespace-nowrap">Survei Mahasiswa</span>
                    </a>
                @elseif (Auth::guard('dosen')->check())
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
                <a href="/surveiMitra"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Survei Mitra Kerjasama </span>
                </a>
            </li>
            <li>
                <a href="/surveiPenggunaLulusan"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Survei Pengguna Lulusan</span>
                </a>
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
            const customLink = document.getElementById('intendedUrl');

            surveiMhs.addEventListener('click', function() {
                customLink.value = '/surveiMhs';
            });

            surveiDsn.addEventListener('click', function() {
                customLink.value = '/surveiDsn';
            });
        });
    </script>
@endsection
