<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herrschaftbereich extends Model
{
    use HasFactory;
    protected $table = 'herrschaftbereich';
    protected $fillable = ["regionID", "herrscherID", "startdatum", "endedatum"];
    public $timestamps = false;

    //belongsTo Beziehung 
    public function herrscher()
    {
        return $this->belongsTo(Herrscher::class, 'herrscherID', 'id');
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'regionID', 'id');
    }
}
