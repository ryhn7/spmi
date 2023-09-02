<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $periode
 * @property string $tanggal_masuk
 */
class Periode extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'periode';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'periode';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['tanggal_masuk'];
}
