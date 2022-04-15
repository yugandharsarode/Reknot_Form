<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('college', 50);
            $table->string('email')->unique();
            $table->string('phone', 15);
            $table->string('college_id', 20);
            $table->string('id_pic');
            $table->string('percentage', 10);
            $table->enum('pc', ["Yes", "No",]);
            $table->string('address', 50);
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
        Schema::dropIfExists('interns');
    }
};
