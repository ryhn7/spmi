<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $id_mahasiswa1
 * @property string $id_mahasiswa2
 * @property string $id_mahasiswa3
 * @property string $id_mahasiswa4
 * @property string $id_mahasiswa5
 * @property string $id_mahasiswa6
 * @property string $id_mahasiswa7
 * @property string $id_mahasiswa8
 * @property string $id_mahasiswa9
 * @property string $id_mahasiswa10
 * @property string $kegiatan
 * @property string $jenis
 * @property string $penyelenggara
 * @property string $tempat
 * @property string $awal
 * @property string $akhir
 * @property string $tingkat
 * @property string $capaian
 * @property string $url
 * @property string $sertifikat
 * @property string $dokumentasi
 */
class Prestasi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'prestasi';

    /**
     * @var array
     */
    protected $fillable = ['id_mahasiswa1', 'id_mahasiswa2', 'id_mahasiswa3', 'id_mahasiswa4', 'id_mahasiswa5', 'id_mahasiswa6', 'id_mahasiswa7', 'id_mahasiswa8', 'id_mahasiswa9', 'id_mahasiswa10', 'kegiatan', 'jenis', 'penyelenggara', 'tempat', 'awal', 'akhir', 'tingkat', 'capaian', 'url', 'sertifikat', 'dokumentasi'];
}
