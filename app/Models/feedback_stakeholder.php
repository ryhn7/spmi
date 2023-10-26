<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $ID
 * @property string $Aktor
 * @property string $1
 * @property string $2
 * @property string $3
 * @property string $4
 * @property string $5
 * @property string $6
 * @property string $7
 * @property string $8
 * @property string $9
 * @property string $updated_at
 * @property string $created_at
 */
class feedback_stakeholder extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'feedback_stakeholder';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $guarded = ['ID'];
}
