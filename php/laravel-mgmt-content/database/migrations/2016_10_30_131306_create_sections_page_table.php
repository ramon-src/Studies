<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsPageTable extends Migration
{

    public function up()
    {
        Schema::create('sections_page', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('order')->nullable();
            $table->string('box_color')->nullable();
            $table->string('text_color')->nullable()->default('#000000');
            $table->integer('page_id')->unsigned();
            $table->integer('col_lg')->unsigned()->default(12);
            $table->integer('col_md')->unsigned()->default(12);
            $table->integer('col_sm')->unsigned()->default(12);
            $table->integer('col_xs')->unsigned()->default(12);
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages');
        });
    }

    public function down()
    {
        Schema::drop('sections_page');
    }
}
