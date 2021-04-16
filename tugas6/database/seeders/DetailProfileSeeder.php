<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         DB::table('detail_profile')->insert([
        'address' => 'Lumajang',
        'nomor_tlp' => '082232841514',
        'ttl' => '2000-04-25',
        'foto' => 'picture.png',
    ]);
 }
}