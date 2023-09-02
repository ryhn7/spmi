<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $id_bk
 * @property string $id_mk
 * @property string $bobot_bk_mk
 */
class BkMk2020 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_bk_mk';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'id_bk', 'id_mk', 'bobot_bk_mk'];
}
