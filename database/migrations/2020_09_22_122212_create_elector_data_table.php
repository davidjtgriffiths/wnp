<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectorDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elector_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('elector_id');
            $table->string('pd_e', 20)->nullable();
            $table->string('Do_Not_Contact', 20)->nullable();
            $table->string('Do_Not_Process', 20)->nullable();
            $table->string('PDCode', 20)->nullable();
            $table->string('E_Number', 20)->nullable();
            $table->string('Forename', 20)->nullable();
            $table->string('Surname', 20)->nullable();
            $table->string('Housename', 20)->nullable();
            $table->string('Address1', 20)->nullable();
            $table->string('StreetArea', 20)->nullable();
            $table->string('Town', 20)->nullable();
            $table->string('County', 20)->nullable();
            $table->string('Postcode', 20)->nullable();
            $table->string('Telephone', 20)->nullable();
            $table->string('Email', 20)->nullable();
            $table->string('Mobile', 20)->nullable();
            $table->string('Gender', 20)->nullable();
            $table->string('Constitutional_Preference', 20)->nullable();
            $table->string('Strength_of_Support', 20)->nullable();
            $table->string('Party_LPC', 20)->nullable();
            $table->string('Consider_Plaid', 20)->nullable();
            $table->string('ByElection_Vote19', 20)->nullable();
            $table->string('Vote19', 20)->nullable();
            $table->string('ByElection_Vote18', 20)->nullable();
            $table->string('Vote18', 20)->nullable();
            $table->string('byelection_Vote17', 20)->nullable();
            $table->string('westminster_Vote17', 20)->nullable();
            $table->string('Vote17', 20)->nullable();
            $table->string('byelection_Vote16', 20)->nullable();
            $table->string('Vote16', 20)->nullable();
            $table->string('EURef_Vote16', 20)->nullable();
            $table->string('byelection_Vote15', 20)->nullable();
            $table->string('Vote15', 20)->nullable();
            $table->string('ByElection_Vote14', 20)->nullable();
            $table->string('Vote14', 20)->nullable();
            $table->string('ByElection_Vote13', 20)->nullable();
            $table->string('Vote13', 20)->nullable();
            $table->string('ByElection_Vote12', 20)->nullable();
            $table->string('Vote12', 20)->nullable();
            $table->string('Vote11', 20)->nullable();
            $table->string('Vote_11', 20)->nullable();
            $table->string('Referendum11', 20)->nullable();
            $table->string('Declaration_Signed', 20)->nullable();
            $table->string('Voted_in_ByElection_2019', 20)->nullable();
            $table->string('Voted_in_2019', 20)->nullable();
            $table->string('Voted_in_ByElection_2018', 20)->nullable();
            $table->string('Voted_in_2018', 20)->nullable();
            $table->string('Voted_in_byelection_2017', 20)->nullable();
            $table->string('Voted_in_westminster_2017', 20)->nullable();
            $table->string('Voted_in_2017', 20)->nullable();
            $table->string('Voted_in_byelection_2016', 20)->nullable();
            $table->string('Voted_in_2016', 20)->nullable();
            $table->string('Voted_in_EURef_2016', 20)->nullable();
            $table->string('Voted_in_byelection_2015', 20)->nullable();
            $table->string('Voted_in_2015', 20)->nullable();
            $table->string('Voted_in_ByElection_2014', 20)->nullable();
            $table->string('Voted_in_2014', 20)->nullable();
            $table->string('Voted_In_ByElection_2013', 20)->nullable();
            $table->string('Voted_in_2013', 20)->nullable();
            $table->string('Voted_in_ByElection_2012', 20)->nullable();
            $table->string('Voted_in_2012', 20)->nullable();
            $table->string('Voted_in_2011', 20)->nullable();
            $table->string('Voted_in_2010', 20)->nullable();
            $table->string('Voted_in_Ref_2011', 20)->nullable();
            $table->string('Attainer_DOB', 20)->nullable();
            $table->string('Interests_Held', 20)->nullable();
            $table->string('Occupation', 20)->nullable();
            $table->string('Welsh_Speaker', 20)->nullable();
            $table->string('Postal_Vote', 20)->nullable();
            $table->string('Comments', 20)->nullable();
            $table->string('Entitlement', 20)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elector_data');
    }
}
