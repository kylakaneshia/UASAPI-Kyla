<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $faker = Faker::create();
        for ($i=0;$i<20;$i++){
            $data = [
                'nama_pelanggan'=>$faker->name,
                'email'=>$faker->email,
                'nomor_telepon'=>$faker->phoneNumber            ];
    
                 Pelanggan::create($data);
        }

        
    }
}
