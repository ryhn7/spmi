@if (Auth::guard('mahasiswa')->check() ||
        Auth::guard('dosen')->check() ||
        Auth::guard('tendik')->check() ||
        Auth::guard('tpmf')->check() ||
        Auth::guard('dekan')->check() ||
        Auth::guard('wadek')->check() ||
        Auth::guard('gpm')->check())
    <section id="tindak-lanjut" class="sectionSize bg-[#1f2f5f] pt-32">
        <div>
            <h2 class="secondaryTitle text-white bg-underline3 bg-100%">Upaya Tindak Lanjut dan Perbaikan</h2>
        </div>
        <div class="mb-6" style="color: white">
            <h3>
                <a href="{{ route('feedbackDosen') }}">
                    1. <span class="hover:text-white hover:underline underline-offset-4">Upaya Tindak Lanjut dan
                        Perbaikan
                        Hasil Survei Kepuasan Dosen</span>
                </a><br>
                <a  href="{{ route('feedbackTendik') }}">
                    2. <span class="hover:text-white hover:underline underline-offset-4">
                        Upaya Tindak Lanjut dan Perbaikan Hasil Survei Kepuasan Tenaga Kependidikan</span>
                </a><br>
                <a  href="{{ route('feedbackMahasiswa') }}">
                    3. <span class="hover:text-white hover:underline underline-offset-4">
                        Upaya Tindak Lanjut dan Perbaikan Hasil Survei Kepuasan Mahasiswa</span>
                </a><br>
                <a  href="{{ route('feedbackMitra') }}">
                    4. <span class="hover:text-white hover:underline underline-offset-4">
                        Upaya Tindak Lanjut dan Perbaikan Hasil Survei Kepuasan Mitra Kerjasama</span>
                </a><br>
                <a 
                    href="{{ route('feedbackStakeHolder') }}">
                    5. <span class="hover:text-white hover:underline underline-offset-4">
                        Upaya Tindak Lanjut dan Perbaikan Hasil Survei Kepuasan Pengguna Lulusan</span>
                </a><br>
            </h3>
        </div>
    </section>
@else
    <section id="tindak-lanjut" class="sectionSize bg-white pt-32">
        <div>
            <h2 class="secondaryTitle bg-underline3 bg-100%">Upaya Tindak Lanjut dan Perbaikan</h2>
        </div>
        <div class="mb-6" style="color: black">
            <h3>
                <a href="{{ route('feedbackDosen') }}">
                    1. <span class="hover:text-black hover:underline underline-offset-4">Upaya Tindak Lanjut dan
                        Perbaikan
                        Hasil Survei Kepuasan Dosen</span>
                </a><br>
                <a class="hover:text-black hover:underline underline-offset-4" href="{{ route('feedbackTendik') }}">
                    2. Upaya Tindak Lanjut dan Perbaikan Hasil Survei Kepuasan Tenaga Kependidikan
                </a><br>
                <a class="hover:text-black hover:underline underline-offset-4" href="{{ route('feedbackMahasiswa') }}">
                    3. Upaya Tindak Lanjut dan Perbaikan Hasil Survei Kepuasan Mahasiswa
                </a><br>
                <a class="hover:text-black hover:underline underline-offset-4" href="{{ route('feedbackMitra') }}">
                    4. Upaya Tindak Lanjut dan Perbaikan Hasil Survei Kepuasan Mitra Kerjasama
                </a><br>
                <a class="hover:text-black hover:underline underline-offset-4"
                    href="{{ route('feedbackStakeHolder') }}">
                    5. Upaya Tindak Lanjut dan Perbaikan Hasil Survei Kepuasan Pengguna Lulusan
                </a><br>
            </h3>
        </div>
    </section>
@endif
