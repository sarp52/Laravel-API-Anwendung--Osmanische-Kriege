<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontinent extends Model
{
    use HasFactory;
    protected $table = 'kontinent';
    protected $fillable = ['name'];
    public $timestamps = false;

    //hasMany Beziehung
    public function hasRegion()
    {
        return $this->hasMany(Region::class);
    }
}
