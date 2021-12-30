<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;
    protected $table = 'loans';
    protected $fillable = [
        'id',
        'loanId',
        'loadCust',
        'loanAmount',
        'loanStatus',
    ];
}
