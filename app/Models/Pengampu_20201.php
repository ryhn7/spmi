<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $urutan
 * @property string $program_studi
 * @property string $kode
 * @property string $pengampu_1
 * @property string $pengampu_2
 * @property string $pengampu_3
 * @property string $pengampu_4
 * @property string $pengampu_5
 * @property string $pengampu_6
 * @property string $pengampu_7
 * @property string $pengampu_8
 * @property string $pengampu_9
 * @property string $pengampu_10
 * @property string $pengampu_11
 * @property string $pengampu_12
 * @property string $pengampu_13
 * @property string $pengampu_14
 * @property string $pengampu_15
 * @property string $pertemuan_1
 * @property string $pertemuan_2
 * @property string $pertemuan_3
 * @property string $pertemuan_4
 * @property string $pertemuan_5
 * @property string $pertemuan_6
 * @property string $pertemuan_7
 * @property string $pertemuan_8
 * @property string $pertemuan_9
 * @property string $pertemuan_10
 * @property string $pertemuan_11
 * @property string $pertemuan_12
 * @property string $pertemuan_13
 * @property string $pertemuan_14
 * @property string $pertemuan_15
 */
class Pengampu_20201 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pengampu_20201';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'urutan';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'kode', 'pengampu_1', 'pengampu_2', 'pengampu_3', 'pengampu_4', 'pengampu_5', 'pengampu_6', 'pengampu_7', 'pengampu_8', 'pengampu_9', 'pengampu_10', 'pengampu_11', 'pengampu_12', 'pengampu_13', 'pengampu_14', 'pengampu_15', 'pertemuan_1', 'pertemuan_2', 'pertemuan_3', 'pertemuan_4', 'pertemuan_5', 'pertemuan_6', 'pertemuan_7', 'pertemuan_8', 'pertemuan_9', 'pertemuan_10', 'pertemuan_11', 'pertemuan_12', 'pertemuan_13', 'pertemuan_14', 'pertemuan_15'];
}
