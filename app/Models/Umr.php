<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $provinsi
 * @property string $2017
 * @property string $2018
 * @property string $2019
 * @property string $2020
 * @property string $2021
 * @property string $2022
 * @property string $2023
 */
class Umr extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'umr';

    /**
     * @var array
     */
    protected $fillable = ['provinsi', '2017', '2018', '2019', '2020', '2021', '2022', '2023'];
}
