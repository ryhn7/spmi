@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Pengguna Lulusan</h2>
            @if (Auth::guard('gpm')->check())
                <a href="/FeedbackPenggunaLulusan"
                    class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
                    <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan GPM</span>
                </a>
            @elseif (Auth::guard('dekan')->check())
                <a href="/FeedbackPenggunaLulusan"
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
                <td class="border px-8 py-4">Etika</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'1'} }} </td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'1'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">2.</td>
                <td class="border px-8 py-4">Keahlian pada Bidang Ilmu</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'2'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'2'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">3.</td>
                <td class="border px-8 py-4">Kemampuan Bahasa Asing</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'3'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'3'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">4.</td>
                <td class="border px-8 py-4">Penggunaan Teknologi Informasi</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'4'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'4'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">5.</td>
                <td class="border px-8 py-4">Komunikasi</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'5'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'5'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">6.</td>
                <td class="border px-8 py-4">Kerjasama Tim</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'6'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'6'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">7.</td>
                <td class="border px-8 py-4">Pengembangan Diri</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'7'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'7'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">8.</td>
                <td class="border px-8 py-4">Kepemimpinan</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'8'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'8'} }}</td>
            </tr>
            <tr>
                <td class="border px-8 py-4">9.</td>
                <td class="border px-8 py-4">Etos Kerja</td>
                <td class="border px-8 py-4"> {{$feedbackGpm->{'9'} }}</td>
                <td class="border px-8 py-4"> {{$feedbackDekan->{'9'} }}</td>
            </tr>
        </table>
    </div>
</section>
@endsection
