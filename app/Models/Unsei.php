<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unsei extends Model
{
    public function tag()
    {
        return $this->hasMany(Tag::class);
    }
}
