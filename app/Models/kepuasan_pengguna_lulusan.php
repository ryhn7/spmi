<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nama
 * @property string $jabatan
 * @property string $nama_perusahaan
 * @property string $alumni
 * @property string $date_time
 * @property string $program_studi
 * @property string $1
 * @property string $2
 * @property string $3
 * @property string $4
 * @property string $5
 * @property string $6
 * @property string $7
 * @property string $8
 * @property string $9
 * @property string $created_at
 * @property string $updated_at
 */
class kepuasan_pengguna_lulusan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kepuasan_pengguna_lulusan';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'jabatan', 'nama_perusahaan', 'alumni', 'date_time', 'program_studi', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'created_at', 'updated_at'];
}
