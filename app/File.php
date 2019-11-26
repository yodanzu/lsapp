<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    // Table Name
    protected $table = 'files';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
