@extends('layouts.main')

@section('container')   
    <!-- Hero -->
    @include('hero.index')

    <!-- Informasi Survei -->
    @include('survei.informasi')

    <!-- Isi Survei -->
    @include('survei.index')

    <!-- Hasil Survei -->
    @include('hasil_survei.index')

    <!-- Upaya Tindak Lanjut -->
    @include('feedback_survei.index')
@endsection
