<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\meet_people;
class MeetModel extends Model
{
    public $timestamps = false;

    public function recorded(){
        return meet_people::all()->where('meet_model_id', '=', $this->id)->count() ;
    }
}
