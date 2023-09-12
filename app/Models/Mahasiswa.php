<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * @property string $id_mahasiswa
 * @property string $nama_mahasiswa
 * @property string $program_studi
 * @property string $periode
 * @property string $lulus
 * @property string $lulus2
 * @property string $IPK
 * @property string $status
 * @property string $waktu_tunggu
 * @property string $penghasilan
 * @property string $nama_atasan
 * @property string $jabatan_atasan
 * @property string $nama_perusahaan
 * @property string $provinsi
 * @property string $kota
 * @property string $tingkat
 * @property string $kesesuaian
 * @property string $asal
 * @property string $kurikulum
 * @property string $user_mahasiswa
 * @property string $password_mahasiswa
 * @property string $foto_mahasiswa
 */
class Mahasiswa extends Authenticatable
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mahasiswa';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_mahasiswa';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nama_mahasiswa', 'program_studi', 'periode', 'lulus', 'lulus2', 'IPK', 'status', 'waktu_tunggu', 'penghasilan', 'nama_atasan', 'jabatan_atasan', 'nama_perusahaan', 'provinsi', 'kota', 'tingkat', 'kesesuaian', 'asal', 'kurikulum', 'user_mahasiswa', 'password_mahasiswa', 'foto_mahasiswa'];

    public function getAuthPassword()
    {
        return $this->password_mahasiswa;
    }
}
