<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_admin
 * @property string $akses
 * @property string $nama_admin
 * @property string $user_admin
 * @property string $password_admin
 */
class AdminFSM extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'admin_fsm';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_admin';

    /**
     * @var array
     */
    protected $fillable = ['akses', 'nama_admin', 'user_admin', 'password_admin'];
}
