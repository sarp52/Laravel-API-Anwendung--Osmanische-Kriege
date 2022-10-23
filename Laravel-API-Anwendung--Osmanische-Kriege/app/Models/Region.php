<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'region';
    protected $fillable = ["name", "kontinentID"];
    public $timestamps = false;

    //belongsTo Beziehung 
    public function kontinent()
    {
        return $this->belongsTo(Kontinent::class, 'kontinentID', 'id');
    }
}
