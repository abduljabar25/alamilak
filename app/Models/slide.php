<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    use HasFactory;
    protected $table = 'slides';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'Mother', 'wife','slide', 'Datereceipt', 'transaction','notes'];
}
