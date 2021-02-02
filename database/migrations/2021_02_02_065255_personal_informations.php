<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PersonalInformations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthofdate');
            $table->string('placeofbirth');
            $table->string('sex');
            $table->string('civilstatus');
            $table->string('heights');
            $table->string('weight');
            $table->string('bloodtype');
            $table->string('gsisidno');
            $table->string('Pagibig');
            $table->string('philhealthno');
            $table->string('sssno');
            $table->string('tinno');
            $table->string('agencyemployeeno');
            $table->string('residencial_house_block_lot_no');
            $table->string('residencial_street');
            $table->string('residencial_subdivision_village');
            $table->string('residencial_barangay');
            $table->string('residencial_city_municipality');
            $table->string('residencial_province');
            $table->string('residencial_zipcode');


            $table->string('permanent_house_block_lot_no_perm');
            $table->string('permanent_street_perm');
            $table->string('permanent_subdivision_village_perm');
            $table->string('permanent_barangay_perm');
            $table->string('permanent_city_municipality_perm');
            $table->string('permanent_province_perm');
            $table->string('permanent_zipcode_perm');
            $table->string('telephone_num');
            $table->string('mobile_num');
            $table->string('email_add');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
