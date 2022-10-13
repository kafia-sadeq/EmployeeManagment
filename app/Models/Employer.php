<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Fonction;
class Employer extends Model
{
    use HasFactory;
    protected $guarded = [];  
    public function fonction(){
        return $this->belongsTo(Fonction::class ,'fonction_id');
    }
}
