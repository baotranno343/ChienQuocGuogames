<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NaptheMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('napthe', function (Blueprint $table) {
            $table->id();
            //   $table->bigInteger('id_nguoidung');
            $table->foreignId('id_nguoidung')->constrained('nguoidung');
            $table->bigInteger('id_nhanvat');
            $table->string('sotien');
            $table->timestamps();
            $table->tinyInteger('trangthai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('napthe');
    }
}
