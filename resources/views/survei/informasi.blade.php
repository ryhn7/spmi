@if (Auth::guard('mahasiswa')->check() ||
Auth::guard('dosen')->check() ||
Auth::guard('tendik')->check() )

    <section id="informasi-survei" class="bg-white text-black pt-32 sectionSize">
        <div>
            <h2 class="secondaryTitle text-black bg-underline2 bg-100%">SURVEI KEPUASAN PENGGUNA</h2>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 mx-8 flex flex-col items-center">
                <p class="text-justify font-open">
                    Tim Penjaminan Mutu Fakultas Sains dan Matematika menyelenggarakan survei kepuasan pengguna dengan
                    tujuan: <br>
                    1. Mengukur sejauh mana penyelenggaraan pelayanan yang telah dilakukan oleh unit kerja pelayanan. <br>
                    2. Mengukur kepuasan pengguna sebagai pengguna layanan. <br>
                    3. Mengetahui kelemahan atau kekuatan kualitas pelayanan dari masing-masing unit kerja pelayanan. <br>
                    4. Sebagai bahan penetapan rencana tindak lanjut perbaikan kualitas layanan. <br>
                    5. Sebagai umpan balik dalam memperbaiki kualitas layanan. <br><br>
                    Kegiatan survei kepuasan pengguna dilakukan dengan membagikan kuesioner kepada dosen, tenaga
                    kependidikan, mahasiswa, mitra kerjasama dan pengguna lulusan sebagai responden.
                    Kuesioner diterbitkan oleh Tim Penjaminan Mutu Fakultas Sains dan Matematika Universitas Diponegoro.
                    Analisis deskriptif data hasil survey dilakukan untuk mendapatkan perspektif dari setiap aspek yang
                    diukur. <br><br>
                    Mekanisme pengukuran survei kepuasan pengguna yaitu : <br>
                    1. Frekuensi Pengukuran: survei kepuasan pengguna dilakukan secara berkala setiap akhir tahun. <br>
                    2. Waktu Pengukuran: pengukuran dilakukan diawal bulan Desember. <br>
                    3. Mekanisme: Pengisian kuesioner dilaksanakan dengan mudah, secara online yang bisa diakses kapan saja
                    dan dimana saja pada periode pengisian.<br>
                    4. Pembagian kuesioner kepuasan pengguna kepada dosen, tenaga kependidikan, mahasiswa, mitra kerjasama
                    dan pengguna lulusan.<br> <br>
                    Data skor survei kepuasan dosen, tenaga kependidikan, mahasiswa, mitra kerjasama dan pengguna lulusan
                    untuk setiap aspek kualitas layanan diolah untuk memperoleh tingkat kepuasan rata - ratanya.
                    Berikutnya dihitung indeks kepuasan pengguna dengan menghitung grand mean (rerata dari rata - rata).
                    <br><br>
                    Indeks kepuasan pengguna ditentukan berdasarkan rentang skor seperti yang ditunjukkan pada tabel
                    berikut:<br> <br>
                <table class="border-collapse border border-slate-400 ...">
                    <tr>
                        <th class="border border-black px-8 py-4">No.</th>
                        <th class="border border-black px-8 py-4">Kriteria</th>
                        <th class="border border-black px-8 py-4">Skor</th>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">1.</td>
                        <td class="border border-black px-8 py-4">Sangat Baik</td>
                        <td class="border border-black px-8 py-4">4</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">2.</td>
                        <td class="border border-black px-8 py-4">Baik</td>
                        <td class="border border-black px-8 py-4">3</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">3.</td>
                        <td class="border border-black px-8 py-4">Cukup Baik</td>
                        <td class="border border-black px-8 py-4">2</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">4.</td>
                        <td class="border border-black px-8 py-4">Kurang Baik</td>
                        <td class="border border-black px-8 py-4">1</td>
                    </tr>
                </table> <br>

                Untuk melihat kriteria pencapaian responden berdasarkan sifat tertentu, maka diperlukan gambaran terhadap
                Indeks Tingkat Capaian Responden.
                Oleh karena itu dalam setiap penelitian selalu membuat “Master Scale” yaitu suatu skala pengukuran yang pada
                umumnya menunjukkan lima tingkatan sesuatu sifat rertentu. <br><br>
                Untuk penggambaran suatu master scale dari berbagai sifat tersebut ditunjukkan pada tabel berikut: <br> <br>

                <table class="border-collapse border border-slate-400 ...">
                    <tr>
                        <th class="border border-black px-8 py-4">No.</th>
                        <th class="border border-black px-8 py-4">Kriteria</th>
                        <th class="border border-black px-8 py-4">Indeks TCR</th>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">1.</td>
                        <td class="border border-black px-8 py-4">Sangat Baik</td>
                        <td class="border border-black px-8 py-4">3,51 - 4,00</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">2.</td>
                        <td class="border border-black px-8 py-4">Baik</td>
                        <td class="border border-black px-8 py-4">3,01 - 3,50</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">3.</td>
                        <td class="border border-black px-8 py-4">Cukup Baik</td>
                        <td class="border border-black px-8 py-4">2,51 - 3,00</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">4.</td>
                        <td class="border border-black px-8 py-4">Kurang Baik</td>
                        <td class="border border-black px-8 py-4">1,00 - 2,50</td>
                    </tr>
                </table>
                </p>
            </div>

        </div>
    </section>

@else
    <section id="informasi-survei" class="bg-[#1f2f5f] text-white pt-32 sectionSize">
        <div>
            <h2 class="secondaryTitle bg-underline2 bg-100%">SURVEI KEPUASAN PENGGUNA</h2>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 mx-8 flex flex-col items-center">
                <p class="text-justify font-open">
                    Tim Penjaminan Mutu Fakultas Sains dan Matematika menyelenggarakan survei kepuasan pengguna dengan
                    tujuan: <br>
                    1. Mengukur sejauh mana penyelenggaraan pelayanan yang telah dilakukan oleh unit kerja pelayanan. <br>
                    2. Mengukur kepuasan pengguna sebagai pengguna layanan. <br>
                    3. Mengetahui kelemahan atau kekuatan kualitas pelayanan dari masing-masing unit kerja pelayanan. <br>
                    4. Sebagai bahan penetapan rencana tindak lanjut perbaikan kualitas layanan. <br>
                    5. Sebagai umpan balik dalam memperbaiki kualitas layanan. <br><br>
                    Kegiatan survei kepuasan pengguna dilakukan dengan membagikan kuesioner kepada dosen, tenaga
                    kependidikan, mahasiswa, mitra kerjasama dan pengguna lulusan sebagai responden.
                    Kuesioner diterbitkan oleh Tim Penjaminan Mutu Fakultas Sains dan Matematika Universitas Diponegoro.
                    Analisis deskriptif data hasil survey dilakukan untuk mendapatkan perspektif dari setiap aspek yang
                    diukur. <br><br>
                    Mekanisme pengukuran survei kepuasan pengguna yaitu : <br>
                    1. Frekuensi Pengukuran: survei kepuasan pengguna dilakukan secara berkala setiap akhir tahun. <br>
                    2. Waktu Pengukuran: pengukuran dilakukan diawal bulan Desember. <br>
                    3. Mekanisme: Pengisian kuesioner dilaksanakan dengan mudah, secara online yang bisa diakses kapan saja
                    dan dimana saja pada periode pengisian.<br>
                    4. Pembagian kuesioner kepuasan pengguna kepada dosen, tenaga kependidikan, mahasiswa, mitra kerjasama
                    dan pengguna lulusan.<br> <br>
                    Data skor survei kepuasan dosen, tenaga kependidikan, mahasiswa, mitra kerjasama dan pengguna lulusan
                    untuk setiap aspek kualitas layanan diolah untuk memperoleh tingkat kepuasan rata - ratanya.
                    Berikutnya dihitung indeks kepuasan pengguna dengan menghitung grand mean (rerata dari rata - rata).
                    <br><br>
                    Indeks kepuasan pengguna ditentukan berdasarkan rentang skor seperti yang ditunjukkan pada tabel
                    berikut:<br> <br>
                <table class="border-collapse border border-slate-400 ...">
                    <tr>
                        <th class="border px-8 py-4">No.</th>
                        <th class="border px-8 py-4">Kriteria</th>
                        <th class="border px-8 py-4">Skor</th>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">1.</td>
                        <td class="border px-8 py-4">Sangat Baik</td>
                        <td class="border px-8 py-4">4</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">2.</td>
                        <td class="border px-8 py-4">Baik</td>
                        <td class="border px-8 py-4">3</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">3.</td>
                        <td class="border px-8 py-4">Cukup Baik</td>
                        <td class="border px-8 py-4">2</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">4.</td>
                        <td class="border px-8 py-4">Kurang Baik</td>
                        <td class="border px-8 py-4">1</td>
                    </tr>
                </table> <br>

                Untuk melihat kriteria pencapaian responden berdasarkan sifat tertentu, maka diperlukan gambaran terhadap
                Indeks Tingkat Capaian Responden.
                Oleh karena itu dalam setiap penelitian selalu membuat “Master Scale” yaitu suatu skala pengukuran yang pada
                umumnya menunjukkan lima tingkatan sesuatu sifat rertentu. <br><br>
                Untuk penggambaran suatu master scale dari berbagai sifat tersebut ditunjukkan pada tabel berikut: <br> <br>

                <table class="border-collapse border border-slate-400 ...">
                    <tr>
                        <th class="border px-8 py-4">No.</th>
                        <th class="border px-8 py-4">Kriteria</th>
                        <th class="border px-8 py-4">Indeks TCR</th>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">1.</td>
                        <td class="border px-8 py-4">Sangat Baik</td>
                        <td class="border px-8 py-4">3,51 - 4,00</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">2.</td>
                        <td class="border px-8 py-4">Baik</td>
                        <td class="border px-8 py-4">3,01 - 3,50</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">3.</td>
                        <td class="border px-8 py-4">Cukup Baik</td>
                        <td class="border px-8 py-4">2,51 - 3,00</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">4.</td>
                        <td class="border px-8 py-4">Kurang Baik</td>
                        <td class="border px-8 py-4">1,00 - 2,50</td>
                    </tr>
                </table>
                </p>
            </div>

        </div>
    </section>
@endif

<div id='mobileNav' class="md:hidden">
    @if (Auth::guard('mahasiswa')->check() ||
Auth::guard('dosen')->check() ||
Auth::guard('tendik')->check() )

    <section id="informasi-survei" class="bg-white text-black pt-32 sectionSize">
        <div>
            <h2 class="secondaryTitle text-black bg-underline2 bg-100%">SURVEI KEPUASAN PENGGUNA</h2>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 mx-8 flex flex-col items-center">
                <p class="text-justify font-open">
                    Tim Penjaminan Mutu Fakultas Sains dan Matematika menyelenggarakan survei kepuasan pengguna dengan
                    tujuan: <br>
                    1. Mengukur sejauh mana penyelenggaraan pelayanan yang telah dilakukan oleh unit kerja pelayanan. <br>
                    2. Mengukur kepuasan pengguna sebagai pengguna layanan. <br>
                    3. Mengetahui kelemahan atau kekuatan kualitas pelayanan dari masing-masing unit kerja pelayanan. <br>
                    4. Sebagai bahan penetapan rencana tindak lanjut perbaikan kualitas layanan. <br>
                    5. Sebagai umpan balik dalam memperbaiki kualitas layanan. <br><br>
                    Kegiatan survei kepuasan pengguna dilakukan dengan membagikan kuesioner kepada dosen, tenaga
                    kependidikan, mahasiswa, mitra kerjasama dan pengguna lulusan sebagai responden.
                    Kuesioner diterbitkan oleh Tim Penjaminan Mutu Fakultas Sains dan Matematika Universitas Diponegoro.
                    Analisis deskriptif data hasil survey dilakukan untuk mendapatkan perspektif dari setiap aspek yang
                    diukur. <br><br>
                    Mekanisme pengukuran survei kepuasan pengguna yaitu : <br>
                    1. Frekuensi Pengukuran: survei kepuasan pengguna dilakukan secara berkala setiap akhir tahun. <br>
                    2. Waktu Pengukuran: pengukuran dilakukan diawal bulan Desember. <br>
                    3. Mekanisme: Pengisian kuesioner dilaksanakan dengan mudah, secara online yang bisa diakses kapan saja
                    dan dimana saja pada periode pengisian.<br>
                    4. Pembagian kuesioner kepuasan pengguna kepada dosen, tenaga kependidikan, mahasiswa, mitra kerjasama
                    dan pengguna lulusan.<br> <br>
                    Data skor survei kepuasan dosen, tenaga kependidikan, mahasiswa, mitra kerjasama dan pengguna lulusan
                    untuk setiap aspek kualitas layanan diolah untuk memperoleh tingkat kepuasan rata - ratanya.
                    Berikutnya dihitung indeks kepuasan pengguna dengan menghitung grand mean (rerata dari rata - rata).
                    <br><br>
                    Indeks kepuasan pengguna ditentukan berdasarkan rentang skor seperti yang ditunjukkan pada tabel
                    berikut:<br> <br>
                <table class="border-collapse border border-slate-400 ...">
                    <tr>
                        <th class="border border-black px-8 py-4">No.</th>
                        <th class="border border-black px-8 py-4">Kriteria</th>
                        <th class="border border-black px-8 py-4">Skor</th>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">1.</td>
                        <td class="border border-black px-8 py-4">Sangat Baik</td>
                        <td class="border border-black px-8 py-4">4</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">2.</td>
                        <td class="border border-black px-8 py-4">Baik</td>
                        <td class="border border-black px-8 py-4">3</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">3.</td>
                        <td class="border border-black px-8 py-4">Cukup Baik</td>
                        <td class="border border-black px-8 py-4">2</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">4.</td>
                        <td class="border border-black px-8 py-4">Kurang Baik</td>
                        <td class="border border-black px-8 py-4">1</td>
                    </tr>
                </table> <br>

                Untuk melihat kriteria pencapaian responden berdasarkan sifat tertentu, maka diperlukan gambaran terhadap
                Indeks Tingkat Capaian Responden.
                Oleh karena itu dalam setiap penelitian selalu membuat “Master Scale” yaitu suatu skala pengukuran yang pada
                umumnya menunjukkan lima tingkatan sesuatu sifat rertentu. <br><br>
                Untuk penggambaran suatu master scale dari berbagai sifat tersebut ditunjukkan pada tabel berikut: <br> <br>

                <table class="border-collapse border border-slate-400 ...">
                    <tr>
                        <th class="border border-black px-8 py-4">No.</th>
                        <th class="border border-black px-8 py-4">Kriteria</th>
                        <th class="border border-black px-8 py-4">Indeks TCR</th>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">1.</td>
                        <td class="border border-black px-8 py-4">Sangat Baik</td>
                        <td class="border border-black px-8 py-4">3,51 - 4,00</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">2.</td>
                        <td class="border border-black px-8 py-4">Baik</td>
                        <td class="border border-black px-8 py-4">3,01 - 3,50</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">3.</td>
                        <td class="border border-black px-8 py-4">Cukup Baik</td>
                        <td class="border border-black px-8 py-4">2,51 - 3,00</td>
                    </tr>
                    <tr>
                        <td class="border border-black px-8 py-4">4.</td>
                        <td class="border border-black px-8 py-4">Kurang Baik</td>
                        <td class="border border-black px-8 py-4">1,00 - 2,50</td>
                    </tr>
                </table>
                </p>
            </div>

        </div>
    </section>

@else
    <section id="informasi-survei" class="bg-[#1f2f5f] text-white pt-32 sectionSize">
        <div>
            <h2 class="secondaryTitle bg-underline2 bg-100%">SURVEI KEPUASAN PENGGUNA</h2>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 mx-8 flex flex-col items-center">
                <p class="text-justify font-open">
                    Tim Penjaminan Mutu Fakultas Sains dan Matematika menyelenggarakan survei kepuasan pengguna dengan
                    tujuan: <br>
                    1. Mengukur sejauh mana penyelenggaraan pelayanan yang telah dilakukan oleh unit kerja pelayanan. <br>
                    2. Mengukur kepuasan pengguna sebagai pengguna layanan. <br>
                    3. Mengetahui kelemahan atau kekuatan kualitas pelayanan dari masing-masing unit kerja pelayanan. <br>
                    4. Sebagai bahan penetapan rencana tindak lanjut perbaikan kualitas layanan. <br>
                    5. Sebagai umpan balik dalam memperbaiki kualitas layanan. <br><br>
                    Kegiatan survei kepuasan pengguna dilakukan dengan membagikan kuesioner kepada dosen, tenaga
                    kependidikan, mahasiswa, mitra kerjasama dan pengguna lulusan sebagai responden.
                    Kuesioner diterbitkan oleh Tim Penjaminan Mutu Fakultas Sains dan Matematika Universitas Diponegoro.
                    Analisis deskriptif data hasil survey dilakukan untuk mendapatkan perspektif dari setiap aspek yang
                    diukur. <br><br>
                    Mekanisme pengukuran survei kepuasan pengguna yaitu : <br>
                    1. Frekuensi Pengukuran: survei kepuasan pengguna dilakukan secara berkala setiap akhir tahun. <br>
                    2. Waktu Pengukuran: pengukuran dilakukan diawal bulan Desember. <br>
                    3. Mekanisme: Pengisian kuesioner dilaksanakan dengan mudah, secara online yang bisa diakses kapan saja
                    dan dimana saja pada periode pengisian.<br>
                    4. Pembagian kuesioner kepuasan pengguna kepada dosen, tenaga kependidikan, mahasiswa, mitra kerjasama
                    dan pengguna lulusan.<br> <br>
                    Data skor survei kepuasan dosen, tenaga kependidikan, mahasiswa, mitra kerjasama dan pengguna lulusan
                    untuk setiap aspek kualitas layanan diolah untuk memperoleh tingkat kepuasan rata - ratanya.
                    Berikutnya dihitung indeks kepuasan pengguna dengan menghitung grand mean (rerata dari rata - rata).
                    <br><br>
                    Indeks kepuasan pengguna ditentukan berdasarkan rentang skor seperti yang ditunjukkan pada tabel
                    berikut:<br> <br>
                <table class="border-collapse border border-slate-400 ...">
                    <tr>
                        <th class="border px-8 py-4">No.</th>
                        <th class="border px-8 py-4">Kriteria</th>
                        <th class="border px-8 py-4">Skor</th>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">1.</td>
                        <td class="border px-8 py-4">Sangat Baik</td>
                        <td class="border px-8 py-4">4</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">2.</td>
                        <td class="border px-8 py-4">Baik</td>
                        <td class="border px-8 py-4">3</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">3.</td>
                        <td class="border px-8 py-4">Cukup Baik</td>
                        <td class="border px-8 py-4">2</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">4.</td>
                        <td class="border px-8 py-4">Kurang Baik</td>
                        <td class="border px-8 py-4">1</td>
                    </tr>
                </table> <br>

                Untuk melihat kriteria pencapaian responden berdasarkan sifat tertentu, maka diperlukan gambaran terhadap
                Indeks Tingkat Capaian Responden.
                Oleh karena itu dalam setiap penelitian selalu membuat “Master Scale” yaitu suatu skala pengukuran yang pada
                umumnya menunjukkan lima tingkatan sesuatu sifat rertentu. <br><br>
                Untuk penggambaran suatu master scale dari berbagai sifat tersebut ditunjukkan pada tabel berikut: <br> <br>

                <table class="border-collapse border border-slate-400 ...">
                    <tr>
                        <th class="border px-8 py-4">No.</th>
                        <th class="border px-8 py-4">Kriteria</th>
                        <th class="border px-8 py-4">Indeks TCR</th>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">1.</td>
                        <td class="border px-8 py-4">Sangat Baik</td>
                        <td class="border px-8 py-4">3,51 - 4,00</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">2.</td>
                        <td class="border px-8 py-4">Baik</td>
                        <td class="border px-8 py-4">3,01 - 3,50</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">3.</td>
                        <td class="border px-8 py-4">Cukup Baik</td>
                        <td class="border px-8 py-4">2,51 - 3,00</td>
                    </tr>
                    <tr>
                        <td class="border px-8 py-4">4.</td>
                        <td class="border px-8 py-4">Kurang Baik</td>
                        <td class="border px-8 py-4">1,00 - 2,50</td>
                    </tr>
                </table>
                </p>
            </div>

        </div>
    </section>
@endif
</div>

