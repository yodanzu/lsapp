<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sched extends Model
{
    // Table Name
    protected $table = 'scheds';
    // Primary Key
    public $primarykey = 'id';
    // Timestamp
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
