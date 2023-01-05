<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderToPratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pratos', function (Blueprint $table) {

            if (Schema::hasColumn('pratos', 'order') == false){
                Schema::table('pratos', function (Blueprint $table){
                    $table->integer('order')->default(0)->comment('Ordem que os pratos aparecem');
                });
            }
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pratos', function (Blueprint $table) {
            //
        });
    }
}
