<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $id_pl
 * @property string $id_cpl_prodi
 * @property string $bobot_pl_cpl
 */
class 2020PlCpl extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_pl_cpl';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'id_pl', 'id_cpl_prodi', 'bobot_pl_cpl'];
}
