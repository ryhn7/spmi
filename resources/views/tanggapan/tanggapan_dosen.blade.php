@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Dosen</h2>
        <a href="/tanggapantpmfdosen" class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
            <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan TPMF</span>
        </a> <br>
        <a href="/tanggapantpmfdosen" class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
            <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan Dekan</span>
        </a>        
        <br>
            <table class="shadow-lg bg-white">
            <tr>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">No.</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Pernyataan</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Tanggapan GPM</th>
                <th class="bg-blue-100 border border-black text-center px-8 py-4">Tanggapan Dekan</th>
            </tr>
            <tr>
                <td class="border px-8 py-4">1.</td>
                <td class="border px-8 py-4">Ketegasan pimpinan dalam melaksanakan sistem pengelolaan SDM</td>
                <td class="border px-8 py-4">{{$feedback->{'1'} }} </td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">2.</td>
                <td class="border px-8 py-4">Sistem rekrutmen dosen yang dilakukan Fakultas Sains dan Matematika</td>
                <td class="border px-8 py-4"> {{$feedback->{'2'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">3.</td>
                <td class="border px-8 py-4">Sistem seleksi dosen yang dilaksanakan di Fakultas Sains dan Matematika</td>
                <td class="border px-8 py-4"> {{$feedback->{'3'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">4.</td>
                <td class="border px-8 py-4">Penempatan dosen di Fakultas Sains dan Matematika</td>
                <td class="border px-8 py-4"> {{$feedback->{'4'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">5.</td>
                <td class="border px-8 py-4">Fakultas Sains dan Matematika memfasilitasi kebutuhan untuk studi lanjut</td>
                <td class="border px-8 py-4"> {{$feedback->{'5'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">6.</td>
                <td class="border px-8 py-4">Dukungan pengembangan diri untuk mengikuti kursus/pelatihan</td>
                <td class="border px-8 py-4"> {{$feedback->{'6'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">7.</td>
                <td class="border px-8 py-4">Dukungan pengembangan diri untuk mengikuti seminar/workshop</td>
                <td class="border px-8 py-4"> {{$feedback->{'7'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">8.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk mengikuti studi banding dalam negeri</td>
                <td class="border px-8 py-4"> {{$feedback->{'8'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">9.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk mengikuti studi banding luar negeri</td>
                <td class="border px-8 py-4"> {{$feedback->{'9'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">10.</td>
                <td class="border px-8 py-4">Mendapat informasi tentang jenjang karir</td>
                <td class="border px-8 py-4"> {{$feedback->{'10'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">11.</td>
                <td class="border px-8 py-4">Layanan yang diberikan Fakultas Sains dan Matematika tentang jenjang karir</td>
                <td class="border px-8 py-4"> {{$feedback->{'11'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">12.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk meningkatkan jenjang karir</td>
                <td class="border px-8 py-4"> {{$feedback->{'12'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">13.</td>
                <td class="border px-8 py-4">Mendapatkan informasi tentang jabatan</td>
                <td class="border px-8 py-4"> {{$feedback->{'13'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">14.</td>
                <td class="border px-8 py-4">Layanan yang diberikan Fakultas Sains dan Matematika tentang jabatan</td>
                <td class="border px-8 py-4"> {{$feedback->{'14'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">15.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk peningkatan jabatan struktural</td>
                <td class="border px-8 py-4"> {{$feedback->{'15'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">16.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk peningkatan jabatan non struktural</td>
                <td class="border px-8 py-4"> {{$feedback->{'16'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">17.</td>
                <td class="border px-8 py-4">Fasilitas memperoleh informasi tentang kegiatan penelitian</td>
                <td class="border px-8 py-4"> {{$feedback->{'17'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">18.</td>
                <td class="border px-8 py-4">Fasilitas memperoleh pelayanan untuk melakukan kegiatan penelitian</td>
                <td class="border px-8 py-4"> {{$feedback->{'18'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">19.</td>
                <td class="border px-8 py-4">Ketersediaan sarana dan prasarana pendukung kegiatan penelitian</td>
                <td class="border px-8 py-4"> {{$feedback->{'19'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">20.</td>
                <td class="border px-8 py-4">Penilaian proposal penelitian dari reviewer</td>
                <td class="border px-8 py-4"> {{$feedback->{'20'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">21.</td>
                <td class="border px-8 py-4">Pemerataan penelitian berdasarkan distribusi dosen</td>
                <td class="border px-8 py-4"> {{$feedback->{'21'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">22.</td>
                <td class="border px-8 py-4">Pemerataan penelitian berdasarkan kualifikasi dosen</td>
                <td class="border px-8 py-4"> {{$feedback->{'22'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">23.</td>
                <td class="border px-8 py-4">Fasilitas bimbingan penyusunan proposal penelitian dan laporan akhir</td>
                <td class="border px-8 py-4"> {{$feedback->{'23'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">24.</td>
                <td class="border px-8 py-4">Kesempatan menjadi reviewer penelitian</td>
                <td class="border px-8 py-4"> {{$feedback->{'24'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">25.</td>
                <td class="border px-8 py-4">ketersediaan informasi jurnal terakreditasi sebagai media publikasi karya ilmiah</td>
                <td class="border px-8 py-4"> {{$feedback->{'25'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">26.</td>
                <td class="border px-8 py-4">Fasilitas memperoleh informasi tentang kegiatan PkM</td>
                <td class="border px-8 py-4"> {{$feedback->{'26'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">27.</td>
                <td class="border px-8 py-4">Fasilitas memperoleh pelayanan untuk melakukan kegiatan PkM</td>
                <td class="border px-8 py-4"> {{$feedback->{'27'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">28.</td>
                <td class="border px-8 py-4">Ketersediaan sarana dan prasarana pendukung kegiatan PkM</td>
                <td class="border px-8 py-4"> {{$feedback->{'28'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">29.</td>
                <td class="border px-8 py-4">Penilaian proposal PkM dari reviewer</td>
                <td class="border px-8 py-4"> {{$feedback->{'29'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">30.</td>
                <td class="border px-8 py-4">Pemerataan PkM berdasarkan distribusi dosen</td>
                <td class="border px-8 py-4"> {{$feedback->{'30'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">31.</td>
                <td class="border px-8 py-4">Pemerataan PkM berdasarkan kualifikasi dosen</td>
                <td class="border px-8 py-4"> {{$feedback->{'31'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">32.</td>
                <td class="border px-8 py-4">Fasilitas bimbingan penyusunan proposal PkM dan laporan akhir</td>
                <td class="border px-8 py-4"> {{$feedback->{'32'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">33.</td>
                <td class="border px-8 py-4">Perencanaan anggaran keuangan disusun berdasar pada RKAT sesuai dengan program dalam renstra dan renop.</td>
                <td class="border px-8 py-4"> {{$feedback->{'33'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">34.</td>
                <td class="border px-8 py-4">Keterlibatan dalam menyusun RKAT</td>
                <td class="border px-8 py-4"> {{$feedback->{'34'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">35.</td>
                <td class="border px-8 py-4">Alokasi anggaran sesuai dengan perencanaan keuangan untuk kegiatan tridharma perguruan tinggi</td>
                <td class="border px-8 py-4"> {{$feedback->{'35'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">36.</td>
                <td class="border px-8 py-4">Realisasi anggaran dengan program kerja prodi atau universitas untuk kegiatan tridharma perguruan tinggi</td>
                <td class="border px-8 py-4"> {{$feedback->{'36'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">37.</td>
                <td class="border px-8 py-4">Penggunaan anggaran dipertanggungjawabkan secara transparan</td>
                <td class="border px-8 py-4"> {{$feedback->{'37'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">38.</td>
                <td class="border px-8 py-4">Informasi penggunaan dan pelaporan dana dilakukan secara transparan</td>
                <td class="border px-8 py-4"> {{$feedback->{'38'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">39.</td>
                <td class="border px-8 py-4">Tersedianya sarana dan prasarana pendidikan</td>
                <td class="border px-8 py-4"> {{$feedback->{'39'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">40.</td>
                <td class="border px-8 py-4">Tersedianya sarana dan prasarana penelitian</td>
                <td class="border px-8 py-4"> {{$feedback->{'40'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">41.</td>
                <td class="border px-8 py-4">Tersedianya sarana dan prasarana PkM</td>
                <td class="border px-8 py-4"> {{$feedback->{'41'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">42.</td>
                <td class="border px-8 py-4">Tersedianya fasilitas untuk mendukung luaran dosen dalam bentuk Jurnal dan Proseding</td>
                <td class="border px-8 py-4"> {{$feedback->{'42'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
        </table>
    </div>
</section>
@endsection
