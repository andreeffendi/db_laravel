<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSharingvisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharingvision', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->text('content')->nullable();
            $table->string('category', 100);
            $table->timestamp('created_date')->nullable();
            $table->timestamp('updated_date')->nullable();
            $table->string('status', 100);
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
        Schema::dropIfExists('sharingvision');
    }
}
