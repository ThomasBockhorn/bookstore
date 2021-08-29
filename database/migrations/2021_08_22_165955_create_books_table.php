<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Author First Name');
            $table->string('Author Last Name');
            $table->string('Category');
            $table->text('Description')->nullable();
            $table->float('Price', 8, 2);
            $table->boolean('On Sale');
            $table->float('Sale Price', 8, 2)->nullable();
            $table->date('book_sale_start_date')->nullable();
            $table->date('book_sale_end_date')->nullable();
            $table->string('Image');
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
        Schema::dropIfExists('books');
    }
}