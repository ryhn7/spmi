<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $id_cpl_prodi
 * @property string $cpl_prodi
 */
class 2020CplProdi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_cpl_prodi';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'id_cpl_prodi', 'cpl_prodi'];
}
