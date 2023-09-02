<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $id_mk
 * @property string $pertemuan
 * @property string $id_cpmk
 * @property string $id_sub_cpmk
 * @property string $materi
 * @property string $metode
 * @property string $penilaian
 * @property string $bobot
 */
class 2020Rps extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'id_mk', 'pertemuan', 'id_cpmk', 'id_sub_cpmk', 'materi', 'metode', 'penilaian', 'bobot'];
}
