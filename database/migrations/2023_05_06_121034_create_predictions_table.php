<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predictions', function (Blueprint $table) {
            $table->id();
            $table->string("texte");
            $table->string("video");
            $table->string("audio");
            $table->foreignId("reve_id")->constrained("reves");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("predictions", function(Blueprint $table){
            $table->dropConstrainedForeignId("reve_id");
        });
        Schema::dropIfExists('predictions');
    }
}
