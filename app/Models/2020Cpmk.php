<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $id_cpmk
 * @property string $cpmk
 */
class 2020Cpmk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_cpmk';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'id_cpmk', 'cpmk'];
}
