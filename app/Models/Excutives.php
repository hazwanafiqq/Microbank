<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class excutives extends Model
{
    use HasFactory;
    protected $table = 'excutives';
    protected $fillable = [
        'id',
        'execCode',
        'execName',
    ];
}
