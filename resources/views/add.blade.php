@extends('layouts.main')
@section('content')
<header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Add Person Data</h2>
    </div>
  </header>
  <section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                      <div class="row d-flex justify-content-center">
                          <div class="col-md-12">
                              <div class="wizard">

                                  <div class="wizard-inner">
                                      <div class="connecting-line"></div>
                                      <ul class="nav nav-tabs" role="tablist">
                                          <li role="presentation" class="active">
                                              <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                          </li>
                                          <li role="presentation" class="tablist">
                                              <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                          </li>
                                          <li role="presentation" class="tablist">
                                              <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" aria-expanded="false"><span class="round-tab">3</span> <i>Step 3</i></a>
                                          </li>
                                          <li role="presentation" class="tablist">
                                              <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" aria-expanded="false"><span class="round-tab">4</span> <i>Step 4</i></a>
                                          </li>
                                          <li role="presentation" class="tablist">
                                            <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" aria-expanded="false"><span class="round-tab">5</span> <i>Step 5</i></a>
                                        </li>
                                        <li role="presentation" class="tablist">
                                            <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" aria-expanded="false"><span class="round-tab">6</span> <i>Step 6</i></a>
                                        </li>
                                        <li role="presentation" class="tablist">
                                            <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab" aria-expanded="false"><span class="round-tab">7</span> <i>Step 7</i></a>
                                        </li>
                                        <li role="presentation" class="tablist">
                                            <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab" aria-expanded="false"><span class="round-tab">8</span> <i>Step 8</i></a>
                                        </li>
                                        <li role="presentation" class="tablist">
                                            <a href="#step9" data-toggle="tab" aria-controls="step9" role="tab" aria-expanded="false"><span class="round-tab">9</span> <i>Step 9</i></a>
                                        </li>
                                      </ul>
                                  </div>
                                  <form action="/add" method="post" class="login-box">
                                      @csrf
                                      <div class="tab-content" id="main_form">
                                          <div class="tab-pane active" role="tabpanel" id="step1">
                                              <h4 class="text-center">Personal Information</h4>
                                              <div class="row">
                                                  <div class="col-md-3">
                                                      <div class="form-group">
                                                          <label>Surname:</label>
                                                          <input class="form-control" type="text" name="surname" placeholder="" required>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>First Name:</label>
                                                        <input class="form-control" type="text" name="firstname" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Last Name:</label>
                                                        <input class="form-control" type="text" name="lastname" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Birth of Date:</label>
                                                        <input class="form-control" type="date" name="birthofdate" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Place of Birth:</label>
                                                        <input class="form-control" type="text" name="placeofbirth" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Sex:</label>
                                                        <select name="sex" id="inputState" class="form-control">
                                                          <option selected></option>
                                                          <option value="male">Male</option>
                                                          <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Civil Status:</label>
                                                        <select name="civilstatus" id="inputState" class="form-control">
                                                          <option selected></option>
                                                          <option value="single">Single</option>
                                                          <option value="widowed">Widowed</option>
                                                          <option value="married">Married</option>
                                                          <option value="separated">Separated</option>
                                                          <option value="others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Height:</label>
                                                        <select name="heights" id="inputState" class="form-control">
                                                            <option selected></option>
                                                            <option value="single">4' 6"</option>
                                                            <option value="widowed">4' 7"</option>
                                                            <option value="4' 8">4' 8"</option>
                                                            <option value="4' 9">4' 9"</option>
                                                            <option value="4' 10">4' 11"</option>
                                                            <option value="5' 1">5' 1"</option>
                                                            <option value="5' 2">5' 2"</option>
                                                            <option value="5' 3">5' 3"</option>
                                                            <option value="5' 4">5' 4"</option>
                                                            <option value="5' 5">5' 5"</option>
                                                            <option value="5' 6">5' 6"</option>
                                                            <option value="5' 7">5' 7"</option>
                                                            <option value="5' 8">5' 8"</option>
                                                            <option value="5' 9">5' 9"</option>
                                                            <option value="5' 10">5' 10"</option>
                                                            <option value="5' 11">5' 11"</option>
                                                            <option value="6' 1">6' 1"</option>
                                                            <option value="6' 2">6' 2"</option>
                                                            <option value="6' 3">6' 3"</option>
                                                            <option value="6' 4">6' 4"</option>
                                                            <option value="6' 5">6' 5"</option>
                                                            <option value="6' 6">6' 6"</option>
                                                            <option value="6' 7">6' 7"</option>
                                                            <option value="6' 8">6' 8"</option>
                                                            <option value="6' 9">6' 9"</option>
                                                            <option value="6' 10">6' 10"</option>
                                                            <option value="6' 11">6' 11"</option>
                                                            <option value="7' 1">7' 1"</option>
                                                            <option value="7' 2">7' 2"</option>
                                                            <option value="7' 3">7' 3"</option>
                                                            <option value="7' 4">7' 4"</option>
                                                            <option value="7' 5">7' 5"</option>
                                                            <option value="7' 6">7' 6"</option>
                                                            <option value="7' 7">7' 7"</option>
                                                            <option value="7' 8">7' 8"</option>
                                                            <option value="7' 9">7' 9"</option>
                                                            <option value="7' 10">7' 10"</option>
                                                            <option value="7' 11">7' 11"</option>
                                                          </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Weight:</label>
                                                        <input class="form-control" type="text" name="weight" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Blood Type:</label>
                                                        <input class="form-control" type="text" name="bloodtype" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>GSIS ID No:</label>
                                                        <input class="form-control" type="text" name="gsisidno" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Pag-ibig:</label>
                                                        <input class="form-control" type="text" name="Pagibig" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Philhealth No:</label>
                                                        <input class="form-control" type="text" name="philhealthno" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>SSS No:</label>
                                                        <input class="form-control" type="text" name="sssno" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Tin No:</label>
                                                        <input class="form-control" type="text" name="tinno" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Agency Employee No.:</label>
                                                        <input class="form-control" type="text" name="agencyemployeeno" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                <h5>Residencial Address:</h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                         <label>House/Block/Lot No.</label>
                                                        <input class="form-control" type="text" name="residencial_house_block_lot_no" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Street</label>
                                                        <input class="form-control" type="text" name="residencial_street" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Subdivision/Village</label>
                                                        <input class="form-control" type="text" name="residencial_subdivision_village" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Barangay</label>
                                                        <input class="form-control" type="text" name="residencial_barangay" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>City/Municipality</label>
                                                        <input class="form-control" type="text" name="residencial_city_municipality" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Province</label>
                                                        <input class="form-control" type="text" name="residencial_province" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Zip Code</label>
                                                        <input class="form-control" type="text" name="residencial_zipcode" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-12">
                                                    <h5>Permanent Address:</h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                             <label>House/Block/Lot No.</label>
                                                            <input class="form-control" type="text" name="permanent_house_block_lot_no_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Street</label>
                                                            <input class="form-control" type="text" name="permanent_street_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Subdivision/Village</label>
                                                            <input class="form-control" type="text" name="permanent_subdivision_village_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Barangay</label>
                                                            <input class="form-control" type="text" name="permanent_barangay_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>City/Municipality</label>
                                                            <input class="form-control" type="text" name="permanent_city_municipality_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Province</label>
                                                            <input class="form-control" type="text" name="permanent_province_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Zip Code</label>
                                                            <input class="form-control" type="text" name="permanent_zipcode_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Telephone Number</label>
                                                            <input class="form-control" type="text" name="telephone_num" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Mobile Number</label>
                                                            <input class="form-control" type="text" name="mobile_num" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Email Address(if any)</label>
                                                            <input class="form-control" type="text" name="email_add" placeholder="" required>
                                                        </div>
                                                    </div>
                                              </div>
                                              <ul class="list-inline pull-right">
                                                  <li><button type="button" class="btn btn-success default-btn next-step">Continue to next step</button></li>
                                              </ul>

                                          </div>
                                          <div class="tab-pane" role="tabpanel" id="step2">
                                              <h4 class="text-center">Family Background</h4>
                                              <div class="row">
                                              <div class="col-md-3">
                                                  <div class="form-group">
                                                      <label>Spouse's Surname</label>
                                                      <input class="form-control" type="text" name="spouse_name" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="form-group">
                                                      <label>First Name</label>
                                                      <input class="form-control" type="text" name="spouse_first_name" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="form-group">
                                                      <label>Middle Name</label>
                                                      <input class="form-control" type="text" name="spouse_middle_name" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Name Extension</label>
                                                    <select name="spouse_name_extension" id="spouse_name_extension" class="form-control">
                                                        <option selected></option>
                                                        <option value="single">Jr.</option>
                                                        <option value="widowed">Sr.</option>
                                                      </select>
                                                </div>
                                            </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label>Occupation</label>
                                                      <input class="form-control" type="text" name="spouse_occupation" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Employeer/Business Name</label>
                                                    <input class="form-control" type="text" name="spouse_employeer_business_name" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Business Address</label>
                                                    <input class="form-control" type="text" name="spouse_business_address" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Telephone Number</label>
                                                  <input class="form-control" type="text" name="spouse_telephone_no" placeholder="">
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Father's Surname</label>
                                                <input class="form-control" type="text" name="fathers_surname" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input class="form-control" type="text" name="father_first_name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Middle Name</label>
                                                <input class="form-control" type="text" name="father_middle_name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group">
                                              <label>Name Extension</label>
                                              <select name="father_name_extension" id="father_name_extension" class="form-control">
                                                  <option selected></option>
                                                  <option value="single">Jr.</option>
                                                  <option value="widowed">Sr.</option>
                                                </select>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                            <h5>Mother's Maiden Name:</h5>
                                    </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Surname</label>
                                            <input class="form-control" type="text" name="mothers_surname" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label>First Name</label>
                                            <input class="form-control" type="text" name="mothers_first_name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" type="text" name="mothers_middle_name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label>Name of Children(Write full name and list all)</label>
                                            <input class="form-control" type="text" name="children_name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label>Date of Birth </label>
                                            <input class="form-control" type="date" name="children_date_of_birth" placeholder="">
                                        </div>
                                    </div>
                                             </div>
                                             <ul class="list-inline pull-right">
                                                <li><button type="submit" class="btn btn-success">add</button></li>
                                            </ul>
                                              {{-- <ul class="list-inline pull-right">
                                                  <li><button type="button" class="btn btn-secondary default-btn prev-step">Back</button></li>
                                                  <li><button type="button" class="btn btn-warning default-btn next-step skip-btn">Skip</button></li>
                                                  <li><button type="button" class="btn btn-success default-btn next-step">Continue</button></li>
                                              </ul> --}}
                                          </div>
                                          <div class="tab-pane" role="tabpanel" id="step3">
                                            <h4 class="text-center">Educational Background</h4>
                                            <div class="row">
                                                <div style="overflow-x:auto;" class="col-md-12">
                                                    <table  class="table">
                                                        <thead>
                                                          <tr>
                                                            <th rowspan="2">Level</th>
                                                            <th rowspan="2">Name of School</th>
                                                            <th rowspan="2">Basic Education/Degree/Course</th>
                                                            <th colspan="2">Period of Attendance</th>
                                                            <th rowspan="2">Highest Level/Units Earned</th>
                                                            <th rowspan="2">Year Graduated</th>
                                                            <th rowspan="2">Scholarship/Academic Honors Received</th>
                                                          </tr>
                                                          <tr>
                                                              <th>From</th>
                                                              <th>To</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>Elementary</th>
                                                                <td><input name="elem_name" class="form-control" type="text"></td>
                                                                <td><input name="elem_basic_educ" class="form-control" type="text"></td>
                                                                <td><input name="elem_date_from" class="form-control" type="date"></td>
                                                                <td><input name="elem_date_to" class="form-control" type="date"></td>
                                                                <td><input name="elem_level_units" class="form-control" type="text"></td>
                                                                <td><input name="elem_year_grad" class="form-control" type="text"></td>
                                                                <td><input name="elem_scholarship" class="form-control" type="text"></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">Secondary</th>
                                                                <td><input name="secondary_name" class="form-control" type="text"></td>
                                                                <td><input name="secondary_basic_educ" class="form-control" type="text"></td>
                                                                <td><input name="secondary_date_from" class="form-control" type="date"></td>
                                                                <td><input name="secondary_date_to" class="form-control" type="date"></td>
                                                                <td><input name="secondary_level_units" class="form-control" type="text"></td>
                                                                <td><input name="secondary_year_grad" class="form-control" type="text"></td>
                                                                <td><input name="secondary_scholarship" class="form-control" type="text"></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">Vocational/Trade Course</th>
                                                                <td><input name="vocational_name" class="form-control" type="text"></td>
                                                                <td><input name="vocational_basic_educ" class="form-control" type="text"></td>
                                                                <td><input name="vocational_date_from" class="form-control" type="date"></td>
                                                                <td><input name="vocational_date_to" class="form-control" type="date"></td>
                                                                <td><input name="vocational_level_units" class="form-control" type="text"></td>
                                                                <td><input name="vocational_year_grad" class="form-control" type="text"></td>
                                                                <td><input name="vocational_scholarship" class="form-control" type="text"></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">College</th>
                                                                <td><input name="college_name" class="form-control" type="text"></td>
                                                                <td><input name="college_basic_educ" class="form-control" type="text"></td>
                                                                <td><input name="college_date_from" class="form-control" type="date"></td>
                                                                <td><input name="college_date_to" class="form-control" type="date"></td>
                                                                <td><input name="college_level_units" class="form-control" type="text"></td>
                                                                <td><input name="college_year_grad" class="form-control" type="text"></td>
                                                                <td><input name="college_scholarship" class="form-control" type="text"></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">Graduate Schools</th>
                                                                <td><input name="graudate_schools_name" class="form-control" type="text"></td>
                                                                <td><input name="graudate_schools_basic_educ" class="form-control" type="text"></td>
                                                                <td><input name="graudate_schools_date_from" class="form-control" type="date"></td>
                                                                <td><input name="graudate_schools_date_to" class="form-control" type="date"></td>
                                                                <td><input name="graudate_schools_level_units" class="form-control" type="text"></td>
                                                                <td><input name="graudate_schools_year_grad" class="form-control" type="text"></td>
                                                                <td><input name="graudate_schools_scholarship" class="form-control" type="text"></td>
                                                              </tr>
                                                        </tbody>
                                                      </table>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-secondary default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="btn btn-warning default-btn next-step skip-btn">Skip</button></li>
                                                <li><button type="button" class="btn btn-success default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step4">
                                            <h4 class="text-center">Civil Service Eligibility</h4>
                                                <div class="row">
                                                    <div style="overflow-x:auto;" class="col-md-12">
                                                        <table  class="table">
                                                            <thead>
                                                            <tr>
                                                                <th rowspan="2">Career Service</th>
                                                                <th rowspan="2">Rating </th>
                                                                <th rowspan="2">Date of Examination</th>
                                                                <th rowspan="2">Place of Examination</th>
                                                                <th colspan="2">License</th>
                                                            </tr>
                                                        <tr>
                                                            <th>Number</th>
                                                            <th>Date of Validity</th>
                                                        </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><input name="cse_career_service" class="form-control" type="text"></td>
                                                                    <td><input name="cse_rating" class="form-control" type="text"></td>
                                                                    <td><input name="cse_date_examination" class="form-control" type="date"></td>
                                                                    <td><input name="cse_place_examination" class="form-control" type="date"></td>
                                                                    <td><input name="cse_license_number" class="form-control" type="text"></td>
                                                                    <td><input name="cse_license_validity" class="form-control" type="text"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-secondary default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="btn btn-warning default-btn next-step skip-btn">Skip</button></li>
                                                <li><button type="button" class="btn btn-success default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step5">
                                            <h4 class="text-center">Work Experience</h4>
                                            <div class="row">
                                                <div style="overflow-x:auto;" class="col-md-12">
                                                    <table  class="table">
                                                        <thead>
                                                          <tr>
                                                            <th colspan="2">Inclusive Dates</th>
                                                            <th rowspan="2">Position Title </th>
                                                            <th rowspan="2">Department/Agency/Office</th>
                                                            <th rowspan="2">Monthly Salary</th>
                                                            <th rowspan="2">Salary/Job</th>
                                                            <th rowspan="2">Status of Appointment</th>
                                                            <th rowspan="2">Gov't Service(Y/N)</th>
                                                          </tr>
                                                          <tr>
                                                             <th>From</th>
                                                             <th>To</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input name="work_date_from" class="form-control" type="date"></td>
                                                                <td><input name="work_date_to" class="form-control" type="date"></td>
                                                                <td><input name="work_position_title" class="form-control" type="text"></td>
                                                                <td><input name="work_department" class="form-control" type="text"></td>
                                                                <td><input name="work_monthly_salary" class="form-control" type="text"></td>
                                                                <td><input name="work_salary_job" class="form-control" type="text"></td>
                                                                <td><input name="work_status_appoinment" class="form-control" type="text"></td>
                                                                <td><input name="work_gov_service" class="form-control" type="text"></td>
                                                              </tr>
                                                        </tbody>
                                                      </table>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-secondary default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="btn btn-warning default-btn next-step skip-btn">Skip</button></li>
                                                <li><button type="button" class="btn btn-success default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step6">
                                            <h4 class="text-center">Voluntary Work or Involvement in Civic / Non government / People / Voluntary Organization</h4>
                                            <div class="row">
                                                <div style="overflow-x:auto;" class="col-md-12">
                                                    <table  class="table">
                                                        <thead>
                                                          <tr>
                                                            <th rowspan="2">Name & Address of Organization</th>
                                                            <th colspan="2">Inclusive Dates </th>
                                                            <th rowspan="2">Number of Hours</th>
                                                            <th rowspan="2">Position/Nature of Work</th>
                                                          </tr>
                                                          <tr>
                                                              <th>From</th>
                                                              <th>To</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input name="voluntary_name_org" class="form-control" type="text"></td>
                                                                <td><input name="voluntary_dates_to" class="form-control" type="date"></td>
                                                                <td><input name="voluntary_dates_from" class="form-control" type="date"></td>
                                                                <td><input name="voluntary_number_hours" class="form-control" type="text"></td>
                                                                <td><input name="voluntary_position_work" class="form-control"  type="text"></td>
                                                              </tr>
                                                        </tbody>
                                                      </table>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-secondary default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="btn btn-warning default-btn next-step skip-btn">Skip</button></li>
                                                <li><button type="button" class="btn btn-success default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step7">
                                            <h4 class="text-center">LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h4>
                                            <div class="row">
                                                <div style="overflow-x:auto;" class="col-md-12">
                                                    <table  class="table">
                                                        <thead>
                                                          <tr>
                                                            <th rowspan="2">TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS</th>
                                                            <th colspan="2">INCLUSIVE DATES OF ATTENDANCE  </th>
                                                            <th rowspan="2">Type of LD
                                                                ( Managerial/ Supervisory/
                                                               Technical/etc) </th>
                                                            <th rowspan="2"> CONDUCTED/ SPONSORED </th>
                                                          </tr>
                                                          <tr>
                                                              <th>From</th>
                                                              <th>To</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input name="learning_title_of_learning" class="form-control" type="text"></td>
                                                                <td><input name="learning_dates_from" class="form-control" type="date"></td>
                                                                <td><input name="learning_dates_to" class="form-control" type="date"></td>
                                                                <td><input name="learning_type" class="form-control"  type="text"></td>
                                                                <td><input name="learning_conducted" class="form-control"  type="text"></td>
                                                              </tr>
                                                        </tbody>
                                                      </table>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-secondary default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="btn btn-warning default-btn next-step skip-btn">Skip</button></li>
                                                <li><button type="button" class="btn btn-success default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step8">
                                            <h4 class="text-center">OTHER INFORMATION</h4>
                                            <div class="row">
                                                <div style="overflow-x:auto;" class="col-md-12">
                                                    <table  class="table">
                                                        <thead>
                                                          <tr>
                                                            <th rowspan="2">SPECIAL SKILLS and HOBBIES</th>
                                                            <th rowspan="2">NON-ACADEMIC DISTINCTIONS / RECOGNITION    </th>
                                                            <th rowspan="2"> MEMBERSHIP IN ASSOCIATION/ORGANIZATION</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input name="other_info_special_skills" class="form-control" type="text"></td>
                                                                <td><input name="other_info_non_academic" class="form-control" type="text"></td>
                                                                <td><input name="other_info_membership" class="form-control" type="text"></td>
                                                              </tr>
                                                        </tbody>
                                                      </table>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-secondary default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="btn btn-warning default-btn next-step skip-btn">Skip</button></li>
                                                <li><button type="button" class="btn btn-success default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step9">
                                            <h4 class="text-center">Other Information</h4>
                                            <div class="row">
                                                <div class="col-md-12 border border-primary p-2 text-justify" >
                                                    <p>Are you related by consanguinity or affinity to the appointing or recommending authority, or to the chief of bureau or office or to the person who has immediate supervision over you in the Office, Bureau or Department where you will be apppointed,<br></p>

                                                    <p><b>a. within the third degree?</b>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br>
                                                    </p>
                                                    <p>
                                                        <b>b.  within the fourth degree (for Local Government Unit - Career Employees)?</b><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br><br>
                                                      <div class="form-check form-check-inline">
                                                       <p>If Yes, give details:
                                                        <input type="text" class="form-control">
                                                       </p>
                                                      </div>
                                                    </p>
                                                </div>
                                                <div class="col-md-12 border border-primary p-2 text-justify" >
                                                    <p><b>a. Have you ever been found guilty of any administrative offense?</b><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br>
                                                    </p>
                                                    <div class="form-check form-check-inline">
                                                        <p>If Yes, give details:
                                                         <input type="text" class="form-control">
                                                        </p>
                                                       </div>
                                                    <p>
                                                      <b> B. Have you been criminally charged before any court?</b><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br>
                                                    </p>
                                                    <div class="form-check form-check-inline">
                                                        <p>If Yes, give details:</p>
                                                       </div><br>
                                                       <div class="form-check form-check-inline">
                                                       <p>Date filed:<input type="text" class="form-control"><br></p>
                                                       </div><br>
                                                       <div class="form-check form-check-inline">
                                                        <p>Status of Cases:<input type="text" class="form-control"><br></p>
                                                        </div>
                                                </div>
                                                <div class="col-md-12 border border-primary p-2 text-justify" >
                                                    <p><b>Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</b><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br>
                                                    </p>
                                                    <div class="form-check form-check-inline">
                                                        <p>If Yes, give details:
                                                         <input type="text" class="form-control">
                                                        </p>
                                                       </div>
                                                </div>
                                                <div class="col-md-12 border border-primary p-2 text-justify" >
                                                    <p><b>Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?</b><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br>
                                                      <div class="form-check form-check-inline">
                                                        <p>If Yes, give details:
                                                         <input type="text" class="form-control">
                                                        </p>
                                                       </div>
                                                    </p>
                                                </div>
                                                <div class="col-md-12 border border-primary p-2 text-justify" >
                                                    <p><b>a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</b><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br>
                                                      <div class="form-check form-check-inline">
                                                        <p>If Yes, give details:
                                                         <input type="text" class="form-control">
                                                        </p>
                                                       </div>
                                                    </p>
                                                    <p><b>b. Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate?</b><br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                                          </div><br>
                                                        </p>
                                                    <div class="form-check form-check-inline">
                                                        <p>If Yes, give details:
                                                         <input type="text" class="form-control">
                                                        </p>
                                                       </div>
                                                </div>
                                                <div class="col-md-12 border border-primary p-2 text-justify" >
                                                    <p><b>Have you acquired the status of an immigrant or permanent resident of another country?</b><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br>
                                                    </p>
                                                    <div class="form-check form-check-inline">
                                                        <p>If Yes, give details:
                                                         <input type="text" class="form-control">
                                                        </p>
                                                       </div>
                                                </div>
                                                <div class="col-md-12 border border-primary p-2 text-justify" >
                                                    <p>Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:</p>
                                                    <p><b>A. Are you a member of any indigenous group?</b><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                                      </div><br>
                                                      <div class="form-check form-check-inline">
                                                        <p>If Yes, give details:
                                                         <input type="text" class="form-control">
                                                        </p>
                                                       </div>
                                                    </p>
                                                    <p><b>B. Are you a person with disability?</b><br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                                          </div><br>
                                                          <div class="form-check form-check-inline">
                                                            <p>If Yes, give details:
                                                             <input type="text" class="form-control">
                                                            </p>
                                                           </div>
                                                        </p>
                                                        <p><b>C. Are you a solo parent?</b><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                              </div><br>
                                                               <div class="form-check form-check-inline">
                                                        <p>If Yes, give details:
                                                         <input type="text" class="form-control">
                                                        </p>
                                                       </div>
                                                            </p>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class=" default-btn btn btn-success">Save</button></li>
                                            </ul>
                                        </div>
                                          <div class="clearfix"></div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
              </div>
    </div>
  </section>
  @endsection
