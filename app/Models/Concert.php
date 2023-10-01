<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $table = 'concerts';

    protected $fillable = ['name', 'date', 'venue'];
}
