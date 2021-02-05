<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'birthofdate' => 'required',
            'placeofbirth' => 'required',
            'sex' => 'required',
            'civilstatus' => 'required',
            'heights' => 'required',
            'weight' => 'required',
            'bloodtype' => 'required',
            'gsisidno' => 'required',
            'Pagibig' => 'required',
            'philhealthno' => 'required',
            'sssno' => 'required',
            'tinno' => 'required',
            'agencyemployeeno' => 'required',
            'residencial_house_block_lot_no' => 'required',
            'residencial_street' => 'required',
            'residencial_subdivision_village' => 'required',
            'residencial_barangay' => 'required',
            'residencial_city_municipality' => 'required',
            'residencial_province' => 'required',
            'residencial_zipcode' => 'required',
            'permanent_house_block_lot_no_perm' => 'required',
            'permanent_street_perm' => 'required',
            'permanent_subdivision_village_perm' => 'required',
            'permanent_barangay_perm' => 'required',
            'permanent_city_municipality_perm' => 'required',
            'permanent_province_perm' => 'required',
            'permanent_zipcode_perm' => 'required',
            'telephone_num' => 'required',
            'mobile_num' => 'required',
            'email_add' => 'required',
            'spouse_name' => 'required',
            'spouse_first_name' => 'required',
            'spouse_middle_name' => 'required',
            'spouse_name_extension' => 'required',
            'spouse_occupation' => 'required',
            'spouse_employeer_business_name' => 'required',
            'spouse_business_address' => 'required',
            'spouse_telephone_no' => 'required',
            'fathers_surname' => 'required',
            'father_first_name' => 'required',
            'father_middle_name' => 'required',
            'father_name_extension' => 'required',
            'mothers_surname' => 'required',
            'mothers_first_name' => 'required',
            'mothers_middle_name' => 'required',
            'children_name' => 'required',
            'children_date_of_birth' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'firstname.required' => 'First Name required',
            'lastname.required' => 'Lastname required',
            'birthofdate.required' => 'Birth of Date required',
            'placeofbirth.required' => 'Place of Birth required',
            'sex.required' => 'Sex required',
            'civilstatus.required' => 'Civil Status required',
            'heights.required' => 'Heights required',
            'weight.required' => 'Weight required',
            'bloodtype.required' => 'Bloodtype required',
            'gsisidno.required' => 'Gsis Id No required',
            'Pagibig.required' => ' Pagibig required',
            'philhealthno.required' => 'Phil Health No required',
            'sssno.required' => 'SSS No required',
            'tinno.required' => 'Tin no required',
            'agencyemployeeno.required' => 'Agency Employee No required',
            'residencial_house_block_lot_no.required' => 'Residencial House Block Lot No required',
            'residencial_street.required' => 'Residencial Street required',
            'residencial_subdivision_village.required' => 'Residencial Subdivision Village required',
            'residencial_barangay.required' => 'Residencial Barangay required',
            'residencial_city_municipality.required' => 'Residencial City Municipality required',
            'residencial_province.required' => 'Residencial Province required',
            'residencial_zipcode.required' => 'Residencial Zipcode required',
            'permanent_house_block_lot_no_perm.required' => 'Permanent House Block Lot No required',
            'permanent_street_perm.required' => 'Permanent Street required',
            'permanent_subdivision_village_perm.required' => 'Permanent Subdivision Village required',
            'permanent_barangay_perm.required' => 'Permanent Barangay required',
            'permanent_city_municipality_perm.required' => 'Permanent City Municipality required',
            'permanent_province_perm.required' => ' Province required',
            'permanent_zipcode_perm.required' => 'Zipcode required',
            'telephone_num.required' => 'Telephone Num required',
            'mobile_num.required' => 'Mobile Num required',
            'email_add.required' => 'Email Add required',
            'spouse_name.required' => 'Spouse Name required',
            'spouse_first_name.required' => 'Spouse First Name required',
            'spouse_middle_name.required' => 'Spouse Middle Name required',
            'spouse_name_extension.required' => 'Extension required',
            'spouse_occupation.required' => 'Spouse Occupation required',
            'spouse_employeer_business_name.required' => 'Employeer Business Name required',
            'spouse_business_address.required' => 'Business Address required',
            'spouse_telephone_no.required' => 'Telephone No required',
            'fathers_surname.required' => 'Father Surname required',
            'father_first_name.required' => 'Father First Name required',
            'father_middle_name.required' => 'Father Middle Name required',
            'father_name_extension.required' => 'Father Name Extension required',
            'mothers_surname.required' => 'Mothers Surname required',
            'mothers_first_name.required' => 'Mothers First Name required',
            'mothers_middle_name.required' => 'Mothers Middle Name required',
            'children_name.required' => 'Children Name required',
            'children_date_of_birth.required' => 'Children Date Of Birth required'
        ];
    }
}
