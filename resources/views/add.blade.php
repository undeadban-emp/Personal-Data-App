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
                                  <form role="form" action="index.html" class="login-box">
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
                                                        <select name="civilstatus" id="inputState" class="form-control">
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
                                                        <input class="form-control" type="text" name="house_block_lot_no" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Street</label>
                                                        <input class="form-control" type="text" name="street" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Subdivision/Village</label>
                                                        <input class="form-control" type="text" name="subdivision_village" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Barangay</label>
                                                        <input class="form-control" type="text" name="barangay" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>City/Municipality</label>
                                                        <input class="form-control" type="text" name="city_municipality" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Province</label>
                                                        <input class="form-control" type="text" name="province" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Zip Code</label>
                                                        <input class="form-control" type="text" name="zipcode" placeholder="" required>
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
                                                            <input class="form-control" type="text" name="house_block_lot_no_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Street</label>
                                                            <input class="form-control" type="text" name="street_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Subdivision/Village</label>
                                                            <input class="form-control" type="text" name="subdivision_village_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Barangay</label>
                                                            <input class="form-control" type="text" name="barangay_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>City/Municipality</label>
                                                            <input class="form-control" type="text" name="city_municipality_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Province</label>
                                                            <input class="form-control" type="text" name="province_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Zip Code</label>
                                                            <input class="form-control" type="text" name="zipcode_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Telephone Number</label>
                                                            <input class="form-control" type="text" name="city_municipality_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Mobile Number</label>
                                                            <input class="form-control" type="text" name="province_perm" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Email Address(if any)</label>
                                                            <input class="form-control" type="text" name="zipcode_perm" placeholder="" required>
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
                                                      <input class="form-control" type="text" name="first_name" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="form-group">
                                                      <label>Middle Name</label>
                                                      <input class="form-control" type="text" name="middle_name" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Name Extension</label>
                                                    <select name="name_extension" id="name_extension" class="form-control">
                                                        <option selected></option>
                                                        <option value="single">Jr.</option>
                                                        <option value="widowed">Sr.</option>
                                                      </select>
                                                </div>
                                            </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label>Occupation</label>
                                                      <input class="form-control" type="text" name="occupation" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Employeer/Business Name</label>
                                                    <input class="form-control" type="text" name="employeer_business_name" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Business Address</label>
                                                    <input class="form-control" type="text" name="occupation" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Telephone Number</label>
                                                  <input class="form-control" type="text" name="employeer_business_name" placeholder="">
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
                                              <select name="name_extension" id="father_name_extension" class="form-control">
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
                                            <input class="form-control" type="text" name="mothers_first_name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label>Date of Birth </label>
                                            <input class="form-control" type="text" name="mothers_first_name" placeholder="">
                                        </div>
                                    </div>
                                             </div>
                                              <ul class="list-inline pull-right">
                                                  <li><button type="button" class="btn btn-secondary default-btn prev-step">Back</button></li>
                                                  <li><button type="button" class="btn btn-warning default-btn next-step skip-btn">Skip</button></li>
                                                  <li><button type="button" class="btn btn-success default-btn next-step">Continue</button></li>
                                              </ul>
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

                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <th>Elementary</th>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">Secondary</th>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">Vocational/Trade Course</th>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">College</th>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                              </tr>
                                                              <tr>
                                                                <th scope="row">Graduate Schools</th>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
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
                                                                <th colspan="2">Place of Examination</th>
                                                                <th rowspan="2">License</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                                <tr>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="date"></td>
                                                                    <td><input class="form-control" type="date"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
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
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
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
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control"  type="text"></td>
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
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control" type="date"></td>
                                                                <td><input class="form-control"  type="text"></td>
                                                                <td><input class="form-control"  type="text"></td>
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
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
                                                                <td><input class="form-control" type="text"></td>
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
                                            <h4 class="text-center">Step 9</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>dasdasdaFirst and Last Name *</label>
                                                        <input class="form-control" type="text" name="name" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
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
