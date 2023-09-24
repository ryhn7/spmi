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
 * @property string $1
 * @property string $2
 * @property string $3
 * @property string $4
 * @property string $5
 * @property string $6
 * @property string $7
 * @property string $8
 * @property string $9
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
    protected $guarded = ['id'];
}
