<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* insertion (default)

        \DB::table("abonnements")->insert([
            ["nom"=>"Gratuit","prix"=>0],
            ["nom"=>"Standard","prix"=>10],
            ["nom"=>"Pro","prix"=>20],
        ]);

        \DB::table("utilisateurs")->insert([
            ["nom"=>"Rakoto","prenom"=>"Jean","email"=>"rakotojean@gmail.com","datenaissance"=>"1982-01-02","sexe"=>"Masculin","motdepasse"=>"jean","abonnement_id"=>1,"admin"=>0]
        ]);

        \DB::table("utilisateurs")->insert([
            ["nom"=>"Rakoto","prenom"=>"Jeanne","email"=>"admin@gmail.com","datenaissance"=>"1988-04-02","sexe"=>"Féminin","motdepasse"=>"admin","abonnement_id"=>1,"admin"=>1]
        ]);

        */
        
    }
}
