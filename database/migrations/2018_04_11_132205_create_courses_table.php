<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',60);
            $table->string('slug',80);
            $table->text('description');
            $table->string('thumbnail');
            $table->float('rating');
            $table->unsignedInteger('student_count');
            $table->unsignedDecimal('price');
            $table->unsignedTinyInteger('status')->index();
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('author_id');
            
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('cascade');

            $table->foreign('author_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
}
