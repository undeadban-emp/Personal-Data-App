<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Child;
use Auth;

class PersonalDataController extends Controller
{
    function addPersonalInfo(Request $req)
    {
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
