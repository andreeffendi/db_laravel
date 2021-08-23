<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sharingvision_id') -> unsigned();
            $table->string('title', 200);
            $table->text('content')->nullable();
            $table->string('category', 100);
            $table->timestamp('created_date')->nullable();
            $table->timestamp('updated_date')->nullable();
            $table->string('status', 100);
            $table->timestamps();
        });

        Schema::table('programs', function (Blueprint $table) {
            $table->foreign('sharingvision_id')->references('id')->on('sharingvision')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
