<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krieg extends Model
{
    use HasFactory;
    protected $table = 'krieg';
    protected $fillable = [
        "name", "regionID", "gegnerischesland", "gegnerischerherrscher",
        "nebenbeteiligtesland", "startdatum", "stopdatum", "grund", "ergebnis"
    ];
    public $timestamps = false;

    //hasMany Beziehung
    public function hasBeteiligung()
    {
        return $this->hasMany(Beteiligung::class);
    }

    //belongsTo Beziehung 
    public function region()
    {
        return $this->belongsTo(Region::class, 'regionID', 'id');
    }
}
