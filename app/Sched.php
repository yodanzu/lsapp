<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Sched extends Eloquent
   
{
    // Table Name
    protected $table = 'scheds';
    // Primary Key
    public $primarykey = 'id';
    // Timestamp
    // public $timestamps = true;
    // public $slot_code;
    // public $start_date;
    // public $end_date;
    // public $room_id;
    // public $instructor_id;

    public function getSlotCode(){
        return $this->attribute['slot_code'];
    }

    public function setSlotCode($value){
        $this->attribute['slot_code'] = $value;
    }

    public function getStartDate(){
        return $this->attribute['start_date'];
    }

    public function setStartDate($value){
        $this->attribute['start_date'] = $value;
    }

    public function getEndDate(){
        return $this->attribute['end_date'];
    }

    public function setEndDate($value){
        $this->attribute['end_date'] = $value;
    }

    public function getRoomId(){
        return $this->attribute['room_id'];
    }

    public function setRoomId($value){
        $this->attribute['room_id'] = $value;
    }

    public function getInstructorId(){
        return $this->attribute['instructor_id'];
    }

    public function setInstructorId($value){
        $this->attribute['instructor_id'] = $value;
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
