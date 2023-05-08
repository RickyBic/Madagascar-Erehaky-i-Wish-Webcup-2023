<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reves', function (Blueprint $table) {
            $table->id();
            $table->string("description")->nullable();
            $table->string("fichier")->nullable();
            $table->date("date");
            $table->foreignId("utilisateur_id")->constrained("utilisateurs");
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
        Schema::table("reves", function(Blueprint $table){
            $table->dropConstrainedForeignId("utilisateur_id");
        });
        Schema::dropIfExists('reves');
    }
}
