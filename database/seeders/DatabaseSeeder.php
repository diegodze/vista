<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\registro::factory()->create([
            'curp' => 'RALB020813MQ8',
            'paciente' => 'Brandon Ulises',
            'institucion' => 'IMSS'
        ]);

        \App\Models\registro::factory()->create([
            'curp' => 'RALD990115HJCMNG05',
            'paciente' => 'Diego Armando',
            'institucion' => 'CFE'
        ]);


        \App\Models\registro::factory()->create([
            'curp' => 'RIEJDU765JDKS',
            'paciente' => 'Juan Juan',
            'institucion' => 'CJFO'
        ]);
    }
}
