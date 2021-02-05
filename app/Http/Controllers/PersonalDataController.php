<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Child;
use Auth;
use App\Http\Requests\PersonRequest;

class PersonalDataController extends Controller
{
    function addPersonalInfo(PersonRequest $req)
    {
        $validated = $req->validated();
        //pwede da ine na validation pero mas dayaw kun mag gamit ng kaugalinon na validation type php artisan make:request nameofrequest
        // $this->validate($req,[
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'birthofdate' => 'required',
        //     'placeofbirth' => 'required',
        //     'sex' => 'required',
        //     'civilstatus' => 'required',
        //     'heights' => 'required',
        //     'weight' => 'required',
        //     'bloodtype' => 'required',
        //     'gsisidno' => 'required',
        //     'Pagibig' => 'required',
        //     'philhealthno' => 'required',
        //     'sssno' => 'required',
        //     'tinno' => 'required',
        //     'agencyemployeeno' => 'required',
        //     'residencial_house_block_lot_no' => 'required',
        //     'residencial_street' => 'required',
        //     'residencial_subdivision_village' => 'required',
        //     'residencial_barangay' => 'required',
        //     'residencial_city_municipality' => 'required',
        //     'residencial_province' => 'required',
        //     'residencial_zipcode' => 'required',
        //     'permanent_house_block_lot_no_perm' => 'required',
        //     'permanent_street_perm' => 'required',
        //     'permanent_subdivision_village_perm' => 'required',
        //     'permanent_barangay_perm' => 'required',
        //     'permanent_city_municipality_perm' => 'required',
        //     'permanent_province_perm' => 'required',
        //     'permanent_zipcode_perm' => 'required',
        //     'telephone_num' => 'required',
        //     'mobile_num' => 'required',
        //     'email_add' => 'required',
        //     'spouse_name' => 'required',
        //     'spouse_first_name' => 'required',
        //     'spouse_middle_name' => 'required',
        //     'spouse_name_extension' => 'required',
        //     'spouse_occupation' => 'required',
        //     'spouse_employeer_business_name' => 'required',
        //     'spouse_business_address' => 'required',
        //     'spouse_telephone_no' => 'required',
        //     'fathers_surname' => 'required',
        //     'father_first_name' => 'required',
        //     'father_middle_name' => 'required',
        //     'father_name_extension' => 'required',
        //     'mothers_surname' => 'required',
        //     'mothers_first_name' => 'required',
        //     'mothers_middle_name' => 'required',
        //     'children_name' => 'required',
        //     'children_date_of_birth' => 'required'
        // ]);
        //person
        $person = new Person;
        $person->firstname=$req['firstname'];
        $person->lastname=$req['lastname'];
        $person->birthofdate=$req['birthofdate'];
        $person->placeofbirth=$req['placeofbirth'];
        $person->sex=$req['sex'];
        $person->civilstatus=$req['civilstatus'];
        $person->heights=$req['heights'];
        $person->weight=$req['weight'];
        $person->bloodtype=$req['bloodtype'];
        $person->gsisidno=$req['gsisidno'];
        $person->Pagibig=$req['Pagibig'];
        $person->philhealthno=$req['philhealthno'];
        $person->sssno=$req['sssno'];
        $person->tinno=$req['tinno'];
        $person->agencyemployeeno=$req['agencyemployeeno'];
        $person->residencial_house_block_lot_no=$req['residencial_house_block_lot_no'];
        $person->residencial_street=$req['residencial_street'];
        $person->residencial_subdivision_village=$req['residencial_subdivision_village'];
        $person->residencial_barangay=$req['residencial_barangay'];
        $person->residencial_city_municipality=$req['residencial_city_municipality'];
        $person->residencial_province=$req['residencial_province'];
        $person->residencial_zipcode=$req['residencial_zipcode'];
        $person->permanent_house_block_lot_no_perm=$req['permanent_house_block_lot_no_perm'];
        $person->permanent_street_perm=$req['permanent_street_perm'];
        $person->permanent_subdivision_village_perm=$req['permanent_subdivision_village_perm'];
        $person->permanent_barangay_perm=$req['permanent_barangay_perm'];
        $person->permanent_city_municipality_perm=$req['permanent_city_municipality_perm'];
        $person->permanent_province_perm=$req['permanent_province_perm'];
        $person->permanent_zipcode_perm=$req['permanent_zipcode_perm'];
        $person->telephone_num=$req['telephone_num'];
        $person->mobile_num=$req['mobile_num'];
        $person->email_add=$req['email_add'];
        $person->spouse_name=$req['spouse_name'];
        $person->spouse_first_name=$req['spouse_first_name'];
        $person->spouse_middle_name=$req['spouse_middle_name'];
        $person->spouse_name_extension=$req['spouse_name_extension'];
        $person->spouse_occupation=$req['spouse_occupation'];
        $person->spouse_employeer_business_name=$req['spouse_employeer_business_name'];
        $person->spouse_business_address=$req['spouse_business_address'];
        $person->spouse_telephone_no=$req['spouse_telephone_no'];
        $person->fathers_surname=$req['fathers_surname'];
        $person->father_first_name=$req['father_first_name'];
        $person->father_middle_name=$req['father_middle_name'];
        $person->father_name_extension=$req['father_name_extension'];
        $person->mothers_surname=$req['mothers_surname'];
        $person->mothers_first_name=$req['mothers_first_name'];
        $person->mothers_middle_name=$req['mothers_middle_name'];
        $person->save();
        //children
        $children = new Child;
        $children->children_name=$req['children_name'];
        $children->children_date_of_birth=$req['children_date_of_birth'];
        //save the id of the main table to the branch table
        // $person->child()->save($children);//pwede sb ine na method
        //pwede sb ine na method
        $children->person()->associate($person);
        $children->save();
       
        return redirect('/add')->with('success',"Added Successfully");
    }
}
