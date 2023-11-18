<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mostafed extends Model
{
    
    use HasFactory;
    protected $table ='mostafeds';
    protected $primaryKey = 'id';
    protected $fillable = ['Beneficiary', 'Mother', 'obstetrics','repa', 'piece', 'boycott','space', 'Customization', 'Municipal', 'slide', 'address', 'notes'];
    public function collection() 
    { 
        return mostafed::select('Beneficiary', 'Mother', 'obstetrics','repa', 'piece', 'boycott','space', 'Customization', 'Municipal', 'slide', 'address', 'notes')->get(); 
    }
}

