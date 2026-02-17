<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dompet extends Model
{
    public $table = 'dompet';
    protected $fillable = ['kas', 'created_at', 'updated_at'];
}
