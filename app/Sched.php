<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sched extends Model
{
    // Table Name
    protected $table = 'scheds';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamps = true;
    // public $slot_code;
    // public $start_date;
    // public $end_date;
    // public $room_id;
    // public $instructor_id;

    public function getSlotCode(){
        return $this->attribute['slotCode'];
    }

    public function setSlotCode($value){
        $this->attribute['slotCode'] = $value;
    }

    public function getStartDate(){
        return $this->attribute['startDate'];
    }

    public function setStartDate($value){
        $this->attribute['startDate'] = $value;
    }

    public function getEndDate(){
        return $this->attribute['endDate'];
    }

    public function setEndDate($value){
        $this->attribute['endDate'] = $value;
    }

    public function getRoomId(){
        return $this->attribute['roomId'];
    }

    public function setRoomId($value){
        $this->attribute['roomId'] = $value;
    }

    public function getInstructorId(){
        return $this->attribute['instructorId'];
    }

    public function setInstructorId($value){
        $this->attribute['instructorId'] = $value;
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
