<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Post extends Model implements AuditableContract
{
    use Auditable;
    
    protected $table = 'posts';  //Tabulas nosaukums

    public $primaryKey = 'id';  // Tabulas id

    public $timestamp = true; // Laiks

    public function user(){
        return $this->belongsTo('App\User'); // Norada kurs user ir kuru post uztasijis
    }
}
