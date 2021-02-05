<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = array('firstname', 'lastname', 'birthofdate', 'placeofbirth', 'sex', 'civilstatus', 'heights', 'weight', 'bloodtype', 'gsisidno', 'Pagibig', 'philhealthno', 'sssno', 'tinno', 'agencyemployeeno', 'residencial_house_block_lot_no', 'residencial_street', 'residencial_subdivision_village', 'residencial_barangay', 'residencial_city_municipality',  'residencial_province', 'residencial_zipcode', 'firstnpuse_block_lot_no_permame', 'permanent_street_perm', 'permaneion_village_perm', 'permanent_barangay_perm', 'permanent_city_municipality_perm', 'permanent_province_perm', 'permanent_zipcode_perm', 'telephone_num', 'mobile_num', 'email_add');
    public function children()
    {
        return $this->hasMany('App/Child');
    }
}
