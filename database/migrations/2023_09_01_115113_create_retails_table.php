<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Model\Retail;

class CreateRetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retails', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('shop_name');
            $table->string('shop_address');
            $table->string('no_of_branches');
            $table->string('mobile_number');
            $table->string('alternate_mobile_number');
            $table->string('aadhar');
            $table->string('pan_card');
            $table->string('shop_photo');
            $table->string('visting_card');
            $table->string('shop_ownership');
            $table->string('gst');
            $table->string('profile_photo');
            $table->string('password');
            $table->string('status');
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
        Schema::dropIfExists('retails');
    }
}
