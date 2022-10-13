<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Employer;

class Fonction extends Model
{
    use HasFactory;
    protected $guarded = [];  
    public function employers(){
        return $this->hasMany(Employer::class, 'fonction_id');
    }
}
