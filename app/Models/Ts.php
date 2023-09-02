<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $tahun
 */
class Ts extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['tahun'];
}
