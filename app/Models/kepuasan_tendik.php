<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nama
 * @property string $NIP
 * @property string $date_time
 * @property string $1
 * @property string $2
 * @property string $3
 * @property string $4
 * @property string $5
 * @property string $6
 * @property string $7
 * @property string $8
 * @property string $9
 * @property string $10
 * @property string $11
 * @property string $12
 */
class kepuasan_tendik extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kepuasan_tendik';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'NIP', 'date_time', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
}
