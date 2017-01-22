<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'contact',
        'birthday',
        'gender',
        'birthplace',
        'home_address',
        'permanent_address',
        'religion',
        'date_of_hire',
        'date_of_regular',
        'name_of_mother',
        'name_of_father',
        'contact_person',
        'contact_person_number',
        'wage',
        'note',
        'memo',
    ];

    public function files() {
        return $this->hasMany('App\File');
    }
}
