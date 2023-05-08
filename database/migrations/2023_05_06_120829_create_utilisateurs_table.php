<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("email")->unique();
            $table->date("datenaissance");
            $table->string("sexe");
            $table->string("motdepasse");
            $table->string("photoprofil")->nullable();
            $table->foreignId("abonnement_id")->constrained("abonnements")->nullable();
            $table->integer("admin");
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
        Schema::table("utilisateurs", function(Blueprint $table){
            $table->dropConstrainedForeignId("abonnement_id");
        });
        Schema::dropIfExists('utilisateurs');
    }
}
