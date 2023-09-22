<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $ID
 * @property string $Pernyataan
 * @property string $TPMF
 * @property string $Dekanat
 */
class feedback_tendik extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'feedback_tendik';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $guarded = ['ID'];
}
