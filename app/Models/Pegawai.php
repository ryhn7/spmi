<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


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
class Pegawai extends Authenticatable
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
   // protected $connection = 'mysql2';
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
    protected $fillable = ['nama_tanpa_gelar', 'nama_pegawai', 'NIP_pegawai', 'pekerjaan_pegawai', 'jabatan_fungsional', 'pendidikan_terakhir', 'foto_pegawai', 'user_pegawai', 'password_pegawai'];

    public function getAuthPassword()
    {
        return $this->password_pegawai;
    }
}
