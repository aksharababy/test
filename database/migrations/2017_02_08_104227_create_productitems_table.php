<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productitems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Category')->unsigned();
            $table->string('ProductCode');
            $table->string('ProductName');
            $table->string('ShortName');
            $table->boolean('is_deleted'); 
            $table->foreign('Category')
                  ->references('id')->on('product_categories')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('productitems');
    }
}
