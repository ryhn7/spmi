<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property integer $id_admin
 * @property string $akses
 * @property string $nama_admin
 * @property string $user_admin
 * @property string $password_admin
 */
class AdminFSM extends Authenticatable
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */

    protected $connection = 'mysql2';

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

    public function getAuthPassword()
    {
        return $this->password_admin;
    }
}
