<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electors', function (Blueprint $table) {
            $table->id();
            $table->string('pd_e', 20)->nullable();
            $table->string('ElectorNumberPrefix', 20)->nullable();
            $table->string('ElectorNumber', 20)->nullable();
            $table->string('ElectorNumberSuffix', 20)->nullable();
            $table->string('ElectorMarkers', 20)->nullable();
            $table->date('ElectorDOB')->nullable();
            $table->string('ElectorSurname', 20)->nullable();
            $table->string('ElectorForename', 20)->nullable();
            $table->string('PostCode', 20)->nullable();
            $table->string('Address1', 20)->nullable();
            $table->string('Address2', 20)->nullable();
            $table->string('Address3', 20)->nullable();
            $table->string('Address4', 20)->nullable();
            $table->string('Address5', 20)->nullable();
            $table->string('Address6', 20)->nullable();
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
        Schema::dropIfExists('electors');
    }
}
