<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herrscher extends Model
{
    use HasFactory;
    protected $table = 'herrscher';
    protected $fillable = ["name", "geburtsdatum", "sterbedatum"];
    public $timestamps = false;

    //hasMany Beziehung
    public function hasBeteiligung()
    {
        return $this->hasMany(Beteiligung::class);
    }
    public function hasHerrschaftbereich()
    {
        return $this->hasMany(Herrschaftbereich::class);
    }
}
