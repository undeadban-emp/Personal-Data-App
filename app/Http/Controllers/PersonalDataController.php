<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;
class PersonalDataController extends Controller
{
    function addPersonalInfo(Request $request)
    {
        $req = $request;
        $personalinformation = new PersonalInformation; 
        $personalinformation->firstname =  $req['firstname'];
        $personalinformation->lastname =  $req['lastname'];
        $personalinformation->birthofdate =  $req['birthofdate'];
        $personalinformation->sex =  $req['sex'];
        $personalinformation->civilstatus =  $req['civilstatus'];
        $personalinformation->heights =  $req['heights'];
        $personalinformation->weight =  $req['weight'];
        $personalinformation->bloodtype =  $req['bloodtype'];
        $personalinformation->gsisidno =  $req['gsisidno'];
        $personalinformation->Pagibig =  $req['Pagibig'];
        $personalinformation->philhealthno =  $req['philhealthno'];
        $personalinformation->sssno =  $req['sssno'];
        $personalinformation->tinno =  $req['tinno'];
        $personalinformation->agencyemployeeno =  $req['agencyemployeeno'];
        $personalinformation->residencial_house_block_lot_no =  $req['residencial_house_block_lot_no'];
        $personalinformation->residencial_street =  $req['residencial_street'];
        $personalinformation->residencial_subdivision_village =  $req['residencial_subdivision_village'];
        $personalinformation->residencial_barangay =  $req['residencial_barangay'];
        $personalinformation->residencial_city_municipality =  $req['residencial_city_municipality'];
        $personalinformation->residencial_province =  $req['residencial_province'];
        $personalinformation->residencial_zipcode =  $req['residencial_zipcode'];
        $personalinformation->permanent_house_block_lot_no_perm =  $req['firstnpermanent_house_block_lot_no_permame'];
        $personalinformation->permanent_street_perm =  $req['permanent_street_perm'];
        $personalinformation->permanent_subdivision_village_perm =  $req['permanent_subdivision_village_perm'];
        $personalinformation->permanent_barangay_perm =  $req['permanent_barangay_perm'];
        $personalinformation->permanent_city_municipality_perm =  $req['permanent_city_municipality_perm'];
        $personalinformation->permanent_province_perm =  $req['permanent_province_perm'];
        $personalinformation->permanent_zipcode_perm =  $req['permanent_zipcode_perm'];
        $personalinformation->telephone_num =  $req['telephone_num'];
        $personalinformation->mobile_num =  $req['mobile_num'];
        $personalinformation->email_add =  $req['email_add'];
        $personalinformation->save();
        return redirect('/add')->with('success',"Added Successfully");

    }
}
