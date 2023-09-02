<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $id_mk
 * @property string $id_sub_cpmk
 * @property string $sub_cpmk
 * @property string $bobot_uts
 * @property string $bobot_uas
 */
class 2020SubCpmk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_sub_cpmk';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'id_mk', 'id_sub_cpmk', 'sub_cpmk', 'bobot_uts', 'bobot_uas'];
}
