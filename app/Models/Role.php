<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mahasiswas ()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    public function dosens ()
    {
        return $this->hasMany(Dosen::class);
    }
}
