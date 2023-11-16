<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * @property string $nama_tanpa_gelar
 * @property string $nama_dosen
 * @property string $NIP_dosen
 * @property string $NIDN
 * @property string $jabatan_fungsional
 * @property string $pangkat_golongan
 * @property string $keahlian
 * @property string $pendidikan_magister
 * @property string $pendidikan_doktor
 * @property string $ijazah_magister
 * @property string $ijazah_doktor
 * @property string $serdos
 * @property string $upload_serdos
 * @property string $profesi1
 * @property string $profesi2
 * @property string $profesi3
 * @property string $profesi4
 * @property string $profesi5
 * @property string $sinta
 * @property string $scholar
 * @property string $scopus
 * @property string $garuda
 * @property string $wos
 * @property string $orcid
 * @property string $instansi_dosen
 * @property string $user_dosen
 * @property string $password_dosen
 * @property string $status_dosen
 * @property string $foto_dosen
 */
class Dosen extends Authenticatable
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $connection = 'mysql2';
    protected $table = 'dosen';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'NIP_dosen';

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
        protected $fillable = ['nama_tanpa_gelar', 'nama_dosen', 'NIDN', 'jabatan_fungsional', 'pangkat_golongan', 'keahlian', 'pendidikan_magister', 'pendidikan_doktor', 'ijazah_magister', 'ijazah_doktor', 'serdos', 'upload_serdos', 'profesi1', 'profesi2', 'profesi3', 'profesi4', 'profesi5', 'sinta', 'scholar', 'scopus', 'garuda', 'wos', 'orcid', 'instansi_dosen', 'user_dosen', 'password_dosen', 'status_dosen', 'foto_dosen'];

    public function getAuthPassword()
    {
        return $this->password_dosen;
    }

    public function jabatan()
{
    return $this->belongsTo(Jabatan::class, 'id_jabatan');
}
}
