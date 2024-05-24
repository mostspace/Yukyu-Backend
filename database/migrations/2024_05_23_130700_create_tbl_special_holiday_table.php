<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSpecialHolidayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_special_holiday', function (Blueprint $table) {
            $table->integer('id')->default(1);
            $table->string('type');
            $table->integer('employee_id');
            $table->integer('holiday_type');
            $table->integer('grant_type')->default(0);
            $table->integer('granted_days_type')->default(0);
            $table->integer('granted_days')->default(0);
            $table->longText('note')->nullable();
            $table->timestamp('granted_at');
            $table->timestamp('expired_at')->nullable();
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
        Schema::dropIfExists('tbl_special_holiday');
    }
}
