<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $id_bk
 * @property string $bk
 */
class 2020Bk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_bk';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'id_bk', 'bk'];
}
