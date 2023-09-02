<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_jabatan
 * @property string $jabatan
 * @property string $nama_pejabat
 */
class Jabatan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jabatan';

    /**
     * @var array
     */
    protected $fillable = ['id_jabatan', 'jabatan', 'nama_pejabat'];
}
