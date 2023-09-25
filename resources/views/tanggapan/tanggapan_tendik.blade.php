@extends('layouts.main')

@section('container')
    <section class="sectionSize bg-white">
        <div><br><br>
            <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Tenaga
                Pendidik</h2>
            @if (Auth::guard('tpmf')->check())
                <a href="/FeedbackTendik"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan TPMF</span>
                </a>
            @elseif (Auth::guard('dekan')->check())
                <a href="/FeedbackTendik"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan Dekan</span>
                </a>
            @endif
            <br>
            <table class="shadow-lg bg-white">
                <tr>
                    <th class="bg-blue-100 border border-black text-center px-8 py-4">No.</th>
                    <th class="bg-blue-100 border border-black text-center px-8 py-4">Pernyataan</th>
                    <th class="bg-blue-100 border border-black text-center px-8 py-4">Tanggapan TPMF</th>
                    <th class="bg-blue-100 border border-black text-center px-8 py-4">Tanggapan Dekan</th>
                </tr>
                <tr>
                    <td class="border px-8 py-4">1.</td>
                    <td class="border px-8 py-4">Fakultas Sains dan Matematika memfasilitasi kebutuhan untuk studi lanjut
                    </td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'1'} }} </td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'1'} }} </td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">2.</td>
                    <td class="border px-8 py-4">Dukungan pengembangan diri untuk mengikuti kursus/pelatihan</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'2'} }}</td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'3'} }}</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">3.</td>
                    <td class="border px-8 py-4">Dukungan pengembangan diri untuk mengikuti seminar/workshop</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'3'} }}</td>
                    <td class="border px-8 py-4">{{ $feedbackDekan->{'3'} }} </td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">4.</td>
                    <td class="border px-8 py-4">Dukungan dan kesempatan untuk mengikuti studi banding dalam negeri</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'4'} }}</td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'4'} }}</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">5.</td>
                    <td class="border px-8 py-4">Dukungan dan kesempatan untuk mengikuti studi banding luar negeri</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'5'} }}</td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'5'} }}</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">6.</td>
                    <td class="border px-8 py-4">Mendapat informasi tentang jenjang karir</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'6'} }}</td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'6'} }}</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">7.</td>
                    <td class="border px-8 py-4">Layanan yang diberikan Fakultas Sains dan Matematika tentang jenjang karir
                    </td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'7'} }}</td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'7'} }}</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">8.</td>
                    <td class="border px-8 py-4">Dukungan dan kesempatan untuk meningkatkan jenjang karir</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'8'} }}</td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'8'} }}</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">9.</td>
                    <td class="border px-8 py-4">Mendapatkan informasi tentang jabatan</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'9'} }}</td>
                    <td class="border px-8 py-4">{{ $feedbackDekan->{'9'} }} </td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">10.</td>
                    <td class="border px-8 py-4">Layanan yang diberikan Fakultas Sains dan Matematika tentang jabatan</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'10'} }}</td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'10'} }}</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">11.</td>
                    <td class="border px-8 py-4">Dukungan dan kesempatan untuk peningkatan jabatan struktural</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'11'} }}</td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'11'} }}</td>
                </tr>
                <tr>
                    <td class="border px-8 py-4">12.</td>
                    <td class="border px-8 py-4">Dukungan dan kesempatan untuk peningkatan jabatan non struktural</td>
                    <td class="border px-8 py-4"> {{ $feedbackTpmf->{'12'} }}</td>
                    <td class="border px-8 py-4"> {{ $feedbackDekan->{'12'} }}</td>
                </tr>
            </table>
        </div>
    </section>
@endsection
