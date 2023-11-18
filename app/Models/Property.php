<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'propertys';
    protected $primaryKey = 'id';
    protected $fillable = ['tyeppro', 'numpro', 'name','RenTerm', 'amount', 'begcontract','endcontract', 'notes'];
}
