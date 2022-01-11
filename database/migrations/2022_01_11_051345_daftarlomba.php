<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Daftarlomba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarlomba', function (Blueprint $table) {
            $table->Increments('id')->nullable()->unsigned();
            $table->string('name',50);
            $table->string('jeniskelamin',2);
            $table->string('usia',2);
            $table->string('alamat',255);
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
        Schema::dropIfExists('daftarlomba');
    }
}
