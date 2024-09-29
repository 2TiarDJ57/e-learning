<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\User;
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

        \App\Models\User::factory()->create([
            'name' => 'Bachtiar',
            'email' => 'bachtiar@gmail.com',
            'password' => bcrypt('tiar123456'),
        ]);

        Fakultas::create([
            'nama_fakultas' => 'Psikologi'
        ]);

        Fakultas::create([
            'nama_fakultas' => 'Hukum'
        ]);

        Fakultas::create([
            'nama_fakultas' => 'Teknik'
        ]);

        // Fakultas::factory()
        //             ->has(Prodi::factory()->count(3), 'prodies')
        //             ->create();
        
        
    }
}
