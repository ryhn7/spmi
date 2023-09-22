@extends('layouts.main')

@section('container')
<section class="sectionSize bg-white">
    <div><br><br>
        <h2 class="secondaryTitle bg-underline3 bg-100%" style="text-align: center;">Tanggapan Terhadap Survei Mitra Kerjasama</h2>
        <a href="/tanggapantpmfmitra" class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
            <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan TPMF</span>
        </a> <br>
        <a href="/tanggapantpmfmitra" class="flex items-center p-3 text-base text-white rounded-lg bg-[#1f2f5f] hover:bg-[#324c99] group hover:shadow">
            <span class="flex-1 ml-3 whitespace-nowrap">Tambahkan tanggapan Dekan</span>
        </a>        
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
                <td class="border px-8 py-4">Fakultas Sains dan Matematika merespon dengan baik dalam usaha untuk menjalin/merintis kerjasama.</td>
                <td class="border px-8 py-4"> {{$feedback->{'1'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">2.</td>
                <td class="border px-8 py-4">Proses pembuatan MoU dan Perjanjian Kerjasama sesuai dengan harapan.</td>
                <td class="border px-8 py-4"> {{$feedback->{'2'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">3.</td>
                <td class="border px-8 py-4">Fakultas Sains dan Matematika memberikan pendampingan terhadap kebutuhan kerjasama sesuai dengan harapan.</td>
                <td class="border px-8 py-4"> {{$feedback->{'3'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">4.</td>
                <td class="border px-8 py-4">Kerjasama dengan Fakultas Sains dan Matematika berjalan sesuai dengan harapan.</td>
                <td class="border px-8 py-4"> {{$feedback->{'4'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">5.</td>
                <td class="border px-8 py-4">Kami mendapatkan manfaat yang baik dalam menjalin kerjasama dengan Fakultas Sains dan Matematika.</td>
                <td class="border px-8 py-4"> {{$feedback->{'5'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">6.</td>
                <td class="border px-8 py-4">Implementasi kerjasama sesuai dengan Perjanjian Kerjasama.</td>
                <td class="border px-8 py-4"> {{$feedback->{'6'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">7.</td>
                <td class="border px-8 py-4">Pelaporan hasil kerjasama sesuai dengan kemufakatan dan aturan yang berlaku.</td>
                <td class="border px-8 py-4"> {{$feedback->{'7'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">8.</td>
                <td class="border px-8 py-4">Kami akan melanjutkan kerjasama pada tahun - tahun selanjutnya (sesuai kebutuhan).</td>
                <td class="border px-8 py-4"> {{$feedback->{'8'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">9.</td>
                <td class="border px-8 py-4">SDM yang ada di Fakultas Sains dan Matematika sesuai dengan keahlian yang diperlukan dalam kerjasama.</td>
                <td class="border px-8 py-4"> {{$feedback->{'9'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
            <tr>
                <td class="border px-8 py-4">10.</td>
                <td class="border px-8 py-4">SDM dari Fakultas Sains dan Matematika bekerja dengan profesional.</td>
                <td class="border px-8 py-4"> {{$feedback->{'10'} }}</td>
                <td class="border px-8 py-4"> </td>
            </tr>
        </table>
    </div>
</section>
@endsection
