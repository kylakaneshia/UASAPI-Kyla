<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArtistSeeder extends Seeder
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
                'nama_artis'=>$faker->name,
                'genre_music'=>$faker->word            ];
    
                 Artist::create($data);

        }

       
    }
}
