<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan_pengguna extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jabatan_pengguna';

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



