<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = ['bank_code', 'bank_name', 'account_name', 'is_default',];

    public function project()
    {
        return $this->belongsTo(Movie::class);
    }
}
