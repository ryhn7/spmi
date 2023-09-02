<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $program_studi
 * @property string $periode
 * @property string $daya_tampung
 * @property string $pendaftar
 */
class Animo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'animo';

    /**
     * @var array
     */
    protected $fillable = ['program_studi', 'periode', 'daya_tampung', 'pendaftar'];
}
