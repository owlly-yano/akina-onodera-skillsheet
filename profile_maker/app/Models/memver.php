<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class memver extends Model
{
    protected $table = 'memvers';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
