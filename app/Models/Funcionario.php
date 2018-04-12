<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cargo;

class Funcionario extends Model
{
    public $timestamps = false;

    public function cargo()
    {
        return $this->hasOne(Cargo::class);
    }
}
