<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public function services()
    {
        return $this->hasMany(Service::class);

    }
    public function packages()
    {
        return $this->hasMany(Package::class);

    }
}
