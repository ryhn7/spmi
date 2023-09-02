<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $kelompok
 * @property string $id_mk
 * @property string $mk
 * @property string $semester
 * @property string $sks_kuliah
 * @property string $sks_seminar
 * @property string $sks_praktikum
 * @property string $sks
 */
class Mk2020 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_mk';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'kelompok', 'id_mk', 'mk', 'semester', 'sks_kuliah', 'sks_seminar', 'sks_praktikum', 'sks'];
}
