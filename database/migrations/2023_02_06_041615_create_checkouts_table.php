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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger( 'user_id');
            $table->unsignedBigInteger( 'camp_id');
            
            $table->string('card_number',20);
            $table->date('expired');
            $table->string('cvc');
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
};
