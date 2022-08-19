<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prop;

class PropsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Prop::create([
                'name' => 'name'.$i,
                'owner_id' => $i,
                'public_id' => 'public_id'.$i,
                'url' => 'url'.$i,
                'usage' => true,
            ]);
        }
    }

}
