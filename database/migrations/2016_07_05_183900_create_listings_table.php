<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string("item_name");
            $table->string("item_picture");
            $table->text("item_description");
            $table->integer("category_id")->unsigned()->index();
            $table->integer("pricing_rate_id")->unsigned()->index();
            $table->integer("hiring_cost");
            $table->integer("hiring_cost_with_expert");
            $table->string("item_location");
            $table->integer("available_quantity")->unsigned();
            $table->string("item_contact");
            $table->integer("supplier_id")->unsigned()->index();
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
        Schema::drop('listings');
    }
}
