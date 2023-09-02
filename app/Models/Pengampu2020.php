<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $periode
 * @property string $id_mk
 * @property string $kelas
 * @property string $pengampu
 */
class Pengampu2020 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_pengampu';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'periode', 'id_mk', 'kelas', 'pengampu'];
}
