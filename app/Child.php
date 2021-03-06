<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = array('person_id', 'children_name', 'children_date_of_birth');
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
