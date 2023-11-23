<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_jabatan
 * @property string $jabatan
 * @property string $nama_pejabat
 */
class jabatan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $connection = 'mysql2';

    protected $table = 'jabatan';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_jabatan';

    /**
     * @var array
     */
    protected $fillable = ['jabatan', 'nama_pejabat'];
}
