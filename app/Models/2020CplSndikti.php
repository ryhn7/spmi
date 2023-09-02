<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $aspek
 * @property string $id_cpl_sndikti
 * @property string $cpl_sndikti
 */
class 2020CplSndikti extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = '2020_cpl_sndikti';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'aspek', 'id_cpl_sndikti', 'cpl_sndikti'];
}
