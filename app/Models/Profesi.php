<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $id_mahasiswa
 * @property string $bidang
 * @property string $nomor
 * @property string $penerbit
 * @property string $awal
 * @property string $akhir
 * @property string $sertifikat
 */
class Profesi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'profesi';

    /**
     * @var array
     */
    protected $fillable = ['id_mahasiswa', 'bidang', 'nomor', 'penerbit', 'awal', 'akhir', 'sertifikat'];
}
