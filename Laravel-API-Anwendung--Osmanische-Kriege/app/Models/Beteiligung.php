<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beteiligung extends Model
{
    use HasFactory;
    protected $table = 'beteiligung';
    protected $fillable = ["herrscherID", "kriegID", "startdatum", "stopdatum", "beteiligungsgrund", "ist_beginner", "ist_nebenbeteiliger"];
    public $timestamps = false;

    //belongsTo Beziehung 
    public function herrscher()
    {
        return $this->belongsTo(Herrscher::class, 'herrscherID', 'id');
    }
    public function krieg()
    {
        return $this->belongsTo(Krieg::class, 'kriegID', 'id');
    }
}
