<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $id_cpmk
 * @property string $id_mk
 * @property string $bobot_cpmk_mk
 */
class 2020CpmkMk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_cpmk_mk';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'id_cpmk', 'id_mk', 'bobot_cpmk_mk'];
}
