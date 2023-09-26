@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Dosen</h2>
        @if (Auth::guard('tpmf')->check())
                <a href="/FeedbackDosen"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan TPMF</span>
                </a>
            @elseif (Auth::guard('dekan')->check())
                <a href="/FeedbackDosen"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan Dekan</span>
                </a>
            @endif        
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
                <td class="border px-8 py-4">{{$feedbackTpmf->{'1'} }} </td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'1'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">2.</td>
                <td class="border px-8 py-4">Sistem rekrutmen dosen yang dilakukan Fakultas Sains dan Matematika</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'2'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'2'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">3.</td>
                <td class="border px-8 py-4">Sistem seleksi dosen yang dilaksanakan di Fakultas Sains dan Matematika</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'3'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'3'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">4.</td>
                <td class="border px-8 py-4">Penempatan dosen di Fakultas Sains dan Matematika</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'4'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'4'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">5.</td>
                <td class="border px-8 py-4">Fakultas Sains dan Matematika memfasilitasi kebutuhan untuk studi lanjut</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'5'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'5'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">6.</td>
                <td class="border px-8 py-4">Dukungan pengembangan diri untuk mengikuti kursus/pelatihan</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'6'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'6'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">7.</td>
                <td class="border px-8 py-4">Dukungan pengembangan diri untuk mengikuti seminar/workshop</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'7'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'7'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">8.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk mengikuti studi banding dalam negeri</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'8'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'8'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">9.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk mengikuti studi banding luar negeri</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'9'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'9'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">10.</td>
                <td class="border px-8 py-4">Mendapat informasi tentang jenjang karir</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'10'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'10'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">11.</td>
                <td class="border px-8 py-4">Layanan yang diberikan Fakultas Sains dan Matematika tentang jenjang karir</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'11'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'11'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">12.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk meningkatkan jenjang karir</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'12'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'12'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">13.</td>
                <td class="border px-8 py-4">Mendapatkan informasi tentang jabatan</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'13'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'13'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">14.</td>
                <td class="border px-8 py-4">Layanan yang diberikan Fakultas Sains dan Matematika tentang jabatan</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'14'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'14'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">15.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk peningkatan jabatan struktural</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'15'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'15'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">16.</td>
                <td class="border px-8 py-4">Dukungan dan kesempatan untuk peningkatan jabatan non struktural</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'16'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'16'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">17.</td>
                <td class="border px-8 py-4">Fasilitas memperoleh informasi tentang kegiatan penelitian</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'17'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'17'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">18.</td>
                <td class="border px-8 py-4">Fasilitas memperoleh pelayanan untuk melakukan kegiatan penelitian</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'18'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'18'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">19.</td>
                <td class="border px-8 py-4">Ketersediaan sarana dan prasarana pendukung kegiatan penelitian</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'19'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'19'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">20.</td>
                <td class="border px-8 py-4">Penilaian proposal penelitian dari reviewer</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'20'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'20'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">21.</td>
                <td class="border px-8 py-4">Pemerataan penelitian berdasarkan distribusi dosen</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'21'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'21'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">22.</td>
                <td class="border px-8 py-4">Pemerataan penelitian berdasarkan kualifikasi dosen</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'22'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'22'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">23.</td>
                <td class="border px-8 py-4">Fasilitas bimbingan penyusunan proposal penelitian dan laporan akhir</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'23'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'23'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">24.</td>
                <td class="border px-8 py-4">Kesempatan menjadi reviewer penelitian</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'24'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'24'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">25.</td>
                <td class="border px-8 py-4">ketersediaan informasi jurnal terakreditasi sebagai media publikasi karya ilmiah</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'25'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'25'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">26.</td>
                <td class="border px-8 py-4">Fasilitas memperoleh informasi tentang kegiatan PkM</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'26'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'26'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">27.</td>
                <td class="border px-8 py-4">Fasilitas memperoleh pelayanan untuk melakukan kegiatan PkM</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'27'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'27'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">28.</td>
                <td class="border px-8 py-4">Ketersediaan sarana dan prasarana pendukung kegiatan PkM</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'28'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'28'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">29.</td>
                <td class="border px-8 py-4">Penilaian proposal PkM dari reviewer</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'29'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'29'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">30.</td>
                <td class="border px-8 py-4">Pemerataan PkM berdasarkan distribusi dosen</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'30'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'30'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">31.</td>
                <td class="border px-8 py-4">Pemerataan PkM berdasarkan kualifikasi dosen</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'31'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'31'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">32.</td>
                <td class="border px-8 py-4">Fasilitas bimbingan penyusunan proposal PkM dan laporan akhir</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'32'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'32'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">33.</td>
                <td class="border px-8 py-4">Perencanaan anggaran keuangan disusun berdasar pada RKAT sesuai dengan program dalam renstra dan renop.</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'33'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'33'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">34.</td>
                <td class="border px-8 py-4">Keterlibatan dalam menyusun RKAT</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'34'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'34'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">35.</td>
                <td class="border px-8 py-4">Alokasi anggaran sesuai dengan perencanaan keuangan untuk kegiatan tridharma perguruan tinggi</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'35'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'35'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">36.</td>
                <td class="border px-8 py-4">Realisasi anggaran dengan program kerja prodi atau universitas untuk kegiatan tridharma perguruan tinggi</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'36'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'36'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">37.</td>
                <td class="border px-8 py-4">Penggunaan anggaran dipertanggungjawabkan secara transparan</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'37'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'37'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">38.</td>
                <td class="border px-8 py-4">Informasi penggunaan dan pelaporan dana dilakukan secara transparan</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'38'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'38'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">39.</td>
                <td class="border px-8 py-4">Tersedianya sarana dan prasarana pendidikan</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'39'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'39'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">40.</td>
                <td class="border px-8 py-4">Tersedianya sarana dan prasarana penelitian</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'40'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'40'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">41.</td>
                <td class="border px-8 py-4">Tersedianya sarana dan prasarana PkM</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'41'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'41'} }} </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">42.</td>
                <td class="border px-8 py-4">Tersedianya fasilitas untuk mendukung luaran dosen dalam bentuk Jurnal dan Proseding</td>
                <td class="border px-8 py-4"> {{$feedbackTpmf->{'42'} }}</td>
                <td class="border px-8 py-4"> {{ $feedbackDekan->{'42'} }} </td>
            </tr>
        </table>
    </div>
</section>
@endsection
