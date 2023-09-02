<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $id_pl
 * @property string $pl
 */
class 2020Pl extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_pl';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'id_pl', 'pl'];
}
