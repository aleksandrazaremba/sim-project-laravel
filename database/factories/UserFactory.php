<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'type' => $faker->type,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'address' => $faker->address,
        'location' => $faker->location,
        'citizennumber' => $faker->citizennumber,
        'dateofbirth' => $faker->dateofbirth,
        'sex' => $faker->sex,
        'allergies' => $faker->allergies,
        'remember_token' => str_random(10),


        'afc' => $faker->afc,
        'amh' => $faker->amh,
        'homem_tem_filhos' => $faker->homem_tem_filhos,
        'idadeelementofeminino' => $faker->idadeelementofeminino,
        'm_etnia' => $faker->m_etnia,
        'm_tabaco' => $faker->m_tabaco,
        'mulher_tem_filhos' => $faker->mulher_tem_filhos,
        'duracaoinfertilidade' => $faker->duracaoinfertilidade,
        'pesoelementofeminino' => $faker->pesoelementofeminino,
        'imcelementofeminino' => $faker->imcelementofeminino,
        'imcelementomasculino' => $faker->imcelementomasculino,
        'idadeelementomasculino' => $faker->idadeelementomasculino,
        'f_tabaco' => $faker->f_tabaco,
        'f_etnia' => $faker->f_etnia,
        'notes' => $faker->notes,
    
    ];
});
