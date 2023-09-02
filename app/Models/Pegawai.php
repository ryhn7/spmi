<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_pegawai
 * @property string $nama_tanpa_gelar
 * @property string $nama_pegawai
 * @property string $NIP_pegawai
 * @property string $pekerjaan_pegawai
 * @property string $jabatan_fungsional
 * @property string $pendidikan_terakhir
 * @property string $foto_pegawai
 */
class Pegawai extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pegawai';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_pegawai';

    /**
     * @var array
     */
    protected $fillable = ['nama_tanpa_gelar', 'nama_pegawai', 'NIP_pegawai', 'pekerjaan_pegawai', 'jabatan_fungsional', 'pendidikan_terakhir', 'foto_pegawai'];
}
