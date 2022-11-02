<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructions', function (Blueprint $table) {
            $table->id();
            $table->varchar('linkTo');
            $table->varchar('type');
            $table->varchar('assigned_vendor');
            $table->varchar('vendor_address');
            $table->varchar('attention_of');
            $table->varchar('quotation');
            $table->varchar('vendor_address');
            $table->tinyInteger('status')->comment('0=progres, 1=terminated, 2=completed');
            $table->varchar('invoice_to');
            $table->varchar('atachment');
            $table->varchar('desc_notes');
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
        Schema::dropIfExists('instructions');
    }
}
